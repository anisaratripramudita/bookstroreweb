@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row-md-7 col-sm-12 mb-5 bg-white p-0">
        <div class="col">
            <img src="{{ asset('data_file/' . $CekOut->gambar) }}" width="300cm">
        </div>
        <div class="col">
            <h2>{{ $CekOut->judul }}</h2>
        </div>
    </div>
</div>
@endsection
