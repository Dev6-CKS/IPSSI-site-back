<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    protected $fillable = ['path', 'title', 'ext'];

    public $timestamps = true;
}
