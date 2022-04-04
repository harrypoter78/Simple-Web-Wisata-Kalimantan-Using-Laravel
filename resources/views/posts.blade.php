<body>
@extends('layout.main')

@section('container')

@if ($data->count())

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <a href="{{url('destination/'.$data[0]->destination_id)}}" class="text-decoration-none">
    <div class="col-md-6 px-0" style="font-family: 'Mulish', sans-serif;">
      <strong class="d-inline-block mb-2 text-success">
        {{$data[0]->destination_category_name }}
      </strong>
      <h1 class="display-4 fst-italic text-white">
        {{ $data[0]->destination_name }}
      </h1>
      {{-- <p class="lead my-3" style="opacity: 70%;">{{ $data[0]->destination_description }}</p> --}}
      <p class="lead mb-0 text-white fw-bold">Selengkapnya...</p>
    </div>
  </a>
</div>

@endif

<div class="container">
<div class="row mb-2">
  @foreach ($data->skip(1) as $post)
  <div class="col-md-6">
    <a href="{{url('destination/'.$post->destination_id)}}" class="text-decoration-none">
      <div class="row g-0 border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative" style="font-family: 'Mulish', sans-serif;">
        <div class="col p-4 d-flex flex-column position-static">
          <strong class="d-inline-block mb-2 text-success">
            {{$post->destination_category_name }}
          </strong>
          <h3 class="mb-0 text-white">{{ $post->destination_name }}</h3>
          <small class="mb-1 text-muted">{{ $post->created_at->diffForHumans(); }}</small>
          {{-- <p class="mb-auto" style="opacity: 70%;">{{ $post->destination_description}}</p> --}}
          <div class="stretched-link pt-5">Selengkapnya...</div>
        </div>
        <div class="col-auto d-none d-lg-block">
          {{-- @foreach($image as $image) --}}
          @foreach ($post->destination_image as $image)
            <img class="bd-placeholder-img" width="250" height="100%" src="{{ url('storage/'.$image) }}" class="card-img-top" alt="{{ $post->destination_name }}">
          @endforeach
        </div>
      </div>
    </a>
  </div>
  @endforeach
</div>
</div>

@endsection
</body>
