<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Antrian extends Model
{
    use HasFactory;

    protected $fillable = ['no_antrian', 'id_dokter', 'ruang_praktek'];

    public function dokter()
    {
        return $this->belongsTo(Dokter::class);
    }
}

