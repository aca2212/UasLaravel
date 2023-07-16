@extends('layouts.app')

@section('content')

<h2>Edit Data Order</h2>

<form action="{{url('order/'. $row->order_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA PEMBELI</label>
        <input type="text" name="order_nama" id="" class ="form-control" value="{{$row->order_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">JUMLAH</label>
        <input type="text" name="order_jumlah" id="" class ="form-control"  value="{{$row->order_jumlah}}">
    </div>
    <div class = "mb-3">
        <label for="">NAMA PRODUK</label>
        <input type="text" name="order_nama_produk" id="" class ="form-control"  value="{{$row->order_nama_produk}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-success">
    </div>

</form>

@endsection