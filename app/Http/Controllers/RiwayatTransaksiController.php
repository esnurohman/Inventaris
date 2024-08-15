<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\RiwayatTransaksi;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RiwayatTransaksiController extends Controller
{
    public function index(): View
    {
        $transaksis = RiwayatTransaksi::all();

        // dd($transaksis);
        // return view('pages.kategori.index');
        return view('pages.riwayat-transaksi.index')->with(compact('transaksis'));
    }
    public function create(): View
    {
        $barangs = Barang::all();
        return view('pages.riwayat-transaksi.create', compact('barangs'));
    }
    public function store(Request $request): RedirectResponse
    {
         //validate form
         $request->validate([
            'barang_id'         => 'nullable',
            'tanggal_transaksi'    => 'required',
            'jenis'    => 'nullable',
            'jumlah'    => 'required',
            'nominal'    => 'required',
            'keterangan'    => 'nullable',
        ]);
        //create riwayat transaksi
        RiwayatTransaksi::create([
            'barang_id'         => $request->barang_id,
            'tanggal_transaksi'    => $request->tanggal_transaksi,
            'jenis'    => $request->jenis,
            'jumlah'    => $request->jumlah,
            'nominal'    => $request->nominal,
            'keterangan'    => $request->keterangan
        ]);

        //redirect to index
        return redirect()->route('riwayat-transaksi.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(RiwayatTransaksi $riwayatTransaksi): RedirectResponse
    {
        $riwayatTransaksi->delete();
        return redirect()->route('riwayat-transaksi.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}