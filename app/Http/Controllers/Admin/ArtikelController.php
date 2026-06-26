<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;

class ArtikelController extends Controller
{
    public function index()
    {
        $artikels = Artikel::latest()->paginate(10);
        return view('admin.artikel.index', compact('artikels'));
    }

    public function create()
    {
        return view('admin.artikel.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:artikels,title',
            'description' => 'required',
            'kategori' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('artikels', 'public');
        }

        Artikel::create($data);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil ditambahkan');
    }

    public function edit(Artikel $artikel)
    {
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function update(Request $request, Artikel $artikel)
    {
        $request->validate([
            'title' => 'required|string|max:255|unique:artikels,title,' . $artikel->id,
            'description' => 'required',
            'kategori' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'status' => 'required|in:draft,published,archived',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($artikel->image) {
                Storage::disk('public')->delete($artikel->image);
            }
            $data['image'] = $request->file('image')->store('artikels', 'public');
        }

        $artikel->update($data);

        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil diperbarui');
    }

    public function destroy(Artikel $artikel)
    {
        if ($artikel->image) {
            Storage::disk('public')->delete($artikel->image);
        }
        $artikel->delete();
        return redirect()->route('admin.artikel.index')->with('success', 'Artikel berhasil dihapus');
    }

    public function exportPdf()
    {
        $artikels = Artikel::all();
        $pdf = Pdf::loadView('admin.artikel.pdf', compact('artikels'));
        return $pdf->download('laporan-artikel.pdf');
    }
}
