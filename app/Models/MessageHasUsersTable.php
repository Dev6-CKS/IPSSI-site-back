<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MessageHasUsersTable extends Model
{
    protected $fillable = ['message_id', 'user_id'];

    public $timestamps = false;
}
