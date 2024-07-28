<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FastFood extends Model
{
    use HasFactory;
    protected $fillable = ['name','image','price','description','discount_id','mime'];
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
