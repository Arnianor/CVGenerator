@extends('template')

@section('head')
	<title>CVGenerator</title>
@stop

@section('content')

	<span class='welcome'>
		<h1>CVGenerator vous souhaite la bienvenue<br/>
		Crééz votre CV en 5 minutes<h1/>
		<a href="{{ URL::to('formulaire/forms')}}" > C'est parti</a>
	</span>
	
@stop