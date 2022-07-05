@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        @foreach ($articles as $artikel)
        <div class="col-4">
            <div class="card">
                <img src="{{ asset('data_file/' . $artikel->gambar) }}" class="card-img-top">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul }}</h5>
                    <a href="/detail/{{ $artikel->id }}" class="btn btn-primary">Baca Artikel</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
