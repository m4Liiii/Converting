<?php

namespace App\Models\Reben;

use Illuminate\Database\Eloquent\Model;

class Rproduct extends Model
{
    protected $connection = 'mysql2'; 
    protected $table = 'product';

    protected $guarded = [];
}
