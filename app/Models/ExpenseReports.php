<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ExpenseReports extends Model
{
    protected $fillable = ['description', 'value', 'user_id'];

    public $timestamps = true;
}
