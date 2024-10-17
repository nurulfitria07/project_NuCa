<?php

namespace App\Http\Controllers;

use App\Models\Antrian;
use App\Models\Dokter;
use Illuminate\Http\Request;

class AntrianController extends Controller
{

    public function index()
    {
        $antrian = Antrian::all();
        return view('antrian.finish', compact('antrian'));
    }
    public function dataDiri()
    {
        return view('pasien_create');
    }

    public function payment(Request $request)
    {
        return view('antrian.payment');
    }

    public function processPayment(Request $request)
    {
        return redirect()->route('antrian.finish');
    }

    public function finish()
{
    // Ambil data dari sesi
    $janjiDate = session('janji_date');
    $janjiTime = session('janji_time');
    $dokterId = session('id_dokter');
    $ruang = session('ruang_praktek');

    // Cek apakah data ada di sesi
    if (is_null($janjiDate) || is_null($janjiTime) || is_null($dokterId) || is_null($ruang)) {
        return redirect()->route('antrian.index')->with('error', 'Data pendaftaran tidak ditemukan.');
    }

    // Ambil data antrian terakhir dan generate nomor antrian
    $lastAntrian = Antrian::latest()->first();
    $antrianId = $lastAntrian ? $lastAntrian->no_antrian + 1 : 1; // Jika tidak ada antrian, mulai dari 1

    // Ambil data dokter untuk ditampilkan di view
    $dokter = Dokter::find($dokterId); // Mengambil data dokter berdasarkan ID

    return view('antrian.finish', [
        'janji_date' => $janjiDate,
        'janji_time' => $janjiTime,
        'dokter' => $dokter->name ?? 'Tidak tersedia', // Menampilkan nama dokter atau 'Tidak tersedia'
        'ruang_praktek' => $ruang,
        'antrian' => $antrianId,
    ]);
}


    public function store(Request $request)
    {
        // Validasi input dari pengguna
        $request->validate([
            'doctor' => 'required',
            'ruang_praktek' => 'required',
            'janji_date' => 'required|date',
            'janji_time' => 'required',
        ]);

        // Ambil data antrian terakhir dan buat nomor antrian baru
        $lastAntrian = Antrian::latest()->first();
        $newNoAntrian = $lastAntrian ? $lastAntrian->no_antrian + 1 : 1; // Nomor antrian bertambah 1

        // Simpan data antrian ke database
        $antrian = new Antrian();
        $antrian->tanggal_waktu = now(); // Bisa juga dari inputan jika ada
        $antrian->no_antrian = $newNoAntrian; // Nomor antrian dinamis
        $antrian->dokter = $request->doctor;
        $antrian->ruang_praktek = $request->ruang_praktek;
        $antrian->save();

        // Simpan data ke sesi untuk digunakan di halaman finish
        session([
            'janji_date' => $request->janji_date,
            'janji_time' => $request->janji_time,
            'id_dokter' => $request->doctor,
            'ruang_praktek' => $request->ruang_praktek,
        ]);

        // Redirect ke halaman konfirmasi dengan data yang disimpan
        return redirect()->route('antrian.finish'); // Pastikan route ini sesuai
    }

    public function show($id)
    {
        // Ambil data berdasarkan id
        $antrian = Antrian::find($id);

        // Render view halaman konfirmasi
        return view('finish', compact('antrian'));
    }
}
