<?php

namespace App\Models;

use App\Models\Api\buyyer;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [ 'user_id',
        'product_id',
        'seller_id',
        'buyer_id',
        'quantity',
        'phone_id',
        'discount_id',
        'status',];
    public function users(){
        return $this->belongsTo(User::class,'user_id');
    }
    public function Food(){
        return $this->belongsTo(CategoryFood::class,'product_id');
    }
    public function seller(){
        return $this->belongsTo(Seller::class,'seller_id');
    }
    public function cart(){
        return $this->belongsTo(cart::class,'cart_id');
    }
    public function buyyer(){
        return $this->belongsTo(buyyer::class,'buyer_id');
    }
    public function order()
    {
        return $this->hasMany(Comment::class, 'order_id');
    }
    public function discount(){
        return $this->belongsTo(Discount::class, 'discount_id');
    }
}
