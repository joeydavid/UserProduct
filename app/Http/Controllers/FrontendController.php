<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Service;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = Banner::all();
        $services = Service::all();
        return view('frontend.index', compact('banners', 'services'));
    }
}
