@extends('layout.plantilla')
@section('stylesheet')
    <link href="{{URL::asset('css/teddies_index.css')}}." rel="stylesheet">
@endsection
@section('title', 'Listado de peluches')
@section('main')
    {{-- <h1>Listado de Peluches</h1>
    <div class="card" style="width: 18rem;">
        <img src="{{URL::asset('img/'.$teddy->image)}}" class="card-img-top" alt="...">
        <div class="card-body">
            <h3>{{$teddy->name}}</h3>
            <p class="card-text">Este peluche se llama {{$teddy->name}} y es de color {{$teddy->color}} <i style = 'color: {{$teddy->color}};' class="fa-solid fa-circle"></i></p>
        </div>
    </div>

    @endforeach
    --}}
    <h1>Tabla de Peluches</h1>
    <table class="table dark my-4">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Color</th>
                <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teddies as $teddy)
                <tr>
                    <td>
                        {{ $teddy->id }}
                        <img src="{{URL::asset('img/'.$teddy->image)}}" class="square_thumbnail" alt="...">
                    </td>
                    <td>{{ $teddy->name }}</td>
                    <td>{{ $teddy->color }}<i style = 'color: {{$teddy->color}};' class="fa-solid fa-circle"></i></td>
                    <td class='row'>
                        <!-- URL TO GENERA UNA RUTA DESDE PUBLIC -->
                        <a class='pseudo_button' href="{{URL::to('peluche/'.$teddy->id)}}"><i class="fa-regular fa-eye"></i></a>
                        <a class='pseudo_button' href="" ><i class="fa-regular fa-pen-to-square"></i></a>
                        <form action="{{route('peluche.destroy', $teddy->id)}}" method='POST'>
                            @csrf
                            @method('DELETE')
                            <button type="submit" class='pseudo_button'><i class="fa-solid fa-trash"></i></button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
@section('script')
    <script>
        function asdjkabs() {

        }
        asdjkabs()
    </script>
@endsection
