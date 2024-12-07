<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    protected $connection = 'mysql'; 
    protected $table = 'sellers';

    protected $guarded = [];
}
