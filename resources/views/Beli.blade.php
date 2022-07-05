@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-3">
            <img src="{{ asset('data_file/' . $books->gambar) }}" class="card-img-top" style="width: 250px" >
        </div>
        <div class="col" style="font-family: Georgia, 'Times New Roman', Times, serif">
            <h2>{{ $books->judul }}</h2>
            <p>Genre : {{ $books->genre }}</p>
            <p class="mt-5" style="font-size:0.45cm">{{ $books->premis }}</p>
        </div>
    <div>
    <div class="row">
        <div class="col">
            <br><a href="/CekOut/{{ $books->id }}" class="btn btn-dark" style="letter-spacing: 5px">Beli</a>
        </div>
    </div>
</div>
@endsection

