<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;

class DashboardController extends Controller
{
    public function index()
    {
        $pemasukan = Transaksi::select('nominal')->whereRelation('kategori','jenis_kategori', '=', 'Pemasukan')->get();
        $total_pemasukan = $pemasukan->sum('nominal');
        
        $pengeluaran = Transaksi::select('nominal')->whereRelation('kategori','jenis_kategori', '=', 'Pengeluaran')->get();
        $total_pengeluaran = $pengeluaran->sum('nominal');
        
        $saldo = $total_pemasukan - $total_pengeluaran;
        
        return view('dashboard', compact('total_pemasukan', 'total_pengeluaran', 'saldo'));
    }
}
