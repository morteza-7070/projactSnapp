<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class fried extends Model
{
    use HasFactory;
    protected $table = 'frieds';
    protected $fillable = ['name','price','description','image','mimes','discount_id'];
    public function discount(){
        return $this->belongsTo(Discount::class,'discount_id');
    }
}
