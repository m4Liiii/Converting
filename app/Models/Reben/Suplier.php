<?php

namespace App\Models\Reben;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $connection = 'mysql2'; 
    protected $table = 'suplier';

    protected $guarded = [];
}
