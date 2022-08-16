<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelaksanaan extends Model
{
    use HasFactory;

    public function Event()
    {
        return $this->hasMany(Event::class);
    }
}
