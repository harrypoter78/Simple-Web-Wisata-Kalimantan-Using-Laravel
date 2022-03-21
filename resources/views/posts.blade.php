<body>
@extends('layout.main')

@section('container')
{{-- <h1 class="mb-5">{{ $title }}</h1> --}}

@if ($posts->count())

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <div class="col-md-6 px-0">
    <strong class="d-inline-block mb-2 "><a href="/categories/{{ $posts[0]->category->slug }}" class="text-decoration-none text-success">{{
      $posts[0]->category->name }}</a></strong>
    <h1 class="display-4 fst-italic"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none text-white">{{ $posts[0]->title }}</a></h1>
    <p class="lead my-3">{{ $posts[0]->excerpt }}</p>
    <p class="lead mb-0"><a href="/posts/{{ $posts[0]->slug }}" class="text-white fw-bold">Continue reading...</a></p>
  </div>
</div>


@else
  <p class="text-center fs-3"><a href="/posts/{{ $posts[0]->slug }}" class="text-decoration-none">No Post Found...</a></p>
@endif

<div class="container">
<div class="row mb-2">
  @foreach ($posts->skip(1) as $post)
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 "><a href="/categories/{{ $post->category->slug }}" class="text-decoration-none text-success">{{
          $post->category->name }}</a></strong>
        <h3 class="mb-0">{{ $post->title }}</h3>
        <small class="mb-1 text-muted">{{ $post->created_at->diffForHumans() }}</small>
        <p class="mb-auto">{{ $post->excerpt}}</p>
        <a href="/posts/{{ $post->slug }}" class="stretched-link pt-5">Continue reading</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        {{-- <svg class="bd-placeholder-img" width="200" height="100%" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg> --}}
        <img class="bd-placeholder-img" width="250" height="100%" src="https://source.unsplash.com/1200x500?nature,city" class="card-img-top" alt="{{ $post->category->name }}">

      </div>
    </div>
  </div>
  @endforeach
</div>
</div>

@endsection
</body>

 
