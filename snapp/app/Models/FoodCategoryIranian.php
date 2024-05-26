<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FoodCategoryIranian extends Model
{
    use HasFactory;
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
 protected $fillable = ['name','image_food','price','description'];
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
}
