<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use MongoDB\Laravel\Eloquent\Model;

class Category extends Model  
{
    use HasFactory;
    protected $connection= 'mongodb';
    protected $collection= 'categories';
}
