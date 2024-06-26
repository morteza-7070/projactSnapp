<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class webFoodCategoryFastfode extends Model
{
    use HasFactory;

    protected $fillable = ['name','image_food','price','description'];
//    public function discount(){
//        return $this->belongsTo(Discount::class,'discount_id');
//    }
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }

}
