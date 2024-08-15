<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KategoriController extends Controller
{
    public function index(): View
    {
        $kategoris = Kategori::all();
        // return view('pages.kategori.index');
        return view('pages.kategori.index', compact('kategoris'));
    }
    public function create(): View
    {
        return view('pages.kategori.create');
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama'         => 'required|min:5',
            'deskripsi'    => 'required|min:5',
        ]);
        //create category
        Kategori::create([
            'nama'         => $request->nama,
            'deskripsi'    => $request->deskripsi
        ]);

        //redirect to index
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(Kategori $kategori): RedirectResponse
    {
        $kategori->delete();
        return redirect()->route('kategori.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}