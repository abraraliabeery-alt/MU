<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactMessage extends Model
{
    protected $fillable = [
        'name',
        'phone',
        'email',
        'service',
        'notes',
        'locale',
        'ip_address',
        'user_agent',
    ];
}
