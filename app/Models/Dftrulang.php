<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dftrulang extends Model
{
    // use HasFactory;

    public function users()
    {
        return $this->belongTo(user::class);
    }
}
