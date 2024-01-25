<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Suratmasuk extends Model
{
    use HasFactory;

    public function klasifikasi() {
        return $this->belongsTo(Klasifikasi::class);
    }
}
