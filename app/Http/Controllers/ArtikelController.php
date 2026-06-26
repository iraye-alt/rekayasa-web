<?php

namespace App\Http\Controllers;

use App\Models\Artikel;
use Illuminate\Http\Request;

class ArtikelController extends Controller
{
    public function index(){
       
        $artikels = Artikel::paginate(3);
        return view('pages.artikel', compact('artikels') );
    }
     public function show(string $id)
{
    $artikel = Artikel::findOrFail($id);
    return view('pages.artikel-detail', compact('artikel'));
}
}
