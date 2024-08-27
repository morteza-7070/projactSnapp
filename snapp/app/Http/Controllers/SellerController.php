<?php

namespace App\Http\Controllers;

use App\Http\Resources\SellerCollection;
use App\Models\Discount;
use App\Models\Seller;
use App\Http\Requests\StoreSellerRequest;
use App\Http\Requests\UpdateSellerRequest;
use Illuminate\Http\Request;

class SellerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sellers=Seller::paginate(5);
       // return view('form restaurant.formRestuarant',compact('seller'));
        //return view('seller.index',compact('sellers'));
        return new SellerCollection($sellers);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('seller.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreSellerRequest $request)
    {
     $validated = $request->validated();
       $buy= Seller::create([
            'name'=>$validated['name'],
            'email'=>$validated['email'],
            'phoneNumber'=>$validated['phoneNumber'],
            'restaurant_name'=>$validated['restaurant_name'],
            'address_seller'=>$validated['address_seller'],
        ]);
        return response()->json($buy,201);
        //return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     */
    public function show(Seller $seller)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Seller $seller,string $id)
    {
        $sellers=$seller::FindOrFail($id);
        return view('seller.edit',compact('sellers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Seller $seller,string $id)
    {
        $sellers = Seller::findOrFail($id);

       $request->validate([
            'name' => 'required|string|max:255|min:2',
            "email" => 'required',
            'phoneNumber' => 'required',
            'restaurant_name' => 'required',
            'address_seller' => 'required',

        ]);

        $sellers->update([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'restaurant_name' => $request->restaurant_name,
            'address_seller' => $request->address_seller,
        ]);
        return redirect()->route('Seller.seller.index', compact('sellers'));
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Seller $seller,string $id)
    {
        $seller=Seller::FindOrFail($id);
        $seller->delete();
        return redirect()->route('Seller.seller.index');
    }
}
