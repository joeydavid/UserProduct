<?php

namespace App\Http\Controllers;

use App\Porfolio;
use Illuminate\Http\Request;

class PorfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $porfolios = Porfolio::all();
        return view('porfolios.index', compact('porfolios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('porfolios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'text' => 'required',
        ]);
        $imageName = rand().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        // dd($imageName);
        Porfolio::create([
            'image' => $imageName,
            'title' => $request->title,
            'text' => $request->text,
        ]);
        return redirect('porfolios')->with('success', 'Porfolio Added Successfully.')
        ->with('image',$imageName);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $porfolio = Porfolio::find($id);
        return view('porfolios.edit', compact('porfolio'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Porfolio $porfolio)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'title' => 'required',
            'text' => 'required',
        ]);
        $imageName = rand().'.'.request()->image->getClientOriginalExtension();
        request()->image->move(public_path('images'), $imageName);

        $porfolio =  Porfolio::find($porfolio->id);
        $porfolio->image = $imageName;
        $porfolio->title = $request->title;
        $porfolio->text = $request->text;
        $porfolio->save();
        return redirect('porfolios')->with('success', 'Porfolio Updated Successfully.')
        ->with('image',$imageName);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Porfolio  $porfolio
     * @return \Illuminate\Http\Response
     */
    public function destroy(Porfolio $porfolio)
    {
        // dd($porfolio);
        $porfolio->delete();
        return redirect()->back()->with('danger', 'Porfolio Deleted Successfully.');
    }
}
