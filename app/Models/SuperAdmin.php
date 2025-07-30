<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Notifications\Notifiable;                // مهم
use App\Notifications\ResetPasswordNotification; // مهم
class SuperAdmin extends Authenticatable
{
    use HasFactory , Notifiable;
     protected $fillable = [
        'name',
        'email',
        'password',
    ];
        public function sendPasswordResetNotification($token): void
    {
        $this->notify(new ResetPasswordNotification($token, 'super-admin'));
    }
}
