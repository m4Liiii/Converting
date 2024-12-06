<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $connection = 'mysql'; 
    protected $table = 'categories';

    protected $guarded = [];
}
