@extends('Hotel.header')


<div class="carousel-item active" style="background-image: url('{{ asset('assets/img/brg_Landing.png')}}');">
  <img src="image/{{ $image1 }}" class=" w-100" style=" height: 720px;" alt="..">
  <div class="carousel-caption mt-0" style="justify-content: center;  ">
    <h1 class="" style="font-size: 172;">KALIMANTAN
    </h1>
    <p class=" mt-5" style="font-size: 31">Kereng Bangkirai (Sebangau National Park)</p>
    <button type="button" class="btn btn-light " style="font-size: 16; border-radius: 20px; font-weight: bold"> <a
        href="{{ route('Hotel.list-hotel') }}" class="text-decoration-none text-dark"> Hotel </a> </button>
    <button type="button" class="btn btn-light " style="font-size: 16; border-radius: 20px; font-weight: bold"> <a
        href="/categories" class="text-decoration-none text-dark"> Wisata </a> </button>
  </div>
</div>