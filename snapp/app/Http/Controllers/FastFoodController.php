<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\FastFood;
use App\Http\Requests\StoreFastFoodRequest;
use App\Http\Requests\UpdateFastFoodRequest;
use Illuminate\Http\Request;

class FastFoodController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $fasts=FastFood::all();
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
    public function store(StoreFastFoodRequest $request)
    {
        $fileMime=null;
        $filePath=null;

       $validated = $request->validated();
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('fast_food', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        FastFood::create([
            'name'=>$validated['name'],
            'image'=>$filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price'=>$validated['price'],
            'description'=>$validated['description'],
            'discount_id'=>$validated['discount_id'],


        ]);
        return redirect()->route('Food.fastFood.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(FastFood $fastFood)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $fast=FastFood::FindOrFail($id);
        return view('Admin.categoryFastfood.edit',compact('fast'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFastFoodRequest $request,string $id)
    {  $filePath=null;
        $fileMime=null;
        $fast=FastFood::FindOrFail($id);
       $validated=$request->validated();
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('fast_food', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        $fast->update([
            'name'=>$validated['name'],
            'image'=>$filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price'=>$validated['price'],
            'description'=>$validated['description'],
        ]);
        return redirect()->route('Food.fastFood.index' );
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(FastFood $fastFood,string $id)
    {
        $fasts=FastFood::FindOrFail($id);
        $fasts->delete();
        return redirect()->route('Food.fastFood.index');
    }
}
