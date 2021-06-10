@extends('layouts.master')
@section('titulo')
    Zoologico
@endsection
@section('contenido')
    <br><br><br><div class="row">
    	@foreach($arrayAnimales as $animal)
    		<div class="col-xs-12 col-sm-6 col-md-4 " style="border:1px solid black">
    		    <a href="{{route('animales.show',$animal)}}">
    				<img src="{{$animal->imagen}}" style="height:200px"/>
    				<h4 style="min-height:45px;margin:5px 0 10px 0">
    					{{$animal->especie}}
    				</h4>
                    
    			</a>
                <ul>
                    <li>Peso: {{$animal->peso}} kg</li>
                    <li>Altura: {{$animal->altura}} cm</li>
                    <li>Edad: {{$animal->getEdad()}} años</li>
                    
                    <li>Alimentacion: {{$animal->alimentacion}}</li>
                    <li>Revisiones: {{count($animal->revisiones)}}</li>
                    @foreach($animal->cuidadores as $cuidador)
                        <li><b>Cuidador</b>: <a href="{{route('cuidadores.show',$cuidador)}}">{{$cuidador->nombre}}</a></li>
                    @endforeach
                </ul>
    		</div>
    	@endforeach
    </div>
@endsection