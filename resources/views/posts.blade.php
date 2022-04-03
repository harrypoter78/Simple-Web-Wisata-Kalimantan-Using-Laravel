<body>
@extends('layout.main')

@section('container')

@if ($data->count())

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <div class="col-md-6 px-0" style="font-family: 'Mulish', sans-serif;">
    <strong class="d-inline-block mb-2 "><a href="" class="text-decoration-none text-success">{{
      $data[0]->destination_category_name }}</a></strong>
    <h1 class="display-4 fst-italic"><a href="" class="text-decoration-none text-white">{{ $data[0]->destination_name }}</a></h1>
    {{-- <p class="lead my-3" style="opacity: 70%;">{{ $data[0]->destination_description }}</p> --}}
    <p class="lead mb-0"><a href="" class="text-white fw-bold">Selengkapnya...</a></p>
  </div>
</div>


@else
  <p class="text-center fs-3" style="font-family: 'Mulish', sans-serif;"><a href="" class="text-decoration-none">No Post Found...</a></p>
@endif

<div class="container">
<div class="row mb-2">
  @foreach ($data->skip(1) as $post)
  <div class="col-md-6">
    <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="font-family: 'Mulish', sans-serif;">
      <div class="col p-4 d-flex flex-column position-static">
        <strong class="d-inline-block mb-2 "><a href="" class="text-decoration-none text-success">{{
          $post->destination_category_name }}</a></strong>
        <h3 class="mb-0">{{ $post->destination_name }}</h3>
        <small class="mb-1 text-muted">{{ $post->created_at->diffForHumans(); }}</small>
        {{-- <p class="mb-auto" style="opacity: 70%;">{{ $post->destination_description}}</p> --}}
        <a href="" class="stretched-link pt-5">Selengkapnya...</a>
      </div>
      <div class="col-auto d-none d-lg-block">
        @foreach ($post->destination_image as $image)
          <img class="bd-placeholder-img" width="250" height="100%" src="{{ url('storage/'.$image) }}" class="card-img-top" alt="{{ $post->destination_name }}">
        @endforeach
      </div>
    </div>
  </div>
  @endforeach
</div>
</div>

@endsection
</body>
