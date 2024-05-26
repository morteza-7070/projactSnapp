<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class connection extends Model
{
    use HasFactory;
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Foo(){
        return $this->morphedByMany(CategoryFood::class,'connectioanbels');

    }
    public function restaurants(){
        return $this->morphedByMany(RataurantCategory::class,'connectioanbels');

    }
    public function Dis(){
        return $this->morphedByMany(Discount::class,'connectioanbels');

    }
    public function Food(){
        return $this->morphedByMany(FoodCategoryIranian::class,'connectioanbels');

    }
    public function fast(){
        return $this->morphedByMany(FoodCategoryFastfode::class,'connectioanbels');
    }
    public function sandwich(){
        return $this->morphedByMany(FoodCategorySandwich::class,'connectioanbels');
    }
    public function Cart(){
        return $this->morphedByMany(Cart::class,'connectioanbels');
    }
    protected $fillable=['discount_id','name','url','user_id'];
}
