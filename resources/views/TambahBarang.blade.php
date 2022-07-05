@extends('layouts.app')

@section('content')
<div class="container">
    <div class="col-md-8 col-sm-12 bg-white p-4">
        <form method="post" action="/tambahbarang" enctype="multipart/form-data">
        @csrf
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Gambar') }}</label>
                <input type="file" class="form-control" name="gambar">
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Judul Buku') }}</label>
                <input type="text" class="form-control" name="judul">
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Harga') }}</label>
                <input type="text" class="form-control" name="harga">
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Genre') }}</label>
                <select class="form-select" name="genre">
                    <option>--Pilih--</option>
                  <option value="dongeng">Dongeng</option>
                  <option value="self-help">Self Help</option>
                  <option value="edukasi">Pendidikan</option>
                  <option value="bisnis">Bisnis</option>
                  <option value="fiksi remaja">Fiksi Remaja</option>
                  <option value="sastra">Sastra</option>
                </select>
            </div>
            <div class="form-group">
                <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Premis') }}</label>
                <textarea class="form-control" name="premis" rows="15"></textarea>
            </div><br>
            <div class="form-group">
                <div class="col-md-2">
                    <input type="submit" class="form-control btn btn-primary" value="Upload"> 
                </div>
            </div>
    </div>
</div>
@endsection
