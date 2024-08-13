<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryFood extends Model
{
    use HasFactory;
    protected $fillable=['ImageFood','name','price','discount_id','description','mime'];
//    public function categories(){
//      return $this->morphToMany(CategoryFood::class,'categorizables');
//    }
    public function Food()
    {
        return $this->hasOne(CategoryFood::class, 'food_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
}
