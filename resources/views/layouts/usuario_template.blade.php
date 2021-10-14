<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desafio Marvel - @yield('title')</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <style type="text/css">
            body {
              background: url({{ asset('imgs/bkg-img.jpg') }}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
            }
            a {
                color: red;
            }
            a:hover {
                color: white;
            }
        </style>
    </head>
    <body>
		<div class="container py-5 h-100">
            <p style="color:red;">Desenvolvido por Ian Germano</p>
			<div class="row d-flex justify-content-center align-items-center h-100">
				<div class="col-12 col-md-8 col-lg-6 col-xl-5">
					<div class="card bg-dark text-white" style="border-radius: 1rem;">
						<div class="card-body p-5 text-center">

							<div class="mb-md-5 mt-md-4 pb-5">
								@yield('content')
							</div>

						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>