<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\Kategori;

class TransaksiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transaksi = Transaksi::all();
        $kategori = Kategori::all();

        $pemasukan = Transaksi::select('nominal')->whereRelation('kategori','jenis_kategori', '=', 'Pemasukan')->get();
        $total_pemasukan = $pemasukan->sum('nominal');
        
        $pengeluaran = Transaksi::select('nominal')->whereRelation('kategori','jenis_kategori', '=', 'Pengeluaran')->get();
        $total_pengeluaran = $pengeluaran->sum('nominal');
        
        $saldo = $total_pemasukan - $total_pengeluaran;
        
        return view('transaksi.index', compact('transaksi', 'kategori', 'saldo'));
    }

    public function filterByDate(Request $request)
    {
        $transaksi = Transaksi::all();
        $kategori = Kategori::all();
        $start = $request->input('start');
        $end = $request->input('end');

        $transaksis = Transaksi::whereBetween('tanggal_transaksi', [$start, $end])->get();

        

        return view('transaksi.filter', compact('transaksi', 'kategori', 'transaksis'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }



    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Transaksi::create([
            'kategori_id'=> $request->kategori_id,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'nominal'=> $request->nominal,
            'deskripsi'=> $request->deskripsi,
        ]);
        return redirect('transaksi')->with('success', 'Data Berhasil Disimpan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->update([
            'kategori_id'=> $request->kategori_id,
            'tanggal_transaksi'=> $request->tanggal_transaksi,
            'nominal'=> $request->nominal,
            'deskripsi'=> $request->deskripsi,
        ]);
        return redirect('transaksi')->with('success', 'Data Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $transaksi = Transaksi::find($id);
        $transaksi->delete();
        return redirect('transaksi')->with('success', 'Data Berhasil Dihapus');
    }
}
