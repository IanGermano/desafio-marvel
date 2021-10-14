@extends('layouts.usuario_template')

@section('title', 'cadastro')

@section('content')
<form method="POST" action="/cadastrar">
	@csrf
	<h2 class="fw-bold mb-2 text-uppercase">Desafio Marvel Cadastro</h2>
	<p class="text-white-50 mb-5">Já possui conta? - <a href="/">Login</a></p>

	<div class="form-outline form-white mb-4">
	<label class="form-label" for="text">Nome</label>
	<input name="name" type="text" id="text" class="form-control form-control-lg"/>
	</div>

	<div class="form-outline form-white mb-4">
	<label class="form-label" for="email">E-mail</label>
	<input name="email" type="email" id="email" class="form-control form-control-lg"/>
	</div>

	<div class="form-outline form-white mb-4">
	<label class="form-label" for="password">Senha</label>
	<input name="password" type="password" id="password" class="form-control form-control-lg"/>
	</div>

	<button class="btn btn-outline-light btn-lg px-5" type="submit">Criar conta</button>
</form>
@endsection