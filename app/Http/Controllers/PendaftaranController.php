<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function index()
    {
        $pendaftaran = Pendaftaran::all();
        return view('Pendaftaran', ['pendaftaran' => $pendaftaran]);
    }
    public function store(Request $request)
    {
        $data = $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string',
            'pekerjaan' => 'required|string',
            'telepon' => 'required|string',
        ]);

        Pendaftaran::create($data);

        return redirect()->back()->with('success', 'Pesan Anda berhasil dikirim.');
    }
}
