@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
    <br><br><br><div class="row">
    	<div class="offset-md-3 col-md-6">
    		<div class="card">
    			<div class="card-header text-center">
    				Crear una nueva revision para <strong>{{$animal->especie}}</strong>
    			</div>
    			<div class="card-body" style="padding:30px">
					<form method="POST" action="{{route('revisiones.store', $animal)}}">
					@csrf
					<div class="form-group">
						<label for="fecha">Fecha: </label>
						<input type="date" name="fecha" id="fecha" class="form-control" required>
					</div>
 					<div class="form-group">                
 						<label for="descripcion">Descripción: </label>          
 						<textarea name="descripcion" id="descripcion" class="form-control" rows="3"></textarea>
 					</div>
             		<div class="form-group text-center">
             			<button type="submit" class="btn btn-success" style="padding:8px 100px;margin-top:25px;">
             				Añadir revision
             			</button>
             		</div>
             		</form>
             	</div>        
             </div>     
         </div>  
     </div> 
@endsection