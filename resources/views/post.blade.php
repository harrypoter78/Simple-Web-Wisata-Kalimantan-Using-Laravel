<body style="background-color: #CBCDC1">
<link rel="stylesheet" href="../css/app.css">
@extends('layout.main')

@section('container')

<div class="container">
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <h2 class="mb-3 text-center">{{ $post->title }}</h2>
            <p class="text-center"> Wisata <a href="/categories/{{ $post->category->slug }}" class="text-decoration-none">{{
            $post ->category->name }}</a></p>
            
            <img src="https://source.unsplash.com/1200x500?nature,city" alt="" class="img-fluid">

            <article class="my-3">

                {!! $post->body !!}
            </article>
            

            <a href="/posts" class="d-">Back to Posts</a>


        </div>
    </div>
</div>


{{-- <article>
    
    <p>By. Muhammad Dwiki Reza in Wisata <a href="/categories/{{ $post->category->slug }}">{{
     $post ->category->name }}</a></p>
    {!! $post->body !!}
    

</article>

<a href="/posts">Back to Posts</a> --}}

{{--  --}}
    
@endsection
</body>

