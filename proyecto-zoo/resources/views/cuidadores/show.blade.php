@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
	<br><br><br>
		<div class="col-sm-9">
        <h1>{{$cuidador->nombre}}</h1>
        <ul>
        @foreach($cuidador->titulaciones() as $titulacion)
        	<li><a href="{{route('titulaciones.show',$titulacion)}}">{{$titulacion->nombre}}</a></li>
        @endforeach
        </ul>
		</div>
@endsection