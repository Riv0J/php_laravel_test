@extends('layout.plantilla')
@section('title', 'Nuevo peluche')
@section('main')
    <h1>Nuevo Peluche</h1>
    <form action="{{route('peluche.store')}}" method='POST'>
        @csrf
        <div class="form-group">
          <label for="exampleInputEmail1">Nombre</label>
          <input type="text" class="form-control" id="exampleInputEmail1" name='name' aria-describedby="emailHelp" value='Peluche de prueba'>
          <small id="emailHelp" class="form-text text-muted">No utilice nombre turbios por favor</small>
        </div>
        <div class="form-group">
            <label for="exampleColorInput" class="form-label">Color</label>
            <input type="color" class="form-control form-control-color" name ='color' id="exampleColorInput" value="#Black" title="Choose your color">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
@endsection
@section('script')
    <script>
        function asdjkabs() {

        }
        asdjkabs()
    </script>
@endsection
