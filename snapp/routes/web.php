<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\FoodCategorySandwichController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RataurantCategoryController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Api\BuyyerController;

use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\FormRestaurantController;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\FastFoodController;
use App\Http\Controllers\FoodCategoryIranianController;
use App\Http\Controllers\FriedController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::middleware('auth')->prefix('admin')->group(function () {
    Route::get('/index',[RataurantCategoryController::class,'index'])->name('Admin.index');
    Route::get('/create',[RataurantCategoryController::class,'create'])->name('Admin.create');
    Route::post('/create',[RataurantCategoryController::class,'store'])->name('Admin.create');
    Route::get('edit/{id}',[RataurantCategoryController::class,'edit'])->name('Admin.edit');
    Route::put('update/{id}/update',[RataurantCategoryController::class,'update'])->name('Admin.update');
    Route::delete('destroy/{id}/destroy',[RataurantCategoryController::class,'destroy'])->name('Admin.destroy');

});
Route::middleware('auth')->prefix('admin/food')->group(function () {
    Route::get('/',[CategoryFoodController::class,'index'])->name('Admin.food.index');
    Route::get('/create',[CategoryFoodController::class,'create'])->name('Admin.food.create');
    Route::post('/create',[CategoryFoodController::class,'store'])->name('Admin.food.store');
    Route::get('edit/{id}',[CategoryFoodController::class,'edit'])->name('Admin.food.edit');
    Route::put('update/{id}',[CategoryFoodController::class,'update'])->name('Admin.food.update');
    Route::delete('destroy/{id}/destroy',[CategoryFoodController::class,'destroy'])->name('Admin.food.destroy');

});
Route::middleware('auth')->prefix('admin/discount')->group(function (){
    Route::get('/',[DiscountController::class,'index'])->name('Admin.discount.index');
    Route::get('/create',[DiscountController::class,'create'])->name('Admin.discount.create');
    Route::post('/create',[DiscountController::class,'store'])->name('Admin.discount.create');
    Route::post('edit/{id}/edit',[DiscountController::class,'edit'])->name('Admin.discount.edit');
    Route::patch('update/{id}/update',[DiscountController::class,'update'])->name('Admin.discount.update');
    Route::delete('destroy/{id}/destroy',[DiscountController::class,'destroy'])->name('Admin.discount.destroy');

});
Route::middleware('auth')->prefix('admin/banner')->group(function (){
    Route::get('/',[BannerController::class,'index'])->name('Admin.banner.index');
    Route::get('/create',[BannerController::class,'create'])->name('Admin.banner.create');
    Route::post('/create',[BannerController::class,'store'])->name('Admin.banner.store');
    Route::get('edit/{id}/edit',[BannerController::class,'edit'])->name('Admin.banner.edit');
    Route::put('update/{id}/update',[BannerController::class,'update'])->name('Admin.banner.update');
    Route::delete('destroy/{id}/destroy', [BannerController::class, 'destroy'])->name('Admin.banner.destroy');
});




Route::get('/categoryRestaurantIranian',function (){
    return view('CategoryRestaurant.index');})->name('categoryRestaurant.iranian');

