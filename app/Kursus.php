<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kursus extends Model
{
    protected $table = 'kursus';

    protected $fillable = [
        'user_id',
        'nama',
        'lokasi',
        'tarikh_mula',
        'tarikh_tamat',
        'jumlah_hari',
        'nota'
    ];
}
