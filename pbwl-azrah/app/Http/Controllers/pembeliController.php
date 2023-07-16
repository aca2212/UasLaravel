<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\pembeli;

class pembeliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = pembeli::all();
        return view('pembeli.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pembeli.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        pembeli::create([
            'pembeli_nama' =>$request->pembeli_nama,
            'pembeli_alamat' =>$request->pembeli_alamat,
            'pembeli_telpon' =>$request->pembeli_telpon
        ]) ;

        return redirect('pembeli');
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
        $row=pembeli::find($id);
        return view ('pembeli.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= pembeli::findOrFail($id);

        $row->update([
            'pembeli_nama' =>$request->pembeli_nama,
            'pembeli_alamat' =>$request->pembeli_alamat,
            'pembeli_telpon' =>$request->pembeli_telpon
        ]);

        return redirect('pembeli');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= pembeli::findOrFail($id);

        $row->delete();

        return redirect('pembeli');
    }
}
