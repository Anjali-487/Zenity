<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;
    protected $connection= 'mongodb';
    protected $collection= 'coupons';
}
