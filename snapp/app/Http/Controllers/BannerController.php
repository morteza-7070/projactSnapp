<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Http\Requests\StoreBannerRequest;
use App\Http\Requests\UpdateBannerRequest;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $banners=Banner::all();
        return view('Admin.Banners.index',compact('banners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Banners.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image_banners'=>'required',


        ]);
        Banner::create([
            'image_banners'=>$request->image_banners,


        ]);
        return redirect()->route('Admin.banner.index')->with('success','Banner created successfully.');


    }

    /**
     * Display the specified resource.
     */
    public function show(Banner $banner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Banner $banner,string $id)
    {

        $banners=Banner::findOrFail($id);
        return view('Admin.Banners.edit',compact('banners','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Banner $banner,string $id)
    {
        $banners=Banner::findOrFail($id);
        $request->validate([
            'image_banners' => 'required',

        ]);

        $banners->update([
            'image_banners'=>$request->image_banners,

        ]);
        return redirect()->route('Admin.banner.index',compact('banners','id'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Banner $banner,string $id)
    {
        $banners=Banner::findOrFail($id);
        $banners->delete();

        return redirect()->route('Admin.banner.index',compact('banners','id'));
    }
}
