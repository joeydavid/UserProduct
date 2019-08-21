<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Banner;
use App\Service;
use App\Porfolio;

class FrontendController extends Controller
{
    public function index()
    {
        $porfolios = Porfolio::all();
        $banners = Banner::all();
        $services = Service::all();
        return view('frontend.index', compact('banners', 'services', 'porfolios'));
    }
}
