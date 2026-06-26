<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Artikel;
use App\Models\CompanyProfile;
use App\Models\Product;
use App\Models\Gallery;

class DashboardController extends Controller
{
    public function index()
    {
        $artikelCount = Artikel::count();
        $profileCount = CompanyProfile::count();
        $productCount = Product::count();
        $galleryCount = Gallery::count();

        return view('admin.dashboard', compact('artikelCount', 'profileCount', 'productCount', 'galleryCount'));
    }
}
