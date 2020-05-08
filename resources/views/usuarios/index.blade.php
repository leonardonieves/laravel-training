@extends('layouts.app')

@section('content')
Listado de User registrados <a href="usuarios/create"><button type="button" class="btn btn-success float-right">Agregar usuario</button></a>
<div class="col-sm-12">

    @if(session()->get('success'))
      <div class="alert alert-success">
        {{ session()->get('success') }}
      </div>
    @endif
</div>

<table class="table table-hover">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nombre</th>
        <th scope="col">Email</th>
        <th scope="col">Acciones</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <th scope="row"><a href="{{ url('/usuarios/show/' . $user->id ) }}">{{$user->id}}</a></th>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
        <td>
            <a href="{{route('usuarios.edit',$user->id )}}"><button class="btn btn-primary">Editar</button></a>
        </td>
        <td>
            <form action="{{ route('usuarios.destroy', $user->id)}}" method="post">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger" type="submit">Eliminar</button>
              </form>
        </td>
        </tr>
        @endforeach


    </tbody>
  </table>
@endsection
