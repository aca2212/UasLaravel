@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <h3 class="card-title text-center">Selamat Datang di Smart-Store</h3>
                        <p class="card-text text-center">Silahkan lihat produk-produk terbaik kami!
                            Ada banyak jenis smartphone, laptop dan alat eletronik lainnya dengan fitur yang cakepppp banget buat kamu!
                            "Yuk, Belanja Sekarang Juga !!!"</p>
                        <a href="{{ url('/pembeli') }}"
                            class="btn btn-success my-3 w-100">{{ __('Anda Berhasil Login') }}</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
