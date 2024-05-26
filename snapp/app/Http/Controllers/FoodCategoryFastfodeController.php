<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\FoodCategoryFastfode;
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
        $fasts=FoodCategoryFastfode::all();
        $discounts=Discount::all();
        return view('Admin.categoryFastfood.index',compact('fasts','discounts'));
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
        $request->validate([
            'name'=>'required',
            'image_food'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'price'=>'required',
            'description'=>'required',
            

        ]);
        $foodCategory= FoodCategoryFastfode::create([
            'name'=>$request->name,
            'image_food'=>$request->image_food,
            'price'=>$request->price,
            'description'=>$request->description,
//            'discount_id'=>$request->discount_id


        ]);
        $foodCategory->discounts()->attach($request->discount_id);
        return redirect()->route("Food.fastFood.index")->with('success','Discount Added Successfully');
    }

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
    public function destroy(FoodCategoryFastfode $foodCategoryFastfode)
    {
        //
    }
}
