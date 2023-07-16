<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\order;

class orderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rows = order::all();
        return view('order.index', compact('rows')) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        order::create([
            'order_nama' =>$request->order_nama,
            'order_jumlah' =>$request->order_jumlah,
            'order_nama_produk' =>$request->order_nama_produk
        ]) ;

        return redirect('order');
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
        $row=order::find($id);
        return view ('order.edit', compact('row')) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $row= order::findOrFail($id);

        $row->update([
            'order_nama' =>$request->order_nama,
            'order_jumlah' =>$request->order_jumlah,
            'order_nama_produk' =>$request->order_nama_produk
        ]);

        return redirect('order');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $row= order::findOrFail($id);

        $row->delete();

        return redirect('order');
    }
}
