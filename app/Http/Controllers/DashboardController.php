<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendaftaran;
use App\Models\Kontak;

class DashboardController extends Controller
{
    public function index() {
        $totalPendaftaran = Pendaftaran::count();
        $totalKontak = Kontak::count();
        return view('dashboard', [
            'totalPendaftaran' => $totalPendaftaran,
            'totalKontak' => $totalKontak
        ]);
    }
}
