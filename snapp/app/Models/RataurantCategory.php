<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RataurantCategory extends Model
{
    use HasFactory;
    protected $fillable=['name',"image_restaurant"];
    public function categories(){
        return $this->morphToMany(CategoryFood::class,'categorizable');
    }
}
