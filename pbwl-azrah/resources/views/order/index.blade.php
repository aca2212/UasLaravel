@extends('layouts.app')

@section('content')

<h2>Data Order</h2>

<a href = "{{url('order/create')}}" class="btn btn-success mb-3">Tambahkan</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA PEMBELI</th>
        <th>JUMLAH</th>
        <th>NAMA PRODUK</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->order_id}}</td>
            <td>{{$row->order_nama}}</td>
            <td>{{$row->order_jumlah}}</td>
            <td>{{$row->order_nama_produk}}</td>
            <td><a href = "{{url('order/edit/' . $row->order_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('order/'. $row->order_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection