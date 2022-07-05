@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-sm-12 bg-white p-4">
        <form method="post" action="/uploadArtikel" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
            <input type="file" class="form-control" name="gambar">
        </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Judul Artikel') }}</label>
                <input type="text" class="form-control" name="judul" placeholder="Judul artikel">
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Isi Artikel') }}</label>
                <textarea class="form-control" name="deskripsi" rows="15"></textarea>
            </div><br>
            <div class="form-group">
                <div class="col-md-2">
                    <input type="submit" class="form-control btn btn-primary" value="Upload"> 
                </div>
            </div>
    </div>
</div>
@endsection
