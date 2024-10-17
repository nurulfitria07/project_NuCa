<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Waktu;  // Model Waktu untuk janji
use App\Models\Dokter; // Model Dokter jika ada

class JanjiController extends Controller
{
    public function create()
    {
        // Ambil data dokter dari database (misalnya)
        $doctors = Dokter::all();

        // Kembalikan view form untuk membuat janji temu, kirim data dokter ke view
        return view('reservasi', ['doctors' => $doctors]);
    }

    public function store(Request $request)
    {
        // Validasi input
        $validated = $request->validate([
            'janji_date' => 'required|date',
            'janji_time' => 'required|date_format:H:i',
            'id_dokter' => 'required|exists:dokters,id'  // Pastikan dokter ID valid di tabel dokters
        ]);

        // Ambil data dokter dari tabel berdasarkan ID yang dipilih
        $dokter = Dokter::findOrFail($request->id_dokter);

        // Simpan janji ke database
        Waktu::create([
            'janji_date' => $request->janji_date,
            'janji_time' => $request->janji_time,
            'id_dokter' => $dokter->id,  // Simpan ID dokter, bisa juga simpan nama dokter jika diperlukan
            'ruang_praktek' => $dokter->room  // Pastikan dokter memiliki field room atau sesuai database
        ]);

        // Simpan data janji dan dokter ke session
        session([
            'janji_date' => $request->janji_date,
            'janji_time' => $request->janji_time,
            'id_dokter' => $dokter->name,  // Atau gunakan ID jika lebih relevan
            'ruang_praktek' => $dokter->room
        ]);

        // Redirect ke halaman payment dengan data janji dan dokter
        return redirect()->route('antrian.payment');
    }

    public function finish()
    {
        // Ambil data dari session
        $janji_date = session('janji_date');
        $janji_time = session('janji_time');
        $dokter = session('id_dokter');
        $ruang_praktek = session('ruang_praktek');

        // Pastikan data session ada, jika tidak ada, redirect dengan pesan error
        if (!$janji_date || !$janji_time || !$dokter || !$ruang_praktek) {
            return redirect()->route('antrian.finish')->with('error', 'Data janji tidak ditemukan.');
        }

        // Tampilkan view untuk halaman selesai antrian
        return view('antrian.finish', compact('janji_date', 'janji_time', 'dokter', 'ruang_praktek'));
    }
}
