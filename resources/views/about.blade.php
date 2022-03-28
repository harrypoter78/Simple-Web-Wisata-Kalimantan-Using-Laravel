<link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/heroes/">

    <!-- Bootstrap core CSS -->
<link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

<body>
@extends('layout.main')

@section('container')
<div class="px-4 pt-5 my-5 text-center ">
    <h1 class="display-4 fw-bold">Travel</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-4">Halo, kami adalah Travel Company. Travel Company adalah perusahaan yang bergerak 
        di bidang manajemen travel. Perusahaan ini berdiri sejak tahun 2021, fokus kami
        adalah memberikan pelayanan terbaik kepada pelanggan dan membuat
        Pulau Kalimantan menjadi tempat yang menarik untuk disinggahi.
        Semoga Anda puas dengan layanan kami.</p>
    </div>
  </div>

  <div class="px-4 my-5 text-center border-bottom">
    <h1 class="display-4 fw-bold">Kirim Kritik dan Saran Anda</h1>
    <div class="col-lg-6 mx-auto">
      <p class="lead mb-1 mb-2"> <i class="bi bi-envelope-fill"></i>
        Travel@gmail.com</p>
      <p class="lead mb-1 mb-2"><i class="bi bi-geo-alt-fill"></i>
        Kalimantan, Indonesia</p>
      <p class="lead mb-1 mb-2"><i class="bi bi-whatsapp"></i>
        089678926152</p>
      <p class="lead mb-2 mb-2"><i class="bi bi-meta"></i>
        Travel Company Indonesia</p>

        
    </div>
  </div>



{{-- <h1> Halaman About </h1>
<h2>{{ $name }}</h2>
<h3>{{ $email }}</h3>
<img src="image/{{ $image1 }}" alt="{{ $name }}" width="100" class="img-thumnail rounded-circle"> --}}
@endsection

</body>