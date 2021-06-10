@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
	<br><br><br>
		<div class="col-sm-9">
        <h1>{{$titulacion->nombre}}</h1>
        <ul>
        @foreach($titulacion->cuidadores as $cuidador)
        	<li><a href="{{route('cuidadores.show',$cuidador)}}">{{$cuidador->nombre}}</li>
        @endforeach
        </ul>
		</div>
@endsection