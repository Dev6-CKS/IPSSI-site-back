<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cras extends Model
{
    protected $fillable = ['content', 'user_id'];

    public $timestamps = true;
}
