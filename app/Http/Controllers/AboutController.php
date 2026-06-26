<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProfile;

class AboutController extends Controller
{
    public function index(){
        $profiles = CompanyProfile::all();
        return view('pages.about', compact('profiles'));
    }
}
