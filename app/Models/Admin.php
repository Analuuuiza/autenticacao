<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\FlareClient\Concerns\HasContext;

class Admin extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    USE Notifiable;

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
