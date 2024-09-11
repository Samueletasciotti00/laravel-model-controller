@extends('layouts.main')

<!-- Sezione dei Movie -->
@section('content')
<div class="container my-5">

    <!-- Titol -->
    <h1>Film</h1>
        
    <!-- Card films -->
    <div class="cards">

    @foreach ($movies as $movie)
        <div class="box">

            <!-- Titolo -->
            <h2>{{ $movie->title }}</h2>            

            <!-- info -->
            <h4><span>VOTO: </span>{{ $movie->vote }}</h4>
            <h4><span>ORIGINAL TITLE: </span>{{ $movie->original_title }}</h4>
            <h4><span>DATA: </span>{{ $movie->date }}</h4>
            <h4><span>PROVENIENZA : </span>{{ $movie->nationality }}</h4>
        </div>
    @endforeach        
    </div>
</div>
@endsection