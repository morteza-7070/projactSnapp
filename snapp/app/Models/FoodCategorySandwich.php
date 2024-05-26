<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategorySandwich extends Model
{
    use HasFactory;
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
    protected $fillable = ['name','image_food','price','description'];
}
