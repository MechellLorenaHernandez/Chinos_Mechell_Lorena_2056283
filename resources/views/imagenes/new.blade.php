@extends('layouts.masterpage')

@section('contenido')
    
<form class="form-horizontal" method="post" action="{{ url('imagenes/guardar') }}" enctype="multipart/form-data">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    <legend>Carga de imagenes</legend>
    
    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="filebutton">Imagen a cargar</label>
      <div class="col-md-4">
        <input id="filebutton" name="nombre_archivo" class="input-file" type="file">
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="singlebutton"></label>
      <div class="col-md-4">
        <button id="" name="" class="btn btn-primary">Cargar imagen</button>
      </div>
    </div>
    
    </fieldset>
    </form>

@endsection