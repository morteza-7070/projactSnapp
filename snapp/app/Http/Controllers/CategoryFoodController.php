<?php

namespace App\Http\Controllers;

use App\Models\CategoryFood;
use App\Http\Requests\StoreCategoryFoodRequest;
use App\Http\Requests\UpdateCategoryFoodRequest;
use App\Models\Discount;
use Illuminate\Http\Request;

class CategoryFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $foodCategory = CategoryFood::all();
        $discount=Discount::all();
        return view('Admin.food.index', compact('foodCategory','discount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()

    {
        $discounts=Discount::all();

        return view('Admin.food.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:255',
            'image_food'=>'required',

        ]);
        CategoryFood::create([
            'name'=>$request->name,
            'image_food'=>$request->image_food,
        ]);
        return redirect()->route('Admin.food.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(CategoryFood $categoryFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CategoryFood $categoryFood,string $id)
    {
        $foodCategory = CategoryFood::findOrFail($id);
        return view('Admin.food.edit', compact('foodCategory'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CategoryFood $categoryFood,string $id)
    {
        $foodCategory=CategoryFood::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'image_food' => 'required',
        ]);

        $foodCategory->update([
            'name'=>$request->name,
            'image_food'=>$request->image_food,
        ]);
        return redirect()->route('Admin.food.index',compact('foodCategory'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CategoryFood $categoryFood , string $id)
    {
        $foodCategoory=CategoryFood::findOrFail($id);
        $foodCategoory->delete();

        return redirect()->route('Admin.food.index',compact('foodCategoory'));
    }
}
