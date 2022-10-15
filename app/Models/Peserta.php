<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Parental\HasParent;

class Peserta extends User
{
    use HasFactory, HasParent;

    public function pendaftarans()
    {
        return $this->hasMany(Pendaftaran::class);
    }
}
