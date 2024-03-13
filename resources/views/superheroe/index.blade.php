@extends('layouts.app') 
@section('content') 
  <style> 
    .margin { 
      margin-top: 40px; 
    } 
  </style> 
  <div class="margin"> 
    @if (session()->get('success')) 
      <div class="alert alert-success"> 
        {{ session()->get('success') }} 
      </div><br /> 
    @endif 
    <div class="row"> 
      <a class="btn btn-primary" href="{{ route('superheroe.create') }}">Agregar</a> 
    </div> 

    <table class="table table-striped"> 
      <thead> 
        <tr> 
          <th>Id</th> 
          <th>Nombre de Heroe</th> 
          <th>Nombre Real</th> 
          <th>URL Foto</th> 
          <th>Informacion</th> 
          <th width="80px"></th> 
          <th width="80px"></th> 
        </tr> 
      </thead> 
      <tbody> 
        @foreach ($superheroes as $superheroe) 
          <tr> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->id }}</a></td> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->nombre_heroe }}</a></td> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->nombre_real }}</a></td>
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->foto }}</a></td> 
            <td><a href="{{ route('superheroe.show', $superheroe->id) }}">{{ $superheroe->info }}</a></td>  
            <td><a href="{{ route('superheroe.edit', $superheroe->id) }}" class="btn btn-primary">Edit</a></td> 
            <td> 
              <form action="{{ route('superheroe.destroy', $superheroe->id) }}" method="post"> 
                @csrf 
                @method('DELETE') 
                <button class="btn btn-danger" type="submit">Eliminar</button> 
              </form> 
            </td> 
          </tr> 
        @endforeach 
      </tbody> 
    </table> 
  <div> 
@endsection 