<?php

namespace App\Http\Controllers;

use App\Models\formRestaurant;
use App\Http\Requests\StoreformRestaurantRequest;
use App\Http\Requests\UpdateformRestaurantRequest;
use Illuminate\Http\Request;

class FormRestaurantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forms = formRestaurant::all();
        return view('form restaurant.index', compact('forms'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('form restaurant.formRestaurant');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|string|max:255',
            'type'=>'required',
            'phoneNumber'=>'required|string|max:255',
            'address'=>'required|string|max:255',
            'accountNumber'=>'required'

        ]);
        formRestaurant::create([
            'name'=>$request->name,
            'type'=>$request->type,
            'phoneNumber'=>$request->phoneNumber,
            'address'=>$request->address,
            'accountNumber'=>$request->accountNumber,
        ]);
        return redirect()->route('seller.form.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(formRestaurant $formRestaurant)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(formRestaurant $formRestaurant)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateformRestaurantRequest $request, formRestaurant $formRestaurant)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(formRestaurant $formRestaurant)
    {
        //
    }
}
