@extends('template')

@section('head')
	<title>LogIn / Imprimer</title>
@stop

@section('content')
	<h1>Imprimer votre CV</h1>
	
	<a href="{{ route('print') }}" >Imprimer</a>
		
	<div id="print-area">
		<div id="content">
			<table>
				<?php
				$input = Request::all();
				foreach($input as $key => $value)
					{
					echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';
					}
				?>
			</table>
		</div>
	</div>
	
@stop