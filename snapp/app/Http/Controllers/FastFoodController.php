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
    public function store(Request $request)
    {
        $fileMime=null;
        $filePath=null;

        $request->validate([
            'name'=>'required',
            'description'=>'required',
            'price'=>'required',
            'discount_id'=>'required',
            'image'=>'mimes:jpeg,jpg,png',

        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('fast_food', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        FastFood::create([
            'name'=>$request->name,
            'image'=>$filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price'=>$request->price,
            'description'=>$request->description,
            'discount_id'=>$request->discount_id,


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
    public function update(Request $request,string $id)
    {  $filePath=null;
        $fileMime=null;
        $fast=FastFood::FindOrFail($id);
        $request->validate([
            'name'=>'required',
//            'description'=>'required',
            'price'=>'required',
//            'discount_id'=>'required',
//            'image'=>'mimes:jpeg,jpg,png',

        ]);
        if ($request->hasFile('image')) {
            $filePath = $request->file('image')->store('fast_food', 'public');
            $fileMime = $request->file('image')->getMimeType();
        }
        $fast->update([
            'name'=>$request->name,
            'image'=>$filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price'=>$request->price,
            'description'=>$request->description,
//            'discount_id'=>$request->discount_id
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
