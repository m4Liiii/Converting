<?php

namespace App\Models\Reben;

use Illuminate\Database\Eloquent\Model;

class Cust extends Model
{
    protected $connection = 'mysql2'; 
    protected $table = 'customer';

    protected $guarded = [];
}
