<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SupplierController extends Controller
{
    public function index(): View
    {
        $suppliers = Supplier::all();
        // return view('pages.kategori.index');
        return view('pages.supplier.index', compact('suppliers'));
    }
    
    public function create(): View
    {
        return view('pages.supplier.create');
    }
    public function store(Request $request): RedirectResponse
    {
        //validate form
        $request->validate([
            'nama_supplier'         => 'required|min:5',
            'alamat'    => 'required|min:5',
            'nomor_telepon'    => 'nullable',
            'email'    => 'nullable',
        ]);
        //create category
        Supplier::create([
            'nama_supplier'         => $request->nama_supplier,
            'alamat'    => $request->alamat,
            'nomor_telepon'    => $request->nomor_telepon,
            'email'    => $request->email,
        ]);

        //redirect to index
        return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Disimpan!']);
    }
    public function destroy(Supplier $supplier): RedirectResponse
    {
        $supplier->delete();
        return redirect()->route('supplier.index')->with(['success' => 'Data Berhasil Dihapus!']);
    }
}