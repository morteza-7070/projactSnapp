<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCartRequest;
use App\Http\Requests\UpdateCartRequest;
use App\Models\Cart;
use App\Models\CategoryFood;
use App\Models\User;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
//        $carts=Cart::FindOrFail(2);
        $carts= Cart::all();

        return view('cart.index',compact('carts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        $foods=CategoryFood::all();

        return view('cart.create',compact('users','foods'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate([
            'user_id' => 'integer',
            'food_id' => 'integer',
            'quantity' => 'integer',


        ]);
        $foodId = $request->food_id ?? 1;

        Cart::create([
            'user_id'=>$request->user_id,
            'food_id'=>$foodId,
            'quantity'=>$request->quantity

        ]);
        return redirect()->route('Cart.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cart $cart,string $id)
    {
        $carts=Cart::FindOrFail($id);
        return view('cart.edit',compact('carts'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cart $cart,string $id)
    {
        $carts=Cart::FindOrFail($id);
        $request->validate([
            'user_id' => 'string',
            'food_id' => 'string',
            'quantity' => 'integer',


        ]);
        $carts->update([
            'user_id'=>$request->user_id,
            'food_id'=>$request->food_id,
            'quantity'=>$request->quantity
        ]);
        return redirect()->route('Cart.index' ,compact('carts'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cart $cart,string $id)
    {
        $carts=Cart::FindOrFail($id);
        $carts->delete();
        return redirect()->route('Cart.index');
    }
}
