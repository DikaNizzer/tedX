<?php

namespace App\Models;

use App\Models\Event;
use App\Models\Paket;
use App\Models\Peserta;
use App\Models\Pembayaran;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use \Znck\Eloquent\Traits\BelongsToThrough;

class Pendaftaran extends Model
{
    use HasFactory, BelongsToThrough;

    protected $guarded = ['id'];

    //default value
    protected $attributes = [
        'status' => 0
    ];

    public function peserta()
    {
        return $this->belongsTo(Peserta::class);
    }

    public function user()
    {
        return $this->belongsToThrough(User::class, Peserta::class);
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
