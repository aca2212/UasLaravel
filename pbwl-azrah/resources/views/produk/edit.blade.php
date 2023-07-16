@extends('layouts.app')

@section('content')

<h2>Edit Data Produk</h2>

<form action="{{url('produk/'. $row->produk_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA</label>
        <input type="text" name="produk_nama" id="" class ="form-control" value="{{$row->produk_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">MERK</label>
        <input type="text" name="produk_merk" id="" class ="form-control"  value="{{$row->produk_merk}}">
    </div>
    <div class = "mb-3">
        <label for="">HARGA</label>
        <input type="text" name="produk_harga" id="" class ="form-control"  value="{{$row->produk_harga}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-success">
    </div>

</form>

@endsection