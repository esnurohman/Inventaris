<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\RiwayatTransaksi;
use Illuminate\Http\Request;
use Illuminate\View\View;

class OverviewController extends Controller
{
    public function index()
    {
        $barangs = Barang::latest()->paginate(5);
        $transaksis = RiwayatTransaksi::latest('created_at', 'desc')->get();
        $pembelian = RiwayatTransaksi::where('jenis', 'masuk')->get();
        $penjualan = RiwayatTransaksi::where('jenis', 'keluar')->get();

        // dd($barangs);
        return view('pages.overview')->with(compact('barangs', 'transaksis', 'pembelian', 'penjualan'));
    }
    // public function indexBarang(): View
    // {
    //     $barangs = Barang::all();
        
    //     return view('pages.overview', compact('barangs'));
    // }
    // public function indexSupplierToSidebar(): View
    // {
    //     $suppliers = Supplier::all();
    //     // return view('pages.kategori.index');
    //     return view('components.sidebar-dashboard', compact('suppliers'));
    // }
}