<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Food(){
        return $this->belongsTo(CategoryFood::class,'food_id');
    }
    public function category(){

        return $this->morphToMany(Connection::class,'connectioanbels');
    }
    public function cart()
    {
        return $this->hasOne(Cart::class, 'cart_id');
    }
    protected $fillable=['user_id','food_id','quantity'];
}
