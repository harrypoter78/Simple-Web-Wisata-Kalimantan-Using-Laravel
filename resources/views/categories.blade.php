<link rel="stylesheet" href="../css/app.css">
<body style="background-color: #CBCDC1">
@extends('layout.main')
@section('container')


    </div>
    </div>
    

    <div class=" " style= " height:1160;">
        <div class="row "  style="height: 995; background-color:#6D7938">
            <div class="col md-7">
            <p class="position-absolute top-auto start-50 translate-middle " style="font-size: 200; color: #FFD600; align-items: center; margin-top: 130" >top</p>
            <p class="position-absolute top-auto start-50 translate-middle " style="font-size: 60; color: #Ffff; align-items: center; margin-top: 230; height: bold;" >destinasi</p>
            <p class="position-absolute top-auto start-50 translate-middle " style="font-size: 26; color: #Ffff; align-items: center; margin-top: 380; height: bold; text-align: center" >Cukup sulit untuk mencari tempat wisata saat Anda datang ke suatu tempat baru. Berikut ini adalah beberapa tempat terpopuler dan lokasi wisata terbaik di Kalimantan</p>
           
        </div>
        @foreach ($categories as $category)
        <div class=" text-center  " style="width:369 ; height:553; margin-top: 550; margin-bottom: 100"  >
            <a href="/categories/{{ $category->slug }}" class="text-decoration-none text-white">
            <div class="card">
              <img src="https://source.unsplash.com/300x400?nature,city" class="card-img">
              <div class="card-img-overlay" style="background-color: rgba(0,0,0,0.7);  ">
                <h4 class="card-title text-white " style="margin-top: 300">KALIMANTAN</h4>
                <p class="card-text" style="margin-top: "><a href="/categories/{{ $category->slug }}" class="text-decoration-none text-white"> {{ $category->name }}</a></p>
              </div>
            </div>
            </a>
          </div>
    
      </div>
    </div>
            @endforeach
@endsection

</body>

 