extends('layouts.app') 

@section('content') 
  <style> 
    .uper { 
      margin-top: 40px; 
    } 

  </style> 
  <div class="card uper"> 
    <div class="card-header"> 
      Ver Superheroe 
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

      <div class="form-group"> 
        <label for="nombre_heroe">Nombre de Heroe:</label> 
        <input type="text" class="form-control" name="nombre_heroe" value="{{ $superheroe->nombre_heroe }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="nombre_real">Nombre Real:</label> 
        <input type="text" class="form-control" name="nombre_real" value="{{ $superheroe->nombre_real }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="foto">URL Foto:</label> 
        <input type="text" class="form-control" name="foto" value="{{ $superheroe->foto }}" disabled /> 
      </div> 
      <div class="form-group"> 
        <label for="info">Informacion :</label> 
        <textarea rows="5" columns="5" class="form-control" name="info" disabled>{{ $superheroe->info }}</textarea> 
      </div> 
      <a href="{{ route('superheroe.edit', $superheroe->id) }}" class="btn btn-primary">Editar</a> 
      <a href="{{ route('superheroe.index') }}" class="btn btn-primary">Indice</a> 
    </div> 
  </div> 
@endsection 