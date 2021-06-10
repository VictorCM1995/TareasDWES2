@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
	<br><br><br><div class="row">
		<div class="col-sm-3">
			<img src="{{url($animal->imagen)}}" height="190">
		</div>
		<div class="col-sm-9">
			<h4>{{$animal->especie}} ({{$animal->getEdad()}} años)</h4>
			<h5>Peso:</h5>
			<p>{{$animal->peso}} kg</p>
			<h5>Altura: </h5>
			<p>{{$animal->altura}} cm</p>
			<h5>Descripcion</h5>
			<p>{{$animal->descripcion}}</p>
			<h5>Revisiones: </h5>
			<ul>
			@foreach($animal->revisiones as $revision)
                <li>{{$revision->fecha}}: {{$revision->descripcion}}</li>
            @endforeach
        	</ul>
		</div>
		<button type="button" class="btn btn-warning"><a href="{{route('animales.edit',$animal)}}">Editar</a></button>
		<button type="button" class="btn btn-success"><a href="{{route('revisiones.create',$animal)}}">Añadir revision</a></button>
		<button type="button" class="btn btn-light"><a href="{{route('animales.index')}}">Volver al listado</a></button>
	</div> 
@endsection