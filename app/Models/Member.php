<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $guarded = [];

    public function loans() {
        return $this->hasMany(Loan::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
