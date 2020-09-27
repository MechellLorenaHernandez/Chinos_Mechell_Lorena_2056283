<!--Heredar masterpage-->
@extends('layouts.masterpage')

<!--Definiendo el contenido-->
@section('contenido')
<form class="form-horizontal" method="POST" 
        action="{{   url('media-types/store')   }}"  
        enctype="multipart/form-data">
    @csrf
    <fieldset>
    
    <!-- Form Name -->
    <legend>Upload media types with CSV File:</legend>
    
    <!-- File Button --> 
    <div class="form-group">
      <label class="col-md-4 control-label" for="media-types">File:</label>
      <div class="col-md-4">
        <input id="media-types" name="media-types" class="input-file" type="file">
      <strong class="text-danger">{{    $errors->first('media-types')    }}</strong>
      </div>
    </div>
    
    <!-- Button -->
    <div class="form-group">
      <label class="col-md-4 control-label" for="boton"></label>
      <div class="col-md-4">
        <button type="submit" id="" name="" class="btn btn-primary">Enviar</button>
      </div>
    </div>
    
    </fieldset>
    <!-- MENSAJE DE EXITO -->
    @if (session('exito'))
        <p class="alert-success">{{session('exito')}}</p>
    @endif
    @if (session('repetidos'))
        @foreach ( session('repetidos') as $mediarepetido )
            <p class="alert-warning">{{ $mediarepetido }}</p>
        @endforeach
    @endif
    </form>
    @endsection