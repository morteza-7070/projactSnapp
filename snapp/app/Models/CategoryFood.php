<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model
{
    use HasFactory;
    protected $fillable=['image_food','name'];
//    public function categories(){
//      return $this->morphToMany(CategoryFood::class,'categorizables');
//    }
    public function Foods()
    {
        return $this->hasOne(CategoryFood::class, 'food_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
}
