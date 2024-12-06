<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $connection = 'mysql'; 
    protected $table = 'products';

    protected $guarded = [];
}
