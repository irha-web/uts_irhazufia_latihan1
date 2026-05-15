<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
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
        'satuan' => $request->satuan

    ]);

    return redirect('/products');
    }

    public function show(Products $products)
    {
        //
    }

    public function edit($id)
    {
        $products = Products::findOrFail($id);
        return view('products.edit', compact('products'));
    }

    public function update(Request $request, Products $products, $id)
    {
        $products = Products::findOrFail($id);
        $products->update([

        'kode_barang' => $request->kode_barang,
        'nama_barang' => $request->nama_barang,
        'harga' => $request->harga,
        'satuan' => $request->satuan

    ]);

    return redirect('/products');
    }

    public function destroy(Products $products, $id)
    {
        $products = Products::findOrFail($id);
        $products->delete();

    return redirect()->route('products.index');
    }
}
