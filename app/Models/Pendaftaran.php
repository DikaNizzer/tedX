<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class);
    }

    public function paket()
    {
        return $this->belongsTo(Paket::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
