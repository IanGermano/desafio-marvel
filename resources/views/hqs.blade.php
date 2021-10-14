@extends('layouts.core')

@section('title', 'HQs')

@section('content')
<div class="container py-5 text-white">
	<h4>Bem vindo {{Auth::user()->name}}!</h4>
	<hr>
	<h4>HQs da última semana</h4>
	<hr>
	@foreach($comics as $comic)
	<div class="row">
	
		<div class="col-4">
			<img src="{{$comic->image}}" class="img-thumbnail">
		</div>

		<div class="col-8">

			<h5>{{$comic->title}}</h5>
			<br>
			<div class="row">
				<div class="col">
					<strong>Id:</strong><br>
					{{$comic->id}}
				</div>

				<div class="col">
					<strong>Número de Páginas:</strong><br>
					{{$comic->page_count}}
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<strong>Escritor:</strong><br>
					{{$comic->writer}}
				</div>

				<div class="col">
					<strong>Data:</strong><br>
					{{$comic->date}}
				</div>
			</div>
			<br>
			<div class="row">
				<div class="col">
					<strong>Preço:</strong><br>
					${{$comic->price}}
				</div>

				<div class="col">
					<strong>Ações: Editar / Deletar</strong><br>
					<a href="/comics/editar/{{$comic->id}}"><i class="bi bi-pencil"></i></a>&nbsp&nbsp&nbsp&nbsp
					<a href="/comics/deletar/{{$comic->id}}"><i class="bi bi-x-square"></i></a>
				</div>
			</div>

		</div>
	</div>
	<br>
	<hr>
	<br>
	@endforeach

</div>
@endsection