@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">

    <div class="col-sm-4">
        @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
    <form action="{{route('usuarios.store')}}" method="POST">
            @csrf
        <div class="form-group">

          <label for="name">Nombre</label>
          <input type="text" class="form-control" name="name" aria-describedby="emailHelp" placeholder="Nombre">

        </div>
        <div class="form-group">
            <label for="email">Email </label>
            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Email">

          </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" class="form-control" name="password" placeholder="Password">
        </div>

        <button type="submit" class="btn btn-primary">Registrar</button>
        <button type="reset" class="btn btn-danger">Cancelar</button>
      </form>
    </div>
</div>
</div>
@endsection
