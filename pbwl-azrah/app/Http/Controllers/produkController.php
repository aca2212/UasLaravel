<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produk;

class produkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = produk::all();
        return view('produk.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        produk::create([
            'produk_nama' =>$request->produk_nama,
            'produk_merk' =>$request->produk_merk,
            'produk_harga' =>$request->produk_harga
        ]) ;

        return redirect('produk');
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
        $row=produk::find($id);
        return view ('produk.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= produk::findOrFail($id);

        $row->update([
            'produk_nama' =>$request->produk_nama,
            'produk_merk' =>$request->produk_merk,
            'produk_harga' =>$request->produk_harga
        ]);

        return redirect('produk');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= produk::findOrFail($id);

        $row->delete();

        return redirect('produk');
    }
}
