<?php

namespace App\Http\Controllers;

use App\Models\pemasukan;
use App\Models\pengeluaran;
use Illuminate\Http\Request;

class LayoutController extends Controller
{
    public function index(Request $request)
    {
        $totalPemasukan = Pemasukan::sum('nominal');
        $totalPengeluaran = pengeluaran::sum('nominal');
        $totalKeseluruhan = $totalPemasukan - $totalPengeluaran;
        $pemasukan = Pemasukan::all(); // Sesuaikan dengan model dan query yang benar
        $pengeluaran = Pengeluaran::all(); // Sesuaikan dengan model dan query yang benar
        // $data = pemasukan::all();
        return view('/home', compact('pemasukan', 'pengeluaran', 'totalPemasukan', 'totalPengeluaran', 'totalKeseluruhan'), ['halaman' => 'pemasukan']);
    }
}
