<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];

    public function author()
    {
        return $this->belongsTo(Author::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function loans() {
        return $this->hasMany(Loan::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }

}
