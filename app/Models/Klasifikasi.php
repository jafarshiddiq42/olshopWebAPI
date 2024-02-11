<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Klasifikasi extends Model
{
    use HasFactory;
    public function suratmasuk() {
        return $this->hasMany(Suratmasuk::class);
    }
    public function suratkeluar() {
        return $this->hasMany(Suratkeluar::class);
    }
}
