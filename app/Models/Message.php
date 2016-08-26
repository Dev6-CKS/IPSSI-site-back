<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $fillable = ['titre', 'content', 'sender_id'];

    public $timestamps = true;
}
