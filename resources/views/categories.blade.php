<link rel="stylesheet" href="../css/app.css">

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
<<<<<<< HEAD
@extends('layout.main')
@section('container')
<main>

  <section class=" text-center container">
    <div class="row py-lg-5">
      <div class="col-lg-9 col-md-8 mx-auto">
        <h1 class="fw-light" style="font-size: 60; font-family: 'Mulish', sans-serif;">Top Destinasi</h1>
        <p class="lead text-muted" style="font-size: 25; font-family: 'Mulish', sans-serif;">Cukup sulit untuk mencari tempat wisata saat Anda datang ke suatu tempat baru. Berikut ini adalah beberapa tempat terpopuler dan lokasi wisata terbaik di Kalimantan.</p>
      </div>
    </div>
  </section>

  <div class="album py-5 " style="background-color: #CBCDC1">
    <div class="container"  >

      <div class="row row-cols-1 row-cols-sm-2 row-cols-sm-3 g-3"  >
        <div class="col">
          <div class="card shadow-sm d-flex justify-content-center">
            <img  src="image/{{ $image1 }}" style="height: 430; color-img"  >
            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.5) ">
              <p class="card-title fs-1 text-center flex-fill " style="font-family: 'Mulish', sans-serif;"><a class="text-decoration-none  text-white" href="/categories/{{ $categories[0]->slug }}" class=" "> {{ $categories[0]->name }}</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm d-flex justify-content-center">
            <img  src="image/{{ $image2 }}" style="height: 430; color-img"  >
            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.5) ">
              <p class="card-title fs-1 text-center flex-fill " style="font-family: 'Mulish', sans-serif;"><a class="text-decoration-none  text-white" href="/categories/{{ $categories[1]->slug }}" class=" "> {{ $categories[1]->name }}</a></p>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm d-flex justify-content-center">
            <img  src="image/{{ $image3 }}" style="height: 430; color-img"  >
            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.5) ">
              <p class="card-title fs-1 text-center flex-fill " style="font-family: 'Mulish', sans-serif;"><a class="text-decoration-none  text-white" href="/categories/{{ $categories[2]->slug }}" class=" "> {{ $categories[2]->name }}</a></p>
            </div>
          </div>
        </div>
        


        {{-- @foreach ($categories as $category)
        <div class="col">
          <div class="card shadow-sm d-flex justify-content-center">
            <img  src="https://source.unsplash.com/1200x500?mountain,city" style="height: 430; color-img"  >
            <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.5) ">
              <p class="card-title fs-1 text-center flex-fill " style="font-family: 'Mulish', sans-serif;"><a class="text-decoration-none  text-white" href="/categories/{{ $category->slug }}" class=" "> {{ $category->name }}</a></p>
            </div>
          </div>
        </div>
        @endforeach --}}
=======
  @extends('Hotel.header')
  @section('container')
  <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Top Destinasi</h1>
          <p class="lead text-muted">Cukup sulit untuk mencari tempat wisata saat Anda datang ke suatu tempat baru.
            Berikut ini adalah beberapa tempat terpopuler dan lokasi wisata terbaik di Kalimantan.</p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 g-4">
          @foreach ($categories as $category)
          <div class="col">
            <div class="card shadow-sm d-flex justify-content-center">
              {{-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225"
                src="https://source.unsplash.com/1200x500?nature,city" role="img" aria-label="Placeholder: Thumbnail"
                preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg> --}}
              <img src="https://source.unsplash.com/1200x500?mountain,city" style="height: 430; color-img">
              <div class="card-img-overlay d-flex align-items-center" style="background-color: rgba(0,0,0,0.5) ">
                <p class="card-title fs-1 text-center flex-fill "><a class="text-decoration-none  text-white"
                    href="/categories/{{ $category->slug }}" class=" "> {{ $category->name }}</a></p>
                {{-- <p class="card-text text-white mt-0">KALIMANTAN</p> --}}
              </div>
            </div>
          </div>
          @endforeach
>>>>>>> c9548a7f7d98f377f52ee5b3512c4933bf129712

        </div>
      </div>
    </div>

  </main>


  @endsection

  {{-- <main>

    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Album example</h1>
          <p class="lead text-muted">Something short and leading about the collection below—its contents, the creator,
            etc. Make it short and sweet, but not too short so folks don’t simply skip over it entirely.</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Main call to action</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>

    <div class="album py-5 bg-light">
      <div class="container">

        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card shadow-sm">
              <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg"
                role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false">
                <title>Placeholder</title>
                <rect width="100%" height="100%" fill="#55595c" /><text x="50%" y="50%" fill="#eceeef"
                  dy=".3em">Thumbnail</text>
              </svg>

              <div class="card-body">
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                  content. This content is a little bit longer.</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                  </div>
                  <small class="text-muted">9 mins</small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  </main> --}}

</body>