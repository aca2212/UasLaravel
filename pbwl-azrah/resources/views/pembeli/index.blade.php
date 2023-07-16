@extends('layouts.app')

@section('content')

<h2>Data Pembeli</h2>

<a href = "{{url('pembeli/create')}}" class="btn btn-success mb-3">Tambahkan</a>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>NAMA</th>
        <th>ALAMAT</th>
        <th>NO. TELP.</th>
        <th>EDIT</th>
        <th>DELETE</th>
    </tr>
    @foreach ( $rows as $row)
        <tr>
            <td>{{$row->pembeli_id}}</td>
            <td>{{$row->pembeli_nama}}</td>
            <td>{{$row->pembeli_alamat}}</td>
            <td>{{$row->pembeli_telpon}}</td>
            <td><a href = "{{url('pembeli/edit/' . $row->pembeli_id) }}" class= "btn btn-warning">Edit</a></td>
            <td>
                <form action="{{url('pembeli/'. $row->pembeli_id)}}" method="post">
                    <input type="hidden" name="_method" value= "Delete">
                    @csrf
                    <input type="submit" value="Delete" class= "btn btn-danger">
                </form>
            </td>   
        </tr>
    @endforeach
</table>



@endsection