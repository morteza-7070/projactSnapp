<?php

namespace App\Http\Controllers;

use App\Models\RataurantCategory;
use App\Models\CategoryFood;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;
    public function index(){
        $foods=RataurantCategory::find(1);
       dd( $foods->categories);
        //dd($foods);
    }
}
