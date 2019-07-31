<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContextController extends Controller
{

    public function about()
    {
        return view('context.about');
    }

    public function blog()
    {
        return view('context.blog');
    }

    public function contact()
    {
        return view('context.contact');
    }

}
