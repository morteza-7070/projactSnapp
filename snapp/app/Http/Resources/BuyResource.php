<?php
//
namespace App\Http\Resources;
//
//use Illuminate\Http\Request;
//use Illuminate\Http\Resources\Json\JsonResource;
//
//class BuyResource extends JsonResource
//{
//    /**
//     * Transform the resource into an array.
//     *
//     * @return array<string, mixed>
//     */
//    public function toArray(Request $request): array
//    {
//      parent::toArray($request);
//      return [
////          'id'=>$this->id,
//          'name'=>$this->name,
//          'email'=>$this->email,
//          'phoneNumber'=>$this->phoneNumber,
//          'password'=>$this->password
//      ];
//        protected static function List($data)
//    {
//        return response(
//            [
//                'code' => Response::HTTP_OK,
//                'meta' => [
//                    'current_page' => $data->resource->currentPage(),
//                    'per_page' => $data->resource->perPage(),
//                    'total' => $data->resource->total(),
//                    'path' => $data->resource->path(),
//                    'next_page' => $data->resource->nextPageUrl(),
//                    'last_page' => $data->resource->lastPage(),
//                ],
//                'data' => $data->resource->items()
//            ],
//            Response::HTTP_OK
//        );
//
//    }
//};
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\Resources\Json\JsonResource;

class BuyResource extends JsonResource
{
    public function toArray($request)
    {
        return [
            'name' => $this->name,
            'email' => $this->email,
            'phoneNumber' => $this->phoneNumber,
            'password' => $this->password
        ];
    }

    public static function list($data)
    {
        return response([
            'code' => Response::HTTP_OK,
            'meta' => [
                'current_page' => $data->resource->currentPage(),
                'per_page' => $data->resource->perPage(),
                'total' => $data->resource->total(),
                'path' => $data->resource->path(),
                'next_page' => $data->resource->nextPageUrl(),
                'last_page' => $data->resource->lastPage(),
            ],
            'data' => $data->resource->items()
        ], Response::HTTP_OK);
    }
}
