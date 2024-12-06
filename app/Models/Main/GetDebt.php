<?php

namespace App\Models\Main;

use Illuminate\Database\Eloquent\Model;

class GetDebt extends Model
{
    protected $connection = 'mysql'; 
    protected $table = 'get_debts';

    protected $guarded = [];
}
