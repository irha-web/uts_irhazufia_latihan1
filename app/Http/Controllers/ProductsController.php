<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        Products::create([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Data berhasil ditambahkan');
    }

    
    public function edit($id)
    {
        $product = Products::findOrFail($id);
        return view('products.edit', compact('product'));
    }

    
    public function update(Request $request, $id)
    {
        $product = Products::findOrFail($id);

        $product->update([
            'kode_barang' => $request->kode_barang,
            'nama_barang' => $request->nama_barang,
            'harga' => $request->harga,
            'satuan' => $request->satuan,
            'stock' => $request->stock
        ]);

        return redirect()->route('products.index')
                         ->with('success', 'Data berhasil diupdate');
    }

    public function destroy($id)
    {
        $product = Products::findOrFail($id);
        $product->delete();

        return redirect()->route('products.index')
                         ->with('success', 'Data berhasil dihapus');
    }
}