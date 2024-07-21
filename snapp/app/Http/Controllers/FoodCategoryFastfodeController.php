<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\FoodCategoryFastfood;
use App\Http\Requests\StoreFoodCategoryFastfodeRequest;
use App\Http\Requests\UpdateFoodCategoryFastfodeRequest;
use Illuminate\Http\Request;

class FoodCategoryFastfodeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $fasts=FoodCategoryFastfood::all();
        return view('Admin.categoryFastfood.index',compact('fasts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts=Discount::all();
        return view('Admin.categoryFastfood.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $filePath = null;
        $fileMime = null;
        $request->validate([
            'name' => 'required',
            'image' => 'required',
            'price' => 'required',
            'description' => 'required',
            'discount_id' => 'required',
        ]);
  
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('food_category_fastfoods', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }

        $foodCategory = FoodCategoryFastfood::create([
            'name' => $request->name,
            'image' => $filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price' => $request->price,
            'description' => $request->description,
            'discount_id' => $request->discount_id,
        ]);

        return redirect()->route("Food.fastFood.index")->with('success', 'Discount Added Successfully');
    }
//    public function store(Request $request)
//    {
//        $filePath = null;
//        $fileMime = null;
//        $request->validate([
//            'name'=>'required',
//            'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
//
//            'price'=>'required',
//            'description'=>'required',
//            'discount_id'=>'required'
//
//
//        ]);
//        if($request->hasfile('image')){
//            $filePath = $request->file('image')->store('food_category_fastfoods','public');
//            $fileMime = $request->file('image')->getMimeType();
//
//        }
//        $foodCategory= FoodCategoryFastfood::create([
//            'name'=>$request->name,
//            'image'=>$filePath,
//            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
//            'price'=>$request->price,
//            'description'=>$request->description,
//            'discount_id'=>$request->discount_id
//
//
//        ]);
////        $foodCategory->discounts()->attach($request->discount_id);
//        return redirect()->route("Food.fastFood.index")->with('success','Discount Added Successfully');
//    }

    /**
     * Display the specified resource.
     */
    public function show(FoodCategoryFastfode $foodCategoryFastfode)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodCategoryFastfode $foodCategoryFastfode)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodCategoryFastfodeRequest $request, FoodCategoryFastfode $foodCategoryFastfode)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodCategoryFastfood $foodCategoryFastfode,string $id)
    {
        $fasts=FoodCategoryFastfood::FindOrFail($id);
        $fasts->delete();
        return redirect()->route("Food.fastFood.index")->with('success','Discount Deleted Successfully');
    }
}
