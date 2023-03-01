@extends('layout.app')

@section('content')
<div id="carouselExampleSlidesOnly" class="carousel slide m-5" data-bs-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('home/images/home.jpg') }}" class="d-block w-75 " alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home/images/home1.jpg') }}" class="d-block w-75" alt="...">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('home/images/home2.jpg') }}" class="d-block w-75" alt="...">
      </div>
    </div>
  </div>

@endsection
