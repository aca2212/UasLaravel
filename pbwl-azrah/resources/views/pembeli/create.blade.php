@extends('layouts.app')

@section('content')

<h2>Tambah Data Pembeli</h2>

<form action="{{url('pembeli')}}" method="post">
    @csrf
    <div class = "mb-3">
        <label for="">NAMA</label>
        <input type="text" name="pembeli_nama" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <label for="">ALAMAT</label>
        <textarea name="pembeli_alamat" class ="form-control" id="" cols="30" rows="10"></textarea>
    </div>
    <div class = "mb-3">
        <label for="">NO. TELP.</label>
        <input type="text" name="pembeli_telpon" id="" class ="form-control">
    </div>
    <div class = "mb-3">
        <input type="submit" value="Simpan" class ="btn btn-success">
    </div>

</form>

@endsection