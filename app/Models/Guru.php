<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Guru extends Authenticatable
{
    use Notifiable;
    protected $fillable = [
        'name', 'password','username'
    ];
    protected $hidden =[
        'password'
    ];
}
