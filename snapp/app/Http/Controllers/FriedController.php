<?php

namespace App\Http\Controllers;

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
        $freids=Fried::all();
        return view('Admin.CategoryFreid.index',compact('freids'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorefriedRequest $request)
    {
        //
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
    public function edit(fried $fried)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatefriedRequest $request, fried $fried)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(fried $fried)
    {
        //
    }
}
