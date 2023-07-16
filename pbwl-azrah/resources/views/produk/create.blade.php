@extends('layouts.app')

@section('content')

<h2>Tambah Data Produk</h2>

<form action="{{url('produk')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA</label>
        <input type="text" name="produk_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">MERK</label>
        <input type="text" name="produk_merk" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">HARGA</label>
        <input type="text" name="produk_harga" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-success">
    </div>

</form>

@endsection