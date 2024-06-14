<?php

namespace App\Http\Controllers;

use App\Models\Api\buyyer;
use App\Models\CategoryFood;
use App\Models\Discount;
use App\Models\Order;
use App\Http\Requests\StoreOrderRequest;
use App\Http\Requests\UpdateOrderRequest;
use App\Models\Seller;
use App\Models\User;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Orders=Order::all();

        return view('Order.index',compact('Orders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users=User::all();
        $foods=CategoryFood::all();
        $status=Order::all();
        $sellers=Seller::all();
        $buyers=buyyer::all();
        $discounts=Discount::all();
        return view('Order.create',compact('users','foods','status','sellers','buyers','discounts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'seller_id' => 'required|exists:sellers,id',
            'quantity' => 'required|integer|min:1',
            'phone_id' => 'required|exists:users,id',

            'status' => 'required|in:pending,accepted,rejected',
        ]);
        Order::create([
            'user_id' => $request->user_id,
            'product_id' => $request->product_id,
            'seller_id' => $request->seller_id,

            'quantity' => $request->quantity,
            'phone_id' => $request->phone_id,
            'discount_id' => $request->discount_id,
            'status' => $request->status,

        ]);
        return redirect()->route('Order.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Order $order,string $id)
    {   $users=User::all();
        $foods=CategoryFood::all();
        $status=Order::all();
        $sellers=Seller::all();
        $buyers=buyyer::all();
        $discounts=Discount::all();
        $orders=Order::FindOrFail($id);
        return view('Order.edit',compact('orders','users','foods','status','sellers','buyers','discounts'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Order $order,string $id)
    {
        $order=Order::FindOrFail($id);
        $request->validate([]);



        $order->update([
            'user_id'=>$request->user_id,
            'seller_id'=>$request->seller_id,
            'phone_id'=>$request->phone_id,
            'product_id'=>$request->product_id,
            'discount_id'=>$request->discount_id,
            'quantity'=>$request->quantity,
            'status'=>$request->status

        ]);



        return redirect()->route('Order.index',compact('order','id'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Order $order,string $id)
    {
        $Order=Order::FindOrFail($id);
        $Order->delete();
        return redirect()->route('Order.index');
    }
}
