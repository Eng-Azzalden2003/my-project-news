<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class SportWriter extends Model
{
    //
    use HasFactory;
     protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
