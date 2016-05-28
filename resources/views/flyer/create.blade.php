

@extends('layout')

@section('content')
	<h2> Selling Your Home? </h2>

	<hr>

	<div class="row">
		<form action="/flyer" method="POST" role="form" enctype="multipart/form-data" class="col-md-6">
		
		   @include('includes.form')
		   @if (count($errors) > 0)
		   	<div class="alert alert-danger">
		   		<ul>
		   			@foreach ($errors->all() as $error) 
		   				<li>{{ $error }} </li>
		   			@endforeach
		   		</ul>
		   	</div>
		   @endif
		</form>
	</div>
@stop