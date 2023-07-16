@extends('layouts.app')

@section('content')

<h2>Data Produk</h2>

<a href = "{{url('produk/create')}}" class="btn btn-success mb-3">Tambahkan</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>MERK</th>
        <th>HARGA</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->produk_id}}</td>
            <td>{{$row->produk_nama}}</td>
            <td>{{$row->produk_merk}}</td>
            <td>{{$row->produk_harga}}</td>
            <td><a href = "{{url('produk/edit/' . $row->produk_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('produk/'. $row->produk_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection