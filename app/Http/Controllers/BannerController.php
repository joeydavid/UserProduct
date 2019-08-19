<?php

namespace App\Http\Controllers;

use App\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $banners = Banner::latest()->paginate(5);
        // return view('banners.index', compact('banners'));
        $banners = Banner::all();
        return view('banners.index', compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('banners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'bannertitle' => 'required',
            'bannerdescription' => 'required',
        ]);
        Banner::create([
            'bannertitle' => $request->bannertitle,
            'bannerdescription' => $request->bannerdescription,
        ]);
        return redirect('banners')->with('success', 'Banner Added Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $banner = Banner::find($id);
        return view('banners.edit', compact('banner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Banner $banner)
    {
        $request->validate([
            'bannertitle' => 'required',
            'bannerdescription' => 'required',
        ]);
        $banner =  Banner::find($banner->id);
        $banner->bannertitle = $request->bannertitle;
        $banner->bannerdescription = $request->bannerdescription;
        $banner->save();
        return redirect('banners')->with('success', 'Banner Updated Successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Banner  $banner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Banner $banner)
    {
        $banner->delete();
        return redirect()->back()->with('danger', 'Banner Deleted Successfully.');
    }
}
