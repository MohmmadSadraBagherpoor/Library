<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Member extends Authenticatable
{
    protected $fillable = ['name', 'email', 'password'];

    protected $hidden = ['password', 'remember_token'];

    public function loans()
    {
        return $this->hasMany(Loan::class);
    }

    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
