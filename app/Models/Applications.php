<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Applications extends Model
{
    protected $fillable = ['cv_id', 'offer_id'];

    public $timestamps = true;
}
