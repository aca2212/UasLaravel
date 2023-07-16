@extends('layouts.app')

@section('content')

<h2>Edit Data Pembeli</h2>

<form action="{{url('pembeli/'. $row->pembeli_id)}}" method="post">
<input type="hidden" name="_method" value= "PATCH">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA</label>
        <input type="text" name="pembeli_nama" id="" class ="form-control" value="{{$row->pembeli_nama}}">
    </div>
    <div class = "mb-3">
        <label for="">ALAMAT</label>
        <textarea name="pembeli_alamat" class ="form-control" id="" cols="30" rows="10">{{$row->pembeli_alamat}}</textarea>
    </div>
    <div class = "mb-3">
        <label for="">NO. TELP.</label>
        <input type="text" name="pembeli_telpon" id="" class ="form-control"  value="{{$row->pembeli_telpon}}">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Update" class ="btn btn-success">
    </div>

</form>

@endsection