<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\FoodCategoryIranian;
use App\Http\Requests\StoreFoodCategoryIranianRequest;
use App\Http\Requests\UpdateFoodCategoryIranianRequest;
use Illuminate\Http\Request;

class FoodCategoryIranianController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $iranian = FoodCategoryIranian::all();
        return view('Admin.categoryIranian.index', compact('iranian'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts = Discount::all();
        return view('Admin.categoryIranian.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'image_food'=>'required',
            'price'=>'required',
            'description'=>'required',



        ]);
        FoodCategoryIranian::create([
           // $request->all()
            'name'=>$request->name,
            'image_food'=>$request->image_food,
            'price'=>$request->price,
            'description'=>$request->description,
            'discount_id'=>$request->discount_id
        ]);
        return redirect()->route('Food.iranian.index');


    }

    /**
     * Display the specified resource.
     */
    public function show(FoodCategoryIranian $foodCategoryIranian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodCategoryIranian $foodCategoryIranian,string $id)
    {
        $iran = FoodCategoryIranian::FindOrFail($id);
        return view('Admin.categoryIranian.edit',compact('iran'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,string $id)
    {
        $iran=FoodCategoryIranian::FindOrFail($id);
        $request->validate([
            'name'=>'required',
            'image_food'=>'required',
            'price'=>'required',
            'description'=>'required',
            'discount_id'=>'required',

        ]);
        $iran->update([

            'name'=>$request->name,
            'image_food'=>$request->image_food,
            'price'=>$request->price,
            'description'=>$request->description,
            'discount_id'=>$request->discount_id
        ]);
        return redirect()->route('Food.iranian.index',compact('iran'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodCategoryIranian $foodCategoryIranian,string $id)
    {
        $destroy=FoodCategoryIranian::FindOrFail($id);
        $destroy->delete();
        return redirect()->route('Food.iranian.index',compact('destroy'));
    }
}
