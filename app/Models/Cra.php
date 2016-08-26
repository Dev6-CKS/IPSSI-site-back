<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cra extends Model
{
    protected $fillable = ['content', 'user_id'];

    public $timestamps = true;
}
