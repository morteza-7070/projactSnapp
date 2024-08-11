<?php

namespace App\Http\Controllers;

use App\Models\Discount;
use App\Models\fried;
use App\Http\Requests\StorefriedRequest;
use App\Http\Requests\UpdatefriedRequest;

class FriedController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Crackers=Fried::all();
        return view('Admin.CategoryFreid.index',compact('Crackers'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $discounts=Discount::all();
        return view('Admin.categoryFreid.create',compact('discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefriedRequest $request)
    {
        $fileMime=null;
        $filePath=null;
        $validated=$request->validated();
        if ($request->hasFile('image')) {
            $filePath=$request->file('image')->store('frieds','public');
            $fileMime=$request->file('image')->getMimeType();
        }
        fried::create([
            'name'=>$validated['name'],
            'description'=>$validated['description'],
            'price'=>$validated['price'],
            'image'=>$filePath,
            'discount_id'=>$validated['discount_id'],
            'mime_type'=>$fileMime,
        ]);
        return redirect()->route('Fried.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(fried $fried)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(fried $fried,string $id)
    {
       $fried=fried::FindOrFail($id);
        return view('Admin.categoryFreid.edit',compact('fried'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefriedRequest $request, fried $fried,string $id)
    {
        $filePath=null;
        $fileMime=null;
        $fried=fried::FindOrFail($id);
        $validated=$request->validated();
        if ($request->hasFile('image')) {
            $filePath=$request->file('image')->store('frieds','public');
            $fileMime=$request->file('image')->getMimeType();

        }

        $fried->update([
            'name'=>$validated['name'],
            'image'=>$filePath,
            'mime' => $fileMime ? $fileMime : 'application/octet-stream',
            'price'=>$validated['price'],
            'description'=>$validated['description'],
        ]);
        return redirect()->route('Fried.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fried $fried,string $id)
    {
        $fried=fried::FindOrFail($id);
        $fried->delete();
        return redirect()->route('Fried.index');
    }
}
