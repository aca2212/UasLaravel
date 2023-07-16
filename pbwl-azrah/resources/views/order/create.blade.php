@extends('layouts.app')

@section('content')

<h2>Tambah Data Order</h2>

<form action="{{url('order')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA PEMBELI</label>
        <input type="text" name="order_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">JUMLAH</label>
        <input type="text" name="order_jumlah" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">NAMA PRODUK</label>
        <input type="text" name="order_nama_produk" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-success">
    </div>

</form>

@endsection