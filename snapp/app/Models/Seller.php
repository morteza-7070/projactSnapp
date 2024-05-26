<?php

namespace App\Models;

use App\Models\Api\buyyer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;
    protected $fillable=['name','email','phoneNumber','restaurant_name','address_seller'];
    public function buyer(){
        return $this->belongsTo(buyyer::class);
    }
}
