@extends('layout.plantilla')
@section('title', 'Galería')
@section('main')
    <h1>Galería de Peluches</h1>
    <section class='row justify-content-center'>
        @foreach ($teddies as $teddy)
            <div class="card m-3" style="width: 18rem;">
                <img src="{{ URL::asset('img/'.$teddy->image) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h3>{{ $teddy->name }}</h3>
                    <p class="card-text">Este peluche se llama {{ $teddy->name }} y su color es {{ $teddy->color }} <i style = 'color: {{ $teddy->color }};' class="fa-solid fa-circle"></i></p>
                </div>
            </div>
        @endforeach
    </section>
@endsection
