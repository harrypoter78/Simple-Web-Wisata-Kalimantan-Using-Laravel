
@extends('layout.main')

@section('container')
<article>
    <h2>{{ $post->title }}</h2>
    <p>By. Muhammad Dwiki Reza in Wisata <a href="/categories/{{ $post->category->slug }}">{{
     $post ->category->name }}</a></p>
    {!! $post->body !!}
    {{-- {{ $post->body }} --}}

</article>

<a href="/posts">Back to Posts</a>
    
@endsection

