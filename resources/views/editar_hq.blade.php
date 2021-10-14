@extends('layouts.core')

@section('title', 'Editar HQ')

@section('content')
<form method="POST" action="/comics/update/{{$comic->id}}">
	@csrf
	<div class="container py-5">
	  <h4>Adicionar HQ</h4>
	  <hr>
	  <div class="row mb-4">
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="id">Id</label>
	        <input name="id" type="number" id="id" value="{{$comic->id}}" class="form-control"/>
	      </div>
	    </div>
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="page_count">Número de Páginas</label>
	        <input name="page_count" type="number" id="page_count" value="{{$comic->page_count}}" class="form-control"/>
	      </div>
	    </div>
	  </div>

	  <div class="form-outline mb-4">
	    <label class="form-label" for="title">Título da HQ</label>
	    <input name="title" type="text" id="title" value="{{$comic->title}}" class="form-control"/>
	  </div>

	  <div class="form-outline mb-4">
	    <label class="form-label" for="image">Url da imagem da HQ</label>
	    <input name="image" type="text" id="image" value="{{$comic->image}}" class="form-control"/>
	  </div>

	  <div class="form-outline mb-4">
	    <label class="form-label" for="writer">Escritor(es)</label>
	    <input name="writer" type="text" id="writer" value="{{$comic->writer}}" class="form-control"/>
	  </div>

	  <div class="row mb-4">
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="price">Preço</label>
	        <input name="price" type="number" id="price" step=".01" value="{{$comic->price}}" class="form-control"/>
	      </div>
	    </div>
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="date">Data da publicação</label>
	        <input name="date" type="date" id="date" value="{{$comic->date}}" class="form-control"/>
	      </div>
	    </div>
	  </div>

	  <button type="submit" class="btn btn-light btn-block mb-4">Atualizar HQ</button>
	</div>
</form>
@endsection