<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Holidays extends Model
{
    protected $fillable = ['description', 'beginning', 'end', 'user_id'];

    public $timestamps = false;
}
