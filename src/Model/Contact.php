<?php

namespace Soni\ContactEmail\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
     protected $fillable = [
        'name', 'email', 'message',
    ];
}