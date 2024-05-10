<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorebuyyerRequest;
use App\Http\Requests\UpdatebuyyerRequest;
use App\Http\Resources\BuyResource;
use App\Models\Api\buyyer;
use Illuminate\Http\Request;


class BuyyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
       // $token = $request->user()->createToken();
        $api = Buyyer::all();
        return response()->json($api);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //return view('Api.formBuyer');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $buy=buyyer::create([
            'name' => $request->name,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'password' => $request->password,
        ]);
        //return $request->all();
       // return response()->json($buy,201);
        return BuyResource::collection($buy);

    }



    /**
     * Display the specified resource.
     */
    public function show(buyyer $buyyer,$id,$API)
    {
     return new BuyResource($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(buyyer $buyyer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatebuyyerRequest $request, buyyer $buyyer,$id)
    {
        $api = buyyer::findOrFail($id);
        $api->name=$request->name;
        $api->email=$request->email;
        $api->phoneNumber=$request->phoneNumber;
        $api->password=$request->password;
        $api->save();
        $api->update($request->all());
        return response()->json($api, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buyyer $buyyer,$id)
    {
        buyyer::destroy( $buyyer);
        return response()->json(null, 204);
    }
}
