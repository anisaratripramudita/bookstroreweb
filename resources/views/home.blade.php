@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
      <div class="col">
        <h1 class="text-left" style="font-size: 1.7cm; font-family:Georgia, 'Times New Roman', Times, serif">
          Find perfect book<br>for your heart
        </h1>
        <p class="lh-1" style="font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: 3px;">
          beautifull book for your beautifull mind
        </p>
        <br>
        <a href="{{ route('catalog') }}" class="btn btn-dark btn-lg" style="letter-spacing: 3px; font-family: Georgia, 'Times New Roman'">
          Buy all favorite
        </a>
      </div>
      <div class="col">
        <img src="{{ ('picture/home.jpg') }}" class="img-fluid" alt="">
      </div>
    </div>
</div>
<br><br>
<div class="container">
  <div class="row">
    <a class="navbar-brand" href="{{ url('/') }}" >
    <h2 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: 3px; color:black">
      Categories
    </h2>
    </a>
  </div>
</div>
<br>
<div class="container">
  <div class="row" style="font-family: Georgia, 'Times New Roman', Times, serif; text-align:center; font-size: 0.5cm;">
    <div class="col-3">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/c1.jpg') }}" class="img-fluid" alt="">
      <p style="color: black">FAIRYTALE</p>
      </a>
    </div>
    <div class="col-3">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/c2.jpg') }}" class="img-fluid" alt="">
      <p style="color: black">DETECTIVE</p>
      </a>
    </div>
    <div class="col-3">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/c3.jpg') }}" class="img-fluid" alt="">
      <p style="color: black">NOVEL</p>
      </a>
    </div>
    <div class="col-3">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/c4.jpg') }}" class="img-fluid" alt="">
      <p style="color: black">PHILOSOPHY</p>
      </a>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <h2 class="text-center" style="font-size: 1cm; font-family:Georgia, 'Times New Roman', Times, serif">
      From a reader to a leader. <br>Let's be better. <br><br>
    </h2>
  </div>
  <div class="row" style="font-size: 0.5cm; font-family:Georgia, 'Times New Roman', Times, serif">
    <div class="col-3">
      <p class="lh-1"><b>Featured</b></p>
      <p>Our books are 100% original,<br>we do not sale fake and poor quality</p>
      <a href="{{ route('catalog') }}" class="btn btn-secondary btn-sm">Buy all favorite</a>
    </div>
    <div class="col-3">
      <img src="{{ ('picture/s1.jpg') }}" class="img-fluid" width="200px">
      <p>Sharelock Holmes <br>IDR 150.000</p>
    </div>
    <div class="col-3">
      <img src="{{ ('picture/s2.jpg') }}" class="img-fluid" width="200px">
      <p>Little Prince <br>IDR 150.000</p>
    </div>
    <div class="col-3">
      <img src="{{ ('picture/s3.jpg') }}" class="img-fluid" width="200px">
      <p>The sun and her flower <br>IDR 150.000</p>
    </div>
  </div>
</div>
<br>
<div class="container">
  <div class="row">
    <h2 class="text-center" style="font-family: Georgia, 'Times New Roman', Times, serif; letter-spacing: 3px;">
      Content
    </h2>
  </div>
</div>
<br>

<div class="container" style="font-size: 0.5cm; font-family:Georgia, 'Times New Roman', Times, serif">
  <div class="row">
    <div class="col-6">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/k1.png') }}" class="img-fluid" alt="">
      <p style="color: black">How to Absorb Information Quickly and Effectively</p>
      </a>
    </div>
    <div class="col-6">
      <a class="navbar-brand" href="{{ url('/') }}" >
      <img src="{{ ('picture/k2.jpg') }}" class="img-fluid" alt="">
      <p style="color: black">The Best Self-Help Books to Read During Downtime</p>
      </a>
    </div>
  </div>
</div>
<br><br>

<div class="container">
  <div class="row">
    <h1 class="text-center" style="font-size: 1cm; font-family:Georgia, 'Times New Roman', Times, serif">
      Get 15% off your next order. <br>By becoming our member of our official website.
    </h1>
  </div>
  <div class="row">
    <div class="hstack gap-3">
      <input class="form-control me-auto" type="text" placeholder="Add your code..." aria-label="Add your item here...">
        <button type="button" class="btn btn-secondary">Submit</button>
      <div class="vr"></div>
        <button type="button" class="btn btn-outline-danger">Reset</button>
    </div>
  </div>
</div>
@endsection