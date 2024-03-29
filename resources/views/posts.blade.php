<body>
@extends('layout.main')

@section('container')

@if ($data->count())

<div class="p-4 p-md-5 mb-4 text-white rounded bg-dark">
  <a href="{{url('destination/'.$data[0]->destination_id)}}" class="text-decoration-none" id="no-link">
    <div class="col-md-6 px-0" style="font-family: 'Mulish', sans-serif;">
      <strong class="d-inline-block mb-2 text-success">
        {{$data[0]->destination_category_name }}
      </strong>
      <h1 class="display-4 fst-italic text-white">
        {{ $data[0]->destination_name }}
      </h1>
      <p class="card-text mb-3 text-white" style="opacity: 70%;">{{ Str::limit($data[0]->destination_description, 100, ' ...') }}</p>
      <p class="lead mb-0 text-blue fw-bold" style="opacity: 70%;">Selengkapnya...</p>
    </div>
  </a>
</div>

@endif

<div class="row mb-2">
  @foreach ($data->skip(1) as $post)
  <div class="col-md-6">
    <div class="card flex-md-row mb-4 box-shadow h-md-250 bg-transparent border">
      <div class="card-body d-flex flex-column align-items-start">
        <a href="{{url('destinationByCategory/'.$post->destination_category_id)}}" class="text-decoration-none" id="no-link">
          <strong class="d-inline-block mb-2 text-success">
            {{ $post->destination_category_name }}
          </strong>
        </a>
        <h4 class="mb-0">
          <a class="text-white text-decoration-none" id="no-link" href="{{url('destination/'.$post->destination_id)}}">{{ $post->destination_name }}</a>
        </h4>
        <small class="mb-2 text-muted">{{ $post->created_at->diffForHumans(); }}</small>
        <p class="card-text mb-auto" style="opacity: 70%;">{{ Str::limit($post->destination_description, 100, ' ...') }}</p>
        <a href="{{url('destination/'.$post->destination_id)}}" class="text-decoration-none" id="no-link">Selengkapnya</a>
      </div>
      <a href="{{url('destination/'.$post->destination_id)}}" class="text-decoration-none" id="no-link">
        <img class="card-img-right flex-auto d-none d-md-block" alt="Thumbnail [200x250]" src="{{ url('storage/'.$post['destination_image'][0]) }}" data-holder-rendered="true" style="width: 200px; height: 250px;">
      </a>
    </div>
  </div>
  @endforeach
</div>

</div>

@endsection
</body>
