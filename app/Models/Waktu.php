<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Waktu extends Model
{
    use HasFactory;
    // Tentukan nama tabel secara eksplisit
    protected $table = 'Waktu'; // Sesuaikan dengan nama tabel di database kamu
    protected $fillable = ['janji_date', 'janji_time','dokter','ruang_praktek'];
}
