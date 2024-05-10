<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Http\Requests\StoreDiscountRequest;
use App\Http\Requests\UpdateDiscountRequest;
use Illuminate\Http\Request;

class DiscountController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $discount=Discount::all();
        return view('Admin.Discount.index',compact('discount'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admin.Discount.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'percentage'=>'required'

        ]);
        Discount::create([
            'name'=>$request->name,
            'percentage'=>$request->percentage
        ]);
        return redirect()->route("Admin.discount.index")->with('success','Discount Added Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Discount $discount)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Discount $discount,string $id)
    {
        $discount=Discount::findOrFail($id);
        return view('Admin.discount.edit',compact('discount'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Discount $discount,string $id)
    {
        $discount=Discount::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255|min:2',
            "percentage"=>'required|string|max:20'
        ]);

        $discount->update([
            'name'=>$request->name,
            'percentage'=>$request->percentage,
        ]);
        return redirect()->route('Admin.discount.index',compact('discount'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Discount $discount,string $id)
    {
        $discount=Discount::findOrFail($id);
        $discount->delete();

        return redirect()->route('Admin.discount.index',compact('discount'));
    }
}
