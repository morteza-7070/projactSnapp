<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\FoodCategorySandwich;
use App\Http\Requests\StoreFoodCategorySandwichRequest;
use App\Http\Requests\UpdateFoodCategorySandwichRequest;
use Illuminate\Http\Request;

class FoodCategorySandwichController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sandwiches=FoodCategorySandwich::all();
        return view('Admin.CategorySandwich.index',compact('sandwiches'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {$discounts=Discount::all();
        return view('Admin.CategorySandwich.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFoodCategorySandwichRequest $request)
    {
//        $request->validate([
//            'name'=>'required',
//        ]);
       $validated= $request->validated();
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('images', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        FoodCategorySandwich::create([
            'name'=>$validated['name'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'price'=>$validated['price'],
            'description'=>$validated['description'],
            'discount_id'=>$request->discount_id
        ]);
        return redirect()->route('Food.sandwich.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(FoodCategorySandwich $foodCategorySandwich)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(FoodCategorySandwich $foodCategorySandwich,string $id)
    {
        $sandwich=FoodCategorySandwich::FindOrFail($id);
        return view('Admin.CategorySandwich.edit',compact('sandwich'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFoodCategorySandwichRequest $request, FoodCategorySandwich $foodCategorySandwich,string $id)
    {  $sandwich=FoodCategorySandwich::FindOrFail($id);
      $validated= $request->validated([]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('food_category_sandwiches', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        $sandwich->update([
            'name'=> $validated['name'],
            'image'=>$filePath,
            'mime'=>$fileMime,
            'price'=>$validated['price'],
            'description'=>$validated['description'],
        ]);
        return redirect()->route('Food.sandwich.index');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FoodCategorySandwich $foodCategorySandwich,string $id)
    {
        $sandwich=FoodCategorySandwich::FindOrFail($id);
        $sandwich->delete();
        return redirect()->route('Food.sandwich.index');

    }
}
