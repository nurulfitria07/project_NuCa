<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pasien;

class PasienController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nik' => 'required|string|max:16',
            'name' => 'required|string|max:255',
            'gender' => 'required|in:laki-laki,perempuan',
            'dob' => 'required|date',
            'phone' => 'required|string|max:15',
            'address' => 'required|string',
            'message' => 'required|string'
        ]);

        // Save data to the database
        Pasien::create($validated);

        // Redirect to janji.create
        return redirect()->route('janji.create');
    }


    public function createJanji()
    {
        // Tampilkan halaman untuk janji
        return view('janji.create');
    }
}
