<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class SellerCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */

//    public function toArray(Request $request): array
//    {
//        return [
//            'data' => $this->collection,
//         'meta'=>[
//             'name'=>$this->name,
//             'email'=>$this->email
//    ]
//
//        ];
//    }
    public function toArray($request): array
    {
        return [
            'data' => $this->collection->map(function ($seller) {
                return [
                    'id' => $seller->id,
                    'name' => $seller->name,
                    'email' => $seller->email,
                   'phoneNumber' => $seller->phoneNumber,
                    'restaurant_name'=>$seller->restaurant_name,
                    'address_seller'=>$seller->address_seller
                ];
            }),
            'meta' => [
                'total' => $this->count(),
                'current_page' => $this->currentPage(),
                'last_page' => $this->lastPage(),
            ],
        ];
    }
}
