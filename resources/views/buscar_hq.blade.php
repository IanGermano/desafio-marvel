@extends('layouts.core')

@section('title', 'Buscar HQ')

@section('content')
<form method="POST" action="/comics/src">
	@csrf
	<div class="container py-5">
	  <h4>Buscar HQ - Título ou Id, preencha só um campo</h4>
	  <hr>
	  <div class="row mb-4">
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="title">Título da HQ</label>
	    	<input name="title" type="text" id="title" class="form-control"/>    	
	      </div>
	    </div>
	    <div class="col">
	      <div class="form-outline">
	      	<label class="form-label" for="id">Id</label>
	        <input name="id" type="number" id="id" class="form-control"/>
	      </div>
	    </div>
	  </div>

	  <button type="submit" class="btn btn-light btn-block mb-4">Buscar HQ</button>
	</div>
</form>
@endsection