<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    
    public function index()
    {
        $customers = Customer::all();
        return view('customers.index', compact('customers'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        Customer::create([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        return redirect()->route('customers.index');
    }

    public function edit($kode)
    {
        $customer = Customer::where('kode', $kode)->firstOrFail();
        return view('customers.edit', compact('customer'));
    }

    public function update(Request $request, $kode)
    {
        $customer = Customer::where('kode', $kode)->firstOrFail();
        $customer->update([
            'kode' => $request->kode,
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'telepon' => $request->telepon,
            'email' => $request->email,
        ]);

        return redirect()->route('customers.index');
    }

    public function destroy($kode)
    {
        $customer = Customer::where('kode', $kode)->firstOrFail();
        $customer->delete();

        return redirect()->route('customers.index');
    }
}
