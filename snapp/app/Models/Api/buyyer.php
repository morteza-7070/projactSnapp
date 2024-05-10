<?php

namespace App\Models\Api;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class buyyer extends Model
{
    use HasFactory;
    protected $fillable=['name',"email",'phoneNumber','password'];
}
