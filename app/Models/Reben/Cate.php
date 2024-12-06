<?php

namespace App\Models\Reben;

use Illuminate\Database\Eloquent\Model;

class Cate extends Model
{
    protected $connection = 'mysql2'; 
    protected $table = 'category';

    protected $guarded = [];
}
