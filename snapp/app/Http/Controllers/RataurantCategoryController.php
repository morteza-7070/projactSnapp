<?php

namespace App\Http\Controllers;

use App\Models\RataurantCategory;
use App\Http\Requests\StoreRataurantCategoryRequest;
use App\Http\Requests\UpdateRataurantCategoryRequest;
use Illuminate\Http\Request;

class RataurantCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $category=RataurantCategory::all();


        return view('Admin.index',compact('category'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name'=>'max:5000',
            'image_restaurant'=>'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        if($request->hasfile('image_restaurant')){
            $filePath = $request->file('image_restaurant')->store('rataurant_categories','public');
            $fileMime = $request->file('image_restaurant')->getClientMimeType();

        }
        RataurantCategory::create([
            'name'=>$request->name,
            'image_restaurant'=>$filePath,
            'image_mime'=>$fileMime,
        ]);
        return redirect()->route('Admin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(RataurantCategory $rataurantCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(RataurantCategory $rataurantCategory,string $id)
    {
        $category=RataurantCategory::findOrFail($id);
        return view('Admin.edit',compact('category','id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $category=RataurantCategory::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'image_restaurant' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

        if ($request->hasFile('image_restaurant')) {
            $filePath = $request->file('image_restaurant')->store('rataurant_categories', 'public');
            $fileMime = $request->file('image_restaurant')->getClientMimeType();

        $category->update([
            'name'=>$request->name,
            'image_restaurant'=>$filePath,
            'mime'=>$fileMime,]);
        }
        return redirect()->route('Admin.index',compact('category'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(RataurantCategory $rataurantCategory,string $id)
    {
        $category=RataurantCategory::findOrFail($id);
        $category->delete();
        //dd($category);
        return redirect()->route('Admin.index',compact('category'));
    }
}
