@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
    <br><br><br><div class="row">
    	<div class="offset-md-3 col-md-6">
    		<div class="card">
    			<div class="card-header text-center">
    				Modificar animal
    			</div>
    			<div class="card-body" style="padding:30px">
					<form method="POST" action="{{route('animales.update',$animal)}}">
					@csrf
					@method('put')
					<div class="form-group">
						<label for="especie">Especie: </label>
						<input type="text" name="especie" id="especie" class="form-control" value="{{$animal->especie}}">
					</div> 
					<div class="form-group">
						<label for="peso">Peso: </label>
						<input type="number" name="peso" id="peso" min="1" class="form-control" value="{{$animal->peso}}">
					</div> 
					<div class="form-group">
						<label for="altura">Altura: </label>
						<input type="number" name="altura" id="altura" min="1" class="form-control" value="{{$animal->altura}}">
					</div>
					<div class="form-group">
						<label for="fechaNacimiento">Fecha nacimiento: </label>
						<input type="date" name="fechaNacimiento" id="fechaNacimiento" class="form-control" value="{{$animal->fechaNacimiento}}">
					</div>
					<div class="form-group">
						<label for="alimentacion">Alimentacion: </label>
						<input type="text" name="alimentacion" id="alimentacion" class="form-control" value="{{$animal->alimentacion}}">             
					</div> 
 					<div class="form-group">                 
 						<label for="descripcion">Descripción: </label>                
 						<textarea name="descripcion" id="descripcion" class="form-control" rows="3">{{$animal->descripcion}}</textarea>
 					</div>
 					<div class="form-group">
 						<label for="imagen">Imagen: </label>
 						<input type="file" name="imagen" id="imagen" value="{{$animal->imagen}}">   
 					</div>
             		<div class="form-group text-center">
             			<button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
             				Modificar animal
             			</button>
             		</div>
             		</form>
             	</div>        
             </div>     
         </div>  
     </div> 
@endsection