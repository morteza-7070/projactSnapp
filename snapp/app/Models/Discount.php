<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Discount extends Model
{
    use HasFactory;
    protected $fillable=['name','percentage'];
    public function food()
    {
        return $this->hasOne(FoodCategoryFastfode::class, 'discount_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
}
