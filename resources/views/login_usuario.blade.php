@extends('layouts.usuario_template')

@section('title', 'login')

@section('content')
<form method="POST" action="/logar">
	@csrf
	<h2 class="fw-bold mb-2 text-uppercase">Desafio Marvel Login</h2>
	<p class="text-white-50 mb-5">Não possui conta? - <a href="/cadastro">Criar Conta</a></p>

	<div class="form-outline form-white mb-4">
	<label class="form-label" for="email">E-mail</label>
	<input name="email" type="email" id="email" class="form-control form-control-lg"/>
	</div>

	<div class="form-outline form-white mb-4">
	<label class="form-label" for="password">Senha</label>
	<input name="password" type="password" id="password" class="form-control form-control-lg"/>
	</div>

	<button class="btn btn-outline-light btn-lg px-5" type="submit">Logar</button>
</form>
@endsection