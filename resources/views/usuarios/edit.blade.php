@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    <br />
    @endif
    <div class="col-sm-4">
    <form action="{{route('usuarios.update',$user->id)}}" method="post">
            @method('PATCH')
            @csrf
        <div class="form-group">

          <label for="name">Nombre</label>
        <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Nombre" value="{{$user->name}}">

        </div>
        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email" value="{{$user->email}}">

          </div>

        <button type="submit" class="btn btn-primary">Actualizar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
</div>
</div>
@endsection
