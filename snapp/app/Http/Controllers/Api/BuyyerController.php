<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorebuyyerRequest;
use App\Http\Requests\UpdatebuyyerRequest;
use App\Http\Resources\BuyResource;
use App\Models\Api\buyyer;
use Illuminate\Http\Request;
use function Laravel\Prompts\password;


class BuyyerController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    public function index()
    {
        $api = buyyer::all();
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
            'password' => bcrypt($request->password),
            'address'=>$request->address,
        ]);
        //return $request->all();
        return response()->json($buy,201);
        //return BuyResource::collection($buy);

    }



    /**
     * Display the specified resource.
     */
    public function show(buyyer $buyyer,$id)
    {
        return buyyer::findOrFail($id);
//     $api= buyyer::FindOrFail($id);
//        return response()->json($api,200);
    }

    /**
     * Show the form for editing the specified resource.
     */
//    public function edit(buyyer $buyyer)
//    {
//        $api=buyyer::findOrFail($buyyer->id);
//
//        return new BuyResource($api);
//    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, buyyer $buyyer,$id)
    {
        $api=buyyer::FindOrFail($id);
        $api->update($request->all());
        return response()->json(['message' => 'Resource updated successfully', 'data' => $api], 200);
//
//



    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(buyyer $buyyer,$id)
    {
//        buyyer::destroy();
        $buyyer::destroy($id);
        return response()->json(null, 204);
    }
}
