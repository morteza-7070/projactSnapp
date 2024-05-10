<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RataurantCategoryController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\Api\BuyyerController;

use App\Http\Controllers\CategoryFoodController;
use App\Http\Controllers\DiscountController;
use App\Http\Controllers\FormRestaurantController;
use App\Http\Controllers\BannerController;
use Illuminate\Support\Facades\Route;

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
Route::prefix('admin')->group(function () {
    Route::get('/index',[RataurantCategoryController::class,'index'])->name('Admin.index');

    Route::get('/create',[RataurantCategoryController::class,'create'])->name('Admin.create');

    Route::post('/create',[RataurantCategoryController::class,'store'])->name('Admin.create');
    Route::post('edit/{id}',[RataurantCategoryController::class,'edit'])->name('Admin.edit');
    Route::put('update/{id}',[RataurantCategoryController::class,'update'])->name('Admin.update');
    Route::delete('destroy/{id}/destroy',[RataurantCategoryController::class,'destroy'])->name('Admin.destroy');

});
Route::prefix('admin/food')->group(function () {
    Route::get('/',[CategoryFoodController::class,'index'])->name('Admin.food.index');
    Route::get('/create',[CategoryFoodController::class,'create'])->name('Admin.food.create');
    Route::post('/create',[CategoryFoodController::class,'store'])->name('Admin.food.create');
    Route::post('edit/{id}',[CategoryFoodController::class,'edit'])->name('Admin.food.edit');
    Route::put('update/{id}',[CategoryFoodController::class,'update'])->name('Admin.food.update');
    Route::delete('destroy/{id}/destroy',[CategoryFoodController::class,'destroy'])->name('Admin.food.destroy');

});
Route::prefix('admin/discount')->group(function (){
    Route::get('/',[DiscountController::class,'index'])->name('Admin.discount.index');
    Route::get('/create',[DiscountController::class,'create'])->name('Admin.discount.create');
    Route::post('/create',[DiscountController::class,'store'])->name('Admin.discount.create');
    Route::post('edit/{id}/edit',[DiscountController::class,'edit'])->name('Admin.discount.edit');
    Route::patch('update/{id}/update',[DiscountController::class,'update'])->name('Admin.discount.update');
    Route::delete('destroy/{id}/destroy',[DiscountController::class,'destroy'])->name('Admin.discount.destroy');

});
Route::prefix('admin/banners')->group(function (){
    Route::get('/',[BannerController::class,'index'])->name('Admin.banner.index');
    Route::get('create',[BannerController::class,'create'])->name('Admin.banner.create');
    Route::post('create',[BannerController::class,'store'])->name('Admin.banner.create');
    Route::post('edit/{id}/edit',[BannerController::class,'edit'])->name('Admin.banner.edit');
    Route::put('update/{id}',[BannerController::class,'update'])->name('Admin.banner.update');
    Route::delete('destroy/{id}/destroy',[BannerController::class,'destroy'])->name('Admin.banner.destroy');

});
Route::prefix('seller')->group(function (){
    Route::get('/',[FormRestaurantController::class,'index'])->name('seller.form.index');
    Route::get('create',[FormRestaurantController::class,'create'])->name('Admin.banner.create');
    Route::post('create',[FormRestaurantController::class,'store'])->name('seller.form.create');
    Route::post('edit/{id}/edit',[FormRestaurantController::class,'edit'])->name('Admin.banner.edit');
    Route::put('update/{id}',[FormRestaurantController::class,'update'])->name('Admin.banner.update');
    Route::delete('destroy/{id}/destroy',[FormRestaurantController::class,'destroy'])->name('Admin.banner.destroy');

});
//Route::prefix('buyer')->group(function (){
//    Route::get('/',[BuyyerController::class,'index'])->name('buyer.form.index');
//    Route::get('create',[BuyyerController::class,'create'])->name('buyer.form.create');
//});
Route::get('/morph',[\App\Http\Controllers\Controller::class,'index']);
//Route::get('/buyer1',function (){
//    return view('formBuyer.formBuyer');
//});

require __DIR__.'/auth.php';