Route::prefix('iranian')->group(function (){
    Route::get('/',[FoodCategoryIranianController::class,'index'])->name('Food.iranian.index');
    Route::get('create',[FoodCategoryIranianController::class,'create'])->name('Food.iranian.create');
    Route::post('create',[FoodCategoryIranianController::class,'store'])->name('Food.iranian.store');
//    Route::post('edit/{id}/edit',[FoodCategoryIranianController::class,'edit'])->name('Food.iranian.edit');
    Route::get('edit/{id}/edit',[FoodCategoryIranianController::class,'edit'])->name('Food.iranian.edit');
//    Route::post('edit/{id}/edit',[FoodCategoryIranianController::class,'edit'])->name('Food.iranian.edit');
    Route::put('update/{id}/update',[FoodCategoryIranianController::class,'update'])->name('Food.iranian.update');
    Route::delete('destroy/{id}/destroy',[FoodCategoryIranianController::class,'destroy'])->name('Food.iranian.destroy');
});
Route::prefix('FastFood')->group(function (){
    Route::get('/',[FastFoodController::class,'index'])->name('Food.fastFood.index');
    Route::get('create',[FastFoodController::class,'create'])->name('Food.fastFood.create');
    Route::post('create',[FastFoodController::class,'store'])->name('Food.fastFood.store');
    Route::get('edit/{id}/edit',[FastFoodController::class,'edit'])->name('Food.fastFood.edit');
    Route::put('update/{id}/update',[FastFoodController::class,'update'])->name('Food.fastFood.update');
    Route::delete('destroy/{id}/destroy',[FastFoodController::class,'destroy'])->name('Food.fastFood.destroy');
});
Route::middleware('auth')->prefix('sandwich')->group(function (){
    Route::get('/',[FoodCategorySandwichController::class,'index'])->name('Food.sandwich.index');
    Route::get('create',[FoodCategorySandwichController::class,'create'])->name('Food.sandwich.create');
    Route::post('create',[FoodCategorySandwichController::class,'store'])->name('Food.sandwich.store');
    Route::get('edit/{id}/edit',[FoodCategorySandwichController::class,'edit'])->name('Food.sandwich.edit');
    Route::put('update/{id}/update',[FoodCategorySandwichController::class,'update'])->name('Food.sandwich.update');
    Route::delete('destroy/{id}/destroy',[FoodCategorySandwichController::class,'destroy'])->name('Food.sandwich.destroy');

});
Route::middleware('auth')->prefix('Fried')->group(function (){
    Route::get('/',[FriedController::class,'index'])->name('Fried.index');
    Route::get('create',[FriedController::class,'create'])->name('Fried.create');
    Route::post('create',[FriedController::class,'store'])->name('Fried.store');
    Route::get('edit/{id}/edit',[FriedController::class,'edit'])->name('Fried.edit');
    Route::put('update/{id}/update',[FriedController::class,'update'])->name('Fried.update');
    Route::delete('destroy/{id}/destroy',[FriedController::class,'destroy'])->name('Fried.destroy');
});
Route::prefix('seller')->group(function (){
    Route::get('/',[SellerController::class,'index'])->name('Seller.seller.index');
    Route::get('create',[SellerController::class,'create'])->name('Seller.seller.create');
    Route::post('create',[SellerController::class,'store'])->name('Seller.seller.create');
    Route::post('edit/{id}/edit',[SellerController::class,'edit'])->name('Seller.seller.edit');
    Route::put('update/{id}/update',[SellerController::class,'update'])->name('Seller.seller.update');
    Route::delete('destroy/{id}/destroy',[SellerController::class,'destroy'])->name('Seller.seller.destroy');
});
Route::prefix('cart')->group(function (){
    Route::get('/',[CartController::class,'index'])->name('Cart.index');
    Route::get('create',[CartController::class,'create'])->name('Cart.create');
    Route::post('create',[CartController::class,'store'])->name('Cart.store');
    Route::post('edit/{id}/edit', [CartController::class,'edit'])->name('Cart.edit');
    Route::patch('update/{id}/update',[CartController::class,'update'])->name('Cart.update');
    Route::delete('destroy/{id}/destroy',[CartController::class,'destroy'])->name('Cart.destroy');
});
Route::prefix('order')->group(function (){
    Route::get('/',[OrderController::class,'index'])->name('Order.index');
    Route::get('create',[OrderController::class,'create'])->name('Order.create');
    Route::post('create',[OrderController::class,'store'])->name('Order.store');
    Route::post('edit/{id}/edit',[OrderController::class,'edit'])->name('Order.edit');
    Route::put('update/{id}/update',[OrderController::class,'update'])->name('Order.update');
    Route::delete('destroy/{id}/destroy',[OrderController::class,'destroy'])->name('Order.destroy');
});
Route::prefix('comments')->group(function (){
    Route::get('/',[CommentController::class,'index'])->name('Comment.index');
    Route::get('create',[CommentController::class,'create'])->name('Comment.create');
    Route::post('create',[CommentController::class,'store'])->name('Comment.store');
    Route::post('edit/{id}/edit',[CommentController::class,'edit'])->name('Comment.edit');
    Route::put('update/{id}/update',[CommentController::class,'update'])->name('Comment.update');
    Route::delete('destroy/{id}/destroy',[CommentController::class,'destroy'])->name('Comment.destroy');
});
Route::prefix('Report')->group(function(){
    Route::get('/',[ReportController::class,'index'])->name('Report.index');
    Route::get('create',[ReportController::class,'create'])->name('Report.create');
    Route::post('create',[ReportController::class,'store'])->name('Report.store');
    Route::post('edit/{id}/edit',[ReportController::class,'edit'])->name('Report.edit');
    Route::put('update/{id}/update',[ReportController::class,'update'])->name('Report.update');
    Route::delete('destroy/{id}/destroy',[ReportController::class,'destroy'])->name('Report.destroy');
});

Route::prefix('sellerFood')->group(function () {
    Route::get('/', [FormRestaurantController::class, 'index'])->name('seller.Index');
    Route::get('create', [FormRestaurantController::class, 'create'])->name('seller.create');
    Route::post('create', [FormRestaurantController::class, 'store'])->name('seller.store');
    Route::get('edit/{id}/edit', [FormRestaurantController::class, 'edit'])->name('seller.edit');
    Route::put('update/{id}/update', [FormRestaurantController::class, 'update'])->name('seller.update');
    Route::delete('destroy/{id}/destroy', [FormRestaurantController::class, 'destroy'])->name('seller.destroy');
});
require __DIR__.'/auth.php';
