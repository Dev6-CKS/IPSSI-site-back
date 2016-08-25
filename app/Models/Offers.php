<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offers extends Model
{
    protected $fillable = ['description', 'profile_id'];

    public $timestamps = true;
}
