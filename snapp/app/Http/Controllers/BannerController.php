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
        $banners = Banner::all();
        return view('admin.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.banners.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'file' => 'required|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('banners', 'public');
            $fileMime = $request->file('file')->getClientMimeType();

            Banner::create([
                'file' => $filePath,
                'mime' => $fileMime,
            ]);
        }

        return redirect()->route('Admin.banner.index');
    }

    public function edit($id)
    {
        $banner = Banner::findOrFail($id);
        return view('Admin.Banners.edit', compact('banner'));
    }

    public function update(Request $request, $id)
    {
        $banner = Banner::findOrFail($id);

        $request->validate([
            'file' => 'nullable|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('file')) {
            $filePath = $request->file('file')->store('banners', 'public');
            $fileMime = $request->file('file')->getClientMimeType();

            $banner->update([
                'file' => $filePath,
                'mime' => $fileMime,
            ]);
        }

        return redirect()->route('Admin.banner.index');
    }

    public function destroy($id)
    {
        $banner = Banner::findOrFail($id);
        $banner->delete();
        return redirect()->route('Admin.banner.index');
    }
//    public function index()
//    {
//        $banners=Banner::all();
//        return view('Admin.Banners.index',compact('banners'));
//    }
//
//    /**
//     * Show the form for creating a new resource.
//     */
//    public function create()
//    {
//        return view('Admin.Banners.create');
//    }
//
//    /**
//     * Store a newly created resource in storage.
//     */
//    public function store(Request $request)
//    {
//        // Validate the incoming request
//        $request->validate([
//            'images3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//
//        ]);
//
//        // Handle file upload for 'file'
////        if ($request->hasFile('file')) {
////            $filePath = $request->file('file')->getRealPath();
////            $fileDoc = file_get_contents($filePath);
////            $fileBase64 = base64_encode($fileDoc);
////            $fileMime = $request->file('file')->getClientMimeType();
////        }
//        if($request->hasFile('images3')){
//            $file = $request->file('images3');
//            $extension = $file->getClientOriginalExtension();
//            $filename = time().'.'.$extension;
//            $path='uploads/banners';
//            $file->move($path,$filename);
//        }
//
//
//
//
//
//        Banner::create([
//
//            'images3' => $path.$filename,
////            'images3'=>$request->file('images3')->getClientOriginalName(),
//
//        ]);
//
//        // Redirect with success message
//        return redirect()->route('Admin.banner.index')->with('success', 'Banner created successfully.');
//    }
//
////
//
//    /**
//     * Display the specified resource.
//     */
//    public function show(Banner $banner)
//    {
//        //
//    }
//
//    /**
//     * Show the form for editing the specified resource.
//     */
////    public function edit(Banner $banner,string $id)
////    {
////
////        $banners=Banner::findOrFail($id);
////        return view('Admin.Banners.edit',compact('banners','id'));
////    }
////
////    /**
////     * Update the specified resource in storage.
////     */
////    public function update(Request $request, Banner $banner,string $id)
////    {
////        $banners=Banner::findOrFail($id);
////        $request->validate([
////
////            'file' => 'required',
////
////        ]);
////
////        if ($request->hasFile('file')) {
////            $filePath = $request->file('file')->getRealPath();
////            $fileDoc = file_get_contents($filePath);
////            $fileBase64 = base64_encode($fileDoc);
////            $fileMime = $request->file('file')->getClientMimeType();
////
////            $banner->update([
////                'file' => $fileBase64,
////               'mime' => $fileMime,
////            ]);
////
////        }
////        return redirect()->route('Admin.banner.index',compact('banners','id'));
////    }
//    public function edit(Banner $banner, string $id)
//    {
//        $banner = Banner::findOrFail($id);
//        return view('Admin.Banners.edit', compact('banner'));
//    }
//
//    /**
//     * Update the specified resource in storage.
//     */
//    public function update(Request $request, string $id)
//    {
//        $banner = Banner::findOrFail($id);
//
//        $request->validate([
//            'images3' => 'required|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
//        ]);
//
//        if ($request->hasFile('file')) {
//            $filePath = $request->file('file')->store('banners', 'public'); // Store file in the 'public/banners' directory
//            $fileMime = $request->file('file')->getClientMimeType();
//
//            $banner->update([
//                'images3' => $filePath,
////                'mime' => $fileMime,
//            ]);
//        }
//
//        return redirect()->route('Admin.banner.index');
//    }
//
//
//    /**
//     * Remove the specified resource from storage.
//     */
//    public function destroy(Banner $banner,string $id)
//    {
//        $banners=Banner::findOrFail($id);
//        $banners->delete();
//
//        return redirect()->route('Admin.banner.index',compact('banners','id'));
//    }
}
