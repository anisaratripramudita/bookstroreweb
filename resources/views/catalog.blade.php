@extends('layouts.app')

@section('content')
{{-- menu --}}
<div class="container">
    <div class="row" style="font-family: Georgia, 'Times New Roman', Times, serif">
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i1.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Fairytales</p>
            </a>
        </div>
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i2.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Self-Help</p>
            </a>
        </div>
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i3.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Education</p>
            </a>
        </div>
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i4.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Busines</p>
            </a>
        </div>
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i5.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Magazine</p>
            </a>
        </div>
        <div class="col" class="navbar-brand" style="color:black; font-size:0.4cm">
            <a href="">
                <img src="{{ ('picture/i6.png') }}" class="img-fluid" alt="" width="50cm">
            </a>
            <p>Teenlit</p>
        </div>
        <div class="col">
            <a href="" class="navbar-brand" style="color:black; font-size:0.4cm">
                <img src="{{ ('picture/i7.png') }}" class="img-fluid" alt="" width="50cm">
                <p>Literature</p>
            </a>
        </div>
    </div>
</div>
<br><br>
{{-- isi --}}
<div class="container">
    <div class="row justify-content-center">
            <h2 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: 3px;">
              Best Seller
            </h2>
    </div>
    <div class="container">
        <div class="row">
            @foreach ($books as $book)
            <div class="col-2">
                <img src="{{ asset('data_file/' . $book->gambar) }}" class="img-fluid" width="100px">
                <a href="/beli/{{ $book->id }}" style="color:black">
                    <p>{{ $book->judul }} <br> IDR. {{ $book->harga }}</p>
                </a>
            </div>
            @endforeach
        </div>
    </div>
@endsection
