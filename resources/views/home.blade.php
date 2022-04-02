<<<<<<< HEAD
@extends('layout.main')

@section('container')
@endsection
<div class="carousel-item active ">
  <img src="image/{{ $image3 }}" class=" w-100" style=" height: 720px;" alt="..">
  <div class="carousel-caption mt-0" style="justify-content: center;  "> 
    <h1 class="" style="font-size: 172; font-family: 'Mulish', sans-serif;" >KALIMANTAN</h1>
    <p class="mt-5" style="font-size: 31; font-family: 'Mulish', sans-serif;">Sungai Kunyit Laut (Kalimantan Barat)</p>
    <button type="button" class="btn btn-light " style="font-size: 16; border-radius: 20px; font-weight: bold; font-family: 'Mulish', sans-serif; padding: 5 30;"> <a href="/" class="text-decoration-none text-dark">    Hotel   </a> </button>
    <button type="button" class="btn btn-light " style="font-size: 16; border-radius: 20px; font-weight: bold; font-family: 'Mulish', sans-serif; padding: 5 30;"> <a href="/categories" class="text-decoration-none text-dark">    Wisata   </a> </button>
  </div>
</div>








      


 
      

      
    

    

      
      

    
=======
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
>>>>>>> c9548a7f7d98f377f52ee5b3512c4933bf129712
