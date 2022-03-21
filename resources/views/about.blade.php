<body style="background-color: #CBCDC1">
@extends('layout.main')

@section('container')
<h1> Halaman About </h1>
<h2>{{ $name }}</h2>
<h3>{{ $email }}</h3>
<img src="image/{{ $image1 }}" alt="{{ $name }}" width="100" class="img-thumnail rounded-circle">
@endsection

</body>