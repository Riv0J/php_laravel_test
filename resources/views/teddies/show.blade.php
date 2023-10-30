@extends('layout.plantilla')
@section('title', 'Ver peluche')
@section('main')
    <h1>Ver Peluches</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{URL::asset('img/'.$teddy->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>{{$teddy->name}}</h3>
            <p class="card-text">Este peluche se llama {{$teddy->name}} y es de color <i style = 'color: {{$teddy->color}};' class="fa-solid fa-circle"></i> {{$teddy->color}}</p>
        </div>
    </div>
@endsection
