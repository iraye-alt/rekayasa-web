<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Support\Facades\Storage;

class CompanyProfileController extends Controller
{
    public function index()
    {
        $profiles = CompanyProfile::all();
        return view('admin.company_profile.index', compact('profiles'));
    }

    public function create()
    {
        return view('admin.company_profile.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        CompanyProfile::create($data);

        return redirect()->route('admin.company_profile.index')->with('success', 'Data Profil berhasil ditambahkan');
    }

    public function edit(CompanyProfile $company_profile)
    {
        return view('admin.company_profile.edit', compact('company_profile'));
    }

    public function update(Request $request, CompanyProfile $company_profile)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->all();

        if ($request->hasFile('image')) {
            if ($company_profile->image) {
                Storage::disk('public')->delete($company_profile->image);
            }
            $data['image'] = $request->file('image')->store('profiles', 'public');
        }

        $company_profile->update($data);

        return redirect()->route('admin.company_profile.index')->with('success', 'Data Profil berhasil diperbarui');
    }

    public function destroy(CompanyProfile $company_profile)
    {
        if ($company_profile->image) {
            Storage::disk('public')->delete($company_profile->image);
        }
        $company_profile->delete();
        return redirect()->route('admin.company_profile.index')->with('success', 'Data Profil berhasil dihapus');
    }
}
