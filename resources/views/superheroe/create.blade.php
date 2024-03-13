@extends('layouts.app') 
@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Nuevo Superheroe 
    </div> 
    <div class="card-body"> 
      @if ($errors->any()) 
        <div class="alert alert-danger"> 
          <ul> 
            @foreach ($errors->all() as $error) 
              <li>{{ $error }}</li> 
            @endforeach 
          </ul> 
        </div><br /> 
      @endif 
      <form method="post" action="{{ route('superheroe.store') }}"> 
        @csrf 
        <div class="form-group"> 
          <label for="nombre_heroe">Nombre de Heroe:</label> 
          <input type="text" class="form-control" name="nombre_heroe" /> 
        </div> 
        <div class="form-group"> 
          <label for="nombre_real">Nombre Real:</label> 
          <input type="text" class="form-control" name="nombre_real" /> 
        </div> 
        <div class="form-group"> 
          <label for="foto">URL Foto:</label> 
          <input type="text" class="form-control" name="foto" /> 
        </div> 
        <div class="form-group"> 
          <label for="info">Informacion:</label> 
          <textarea rows="5" columns="5" class="form-control" name="info"></textarea> 
        </div> 
        <button type="submit" class="btn btn-primary">Guardar</button> 
        <a href="{{ route('superheroe.index') }}" class="btn btn-primary">Volver</a> 
      </form> 
    </div> 
  </div> 
@endsection 