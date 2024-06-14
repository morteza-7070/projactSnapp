<?php

namespace App\Models\Api;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Seller;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyyer extends Model
{
    use HasFactory;
    protected $fillable=['name',"email",'phoneNumber','password','address'];
    protected $hidden = [

        'remember_token',
    ];
    public function seller(){
        return $this->hasMany(Seller::class);
    }
    public function buyyer()
    {
        return $this->hasOne(Order::class, 'buyer_id');
    }
}
