<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $fillable = [
        'hostname',
        'device_id',
        'status',
        'user_id',
        'login_at',
        'logout_at'
    ];
}
