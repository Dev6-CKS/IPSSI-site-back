<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProfiles extends Model
{
    protected $fillable = ['user_id', 'profile_id'];

    public $timestamps = false;
}
