<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class formRestaurant extends Model
{
    use HasFactory;
    protected $fillable=['name','type','phoneNumber','address','accountNumber'];
}
