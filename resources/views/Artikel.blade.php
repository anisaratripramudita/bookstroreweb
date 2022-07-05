@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-7 col-sm-12 mb-5 bg-white p-0">
        <img src="{{ asset('data_file/' . $article->gambar) }}" class="card-img-top"  >
        <div class="p-4">
            <h2>{{ $article->judul }}</h2>
            <p class="mt-5">{{ $article->deskripsi }}</p>
        </div>
    </div>
</div>
@endsection

