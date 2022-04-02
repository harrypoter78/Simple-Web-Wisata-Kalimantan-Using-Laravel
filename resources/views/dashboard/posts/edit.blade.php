
@extends('dashboard.layout.main')

@section('container')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
    <h1 class="h2">Edit Data Wisata</h1>
</div>

@if(session()->has('success'))
<div class="alert alert-success" role="alert">
    {{ session('success') }}
  </div>
@endif

<div class="col-lg-7">

    <form method="post" action="/dashboard/posts/{{ $post->slug }}" class="mb-5">
      @method('put')
        @csrf
      <div class="mb-3">
        <label for="title" class="form-label">Judul</label>
        <input type="text" class="form-control  @error('title')
        is-invalid
        @enderror" id="title" name="title"  value="{{ old('title', $post->title) }}">
        
        @error('title')
        <div class="invalid-feedback">
            <small>Judul harus diisi!!!</small>
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="slug" class="form-label">Slug</label>
        <input type="text" class="form-control @error('slug')
        is-invalid
        @enderror" id="slug" name="slug" value="{{ old('slug', $post->slug) }}">
        @error('slug')
        <div class="invalid-feedback">
            <small>Slug harus diisi!!!</small>
        </div>
        @enderror
      </div>
      <div class="mb-3">
        <label for="category" class="form-label">Kategori</label>
        <select class="form-select" name="category_id">
            <option selected>Pilih Kategori</option>
            @foreach ($categories as $category )
            <option value="{{ $category->id}}">{{ $category->name }}</option>
            @endforeach
          </select>
      </div>
      <div class="mb-3">
        <label for="body" class="form-label">Body</label>
        @error('body')
        <p class="text-danger">Body harus diisi!!!</p>
        @enderror
        <input id="body" type="hidden" name="body" value="{{ old('body', $post->body) }}">
        <trix-editor trix-editor input="body"></trix-editor>
      </div>

      <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>

{{-- <script>
    const title =document.querySelector('#title');
    const slug =document.querySelector('#slug');    

    title.addEventListener('change', function(){
        fetch('/dashboard/posts/checklug?title=' + title.value')
        .then(response => response.json())
        .then(data => slug.value = data.slug)

    })
</script> --}}


<script>
   document.addEventListener('trix-fille-accept', function(e) {
       e.preventDefault();
   }) 
</script>
@endsection