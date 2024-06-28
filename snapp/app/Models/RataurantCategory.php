<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RataurantCategory extends Model
{
    use HasFactory;
    protected $fillable=['name',"image_restaurant",'mime'];
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
}
