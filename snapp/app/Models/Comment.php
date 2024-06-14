<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $fillable=['content','order_id','food_id','approved'];
    public function order(){
        return $this->belongsTo(Order::class,'order_id');

    }
    public function food(){
        return $this->belongsTo(CategoryFood::class,'food_id');
    }

}
