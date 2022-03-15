<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;


class Team extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'players',
        'coach',
        'postes',
    ];
}
