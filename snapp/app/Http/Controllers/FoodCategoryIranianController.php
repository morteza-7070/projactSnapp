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
    public function create()
    {
        $discounts = Discount::all();
        return view('Admin.categoryIranian.create',compact('discounts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function store(StoreFoodCategoryIranianRequest  $request)
    {
        $filePath = null;
        $fileMime = null;

        $validated=$request->validated();

        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('food_category_iranians', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }

        FoodCategoryIranian::create([
            'name' => $validated['name'],
            'image' => $filePath,
              'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price' => $validated['price'],
            'description' => $validated['description'],
            'discount_id' => $validated['discount_id'],
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
    public function update(UpdateFoodCategoryIranianRequest $request,string $id)
    {
        $iran=FoodCategoryIranian::FindOrFail($id);
       $validated=$request->validated();
        if($request->hasFile('image')){
        $filPath=$request->file('image')->store('food_category_iranians','public');
        $filMime=$request->file('image')->getMimeType();
    }
        $iran->update([

            'name'=>$validated['name'],
            'image'=>$filPath,
            'mime'=>$filMime,
            'price'=>$validated['price'],
            'description'=>$validated['description'],
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
