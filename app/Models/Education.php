<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Education extends Model
{
    protected $fillable = ['title', 'start_date', 'end_date', 'content', 'cv_id'];
}
