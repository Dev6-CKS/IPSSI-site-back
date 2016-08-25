<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coordinates extends Model
{
    protected $fillable = ['address', 'country', 'phone', 'postal_code'];

    public $timestamps = false;

    public function user() {
        return $this->hasMany(\App\User::class);
    }
}
