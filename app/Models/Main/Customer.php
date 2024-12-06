<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $connection = 'mysql'; 
    protected $table = 'customers';

    protected $guarded = [];
}
