<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lewat extends Model
{
    public function users()
    {
        return $this->belongTo(user::class);
    }
}
