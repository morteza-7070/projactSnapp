<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Discount;
use App\Models\Order;
use App\Models\RataurantCategory;
use App\Models\CategoryFood;
use App\Models\FoodCategoryFastfode;
use App\Models\FoodCategoryIranian;
use App\Models\Seller;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    public function index() {
        $foods = Cart::findOrFail(1);

        return view('CategoryFoods', compact('foods'));
    }
    public function create(){
        return view('CategoryFoodsCreate');
    }


//    public function categoryFoods(CategoryFood $categoryFood, $id) {
//        $foods = CategoryFood::findOrFail($id);
//
//        return view('CategoryFoods', compact('foods', 'categoryFood'));
//    }
    public function categoryRestaurant(){
        $restaurant = FoodCategoryIranian::findOrFail(1);
//        $discounts = Discount::all();

        return view('CategoryRestaurant', compact('restaurant'));
    }
    public function categoryDiscount(){
        $discount1 = FoodCategoryFastfode::findOrFail(1);

        return view('CategoryDiscount', compact('discount1'));
    }

}
