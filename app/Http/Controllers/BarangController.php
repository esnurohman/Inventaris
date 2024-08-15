<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Kategori;
use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class BarangController extends Controller
{
    public function index(): View
    {
        $barangs = Barang::all();
        // return view('pages.kategori.index');
        return view('pages.barang.index')->with('barangs', $barangs);
    }
    public function create(): View
    {
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        return view('pages.barang.create')->with(compact('kategoris', 'suppliers'));
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_barang'         => 'required|min:5',
            'kategori_id'    => 'nullable',
            'merek'    => 'required',
            'model'    => 'required',
            'jumlah'    => 'required',
            'satuan'    => 'required',
            'lokasi'    => 'required',
            'kondisi'    => 'required',
            'tanggal_pembelian'    => 'required',
            'harga_beli'    => 'required',
            'supplier_id'    => 'required',
            'foto'    => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
        ]);

        $foto = $request->file('foto');
        $foto->storeAs('public/fotos', $foto->hashName());

        //create category
        Barang::create([
            'nama_barang'         => $request->nama_barang,
            'kategori_id'    => $request->kategori_id,
            'merek'    => $request->merek,
            'model'    => $request->model,
            'jumlah'    => $request->jumlah,
            'satuan'    => $request->satuan,
            'lokasi'    => $request->lokasi,
            'kondisi'    => $request->kondisi,
            'tanggal_pembelian'    => $request->tanggal_pembelian,
            'harga_beli'    => $request->harga_beli,
            'supplier_id'    => $request->supplier_id,
            'foto'    => $foto->hashName(),
        ]);
        //redirect to index
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy(Barang $barang): RedirectResponse
    {
        $barang->delete();
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
    public function edit(Barang $barang): View
    {
        $barang = Barang::findorfail($barang->id);
        // dd($barang);
        $kategoris = Kategori::all();
        $suppliers = Supplier::all();
        return view('pages.barang.edit', compact('barang', 'kategoris', 'suppliers'));
    }
    public function update(Request $request, Barang $barang): RedirectResponse
    {
        $request->validate([
            'nama_barang'         => 'required|min:5',
            'kategori_id'    => 'nullable',
            'merek'    => 'required|min:5',
            'model'    => 'required|min:5',
            'jumlah'    => 'required',
            'satuan'    => 'required',
            'lokasi'    => 'required',
            'kondisi'    => 'required',
            'tanggal_pembelian'    => 'required',
            'harga_beli'    => 'required',
            'supplier_id'    => 'required',
            'foto'    => 'nullable|image|mimes:jpeg,jpg,png|max:5120',
        ]);
        $foto = $request->file('foto');
        // $foto->storeAs('public/fotos', $foto->hashName());

        // $barang = Barang::findorfail($barang->id);
        if ($request->hasFile('foto')) {
            $foto->storeAs('public/fotos', $foto->hashName());
            $barang->update([
                'nama_barang'         => $request->nama_barang,
                'kategori_id'    => $request->kategori_id,
                'merek'    => $request->merek,
                'model'    => $request->model,
                'jumlah'    => $request->jumlah,
                'satuan'    => $request->satuan,
                'lokasi'    => $request->lokasi,
                'kondisi'    => $request->kondisi,
                'tanggal_pembelian'    => $request->tanggal_pembelian,
                'harga_beli'    => $request->harga_beli,
                'supplier_id'    => $request->supplier_id,
                'foto'    => $foto->hashName(),
            ]);
        } else {
            $barang->update([
                'nama_barang'         => $request->nama_barang,
                'kategori_id'    => $request->kategori_id,
                'merek'    => $request->merek,
                'model'    => $request->model,
                'jumlah'    => $request->jumlah,
                'satuan'    => $request->satuan,
                'lokasi'    => $request->lokasi,
                'kondisi'    => $request->kondisi,
                'tanggal_pembelian'    => $request->tanggal_pembelian,
                'harga_beli'    => $request->harga_beli,
                'supplier_id'    => $request->supplier_id,
            ]);
        }
        return redirect()->route('barang.index')->with(['success' => 'Data Berhasil Diupdate!']);
    }
}