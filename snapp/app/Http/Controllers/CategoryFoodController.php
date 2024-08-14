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
//        $discount=Discount::all();
        return view('Admin.food.index', compact('foodCategory'));
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
    public function store(StoreCategoryFoodRequest $request)
    {
        $validated = $request->validated();

        $filePath = null;
        if ($request->hasFile('ImageFood')) {
            $filePath = $request->file('ImageFood')->store('category_food', 'public');
            $mime = $request->file('ImageFood')->getClientOriginalExtension();
        }

        // Create CategoryFood
        CategoryFood::create([
            'name' => $validated['name'],
            'ImageFood' => $filePath,
            'mime' => $mime ?? null,
            'price' => $validated['price'],
            'discount_id' => $validated['discount_id'],
            'description' => $validated['description'],
        ]);

        // Redirect with a success message (optional)
        return redirect()
            ->route('Admin.food.index');
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
    public function update(UpdateCategoryFoodRequest $request, CategoryFood $categoryFood,string $id)
    {
        $foodCategory=CategoryFood::findOrFail($id);
       $validated=$request->validated();
       if ($request->hasFile('ImageFood')) {
           $filePath=$request->file('ImageFood')->store('category_food', 'public');
           $mime=$request->file('ImageFood')->getClientOriginalExtension();
       }

        $foodCategory->update([
            'name' => $validated['name'],
            'ImageFood' => $filePath,
            'mime' => $mime ?? null,
            'price' => $validated['price'],

            'description' => $validated['description'],
        ]);
        return redirect()->route('Admin.food.index',compact('foodCategory'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( string $id)
    {
        $foodCategoory=CategoryFood::findOrFail($id);
        $foodCategoory->delete();

        return redirect()->route('Admin.food.index',compact('foodCategoory'));
    }
}
