<body >
@extends('layout.main')

@section('container')

<div class="row g-5">
    <div class="col-md-8">
      
      <article class="blog-post">
        <h2 class="blog-post-title" style="font-family: 'Mulish', sans-serif;">{{ $post->title }}</h2>
        <p class="blog-post-meta" style="font-family: 'Mulish', sans-serif;"> Wisata <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post ->category->name }}</a> Kalimantan - <small> {{ $post->created_at->diffForHumans() }}</small></p>

        {{-- <img src="https://source.unsplash.com/1200x500?mountain,city" alt="" class="img-fluid mb-3"> --}}

        <div id="carouselExampleControls" class="carousel slide mb-3" data-bs-ride="carousel" style="font-family: 'Mulish', sans-serif;">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="https://source.unsplash.com/1200x500?mountain,city" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x500?mountain,city" class="d-block w-100" alt="...">
              </div>
              <div class="carousel-item">
                <img src="https://source.unsplash.com/1200x500?mountain,city" class="d-block w-100" alt="...">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        
          <div style="font-family: 'Mulish', sans-serif;">  {!! $post->body !!}</div>
       
        
      </article>

  
    </div>
  
    <div class="col-md-4" style="font-family: 'Mulish', sans-serif;">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 rounded " style="border: 1px solid black;
        border-bottom-left-radius: 25px;">
          <h4 class="fst-italic">Alamat</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4 mb-3 rounded " style="border: 1px groove black;
        border-bottom-left-radius: 25px;">
          <h4 class="fst-italic">Kategori Wisata</h4>
          <ol class="list-unstyled mb-0">
            <li><a href="#">Kota</a></li>
            <li><a href="#">Alam</a></li>
            <li><a href="#">Kuliner</a></li>
          </ol>
        </div>
        
  
  
        <div class="p-4" style="font-family: 'Mulish', sans-serif;">
          <h4 class="fst-italic">Sosial Media</h4>
          <ol class="list-unstyled">
            <li><a href="#">Instagram</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
          </ol>
        </div>
      </div>
    </div>
  </div>




{{-- <div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 text-center">{{ $post->title }}</h2>
            <p class="text-center"> Wisata <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post ->category->name }}</a></p>
            
            <img src="https://source.unsplash.com/1200x500?mountain,city" alt="" class="img-fluid">

            <article class="my-3">

            {!! $post->body !!}
            </article>
            

            <a href="/posts" class="d-">Back to Posts</a>


        </div>
    </div>
</div> --}}
    
@endsection
</body>

