<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Desafio Marvel - @yield('title')</title>
        <link rel="stylesheet" href={{ asset('css/bootstrap.min.css') }}>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.0/font/bootstrap-icons.css">
        <style type="text/css">
            body {
              background: url({{ asset('imgs/bkg-img.jpg') }}) no-repeat center center fixed;
                -webkit-background-size: cover;
                -moz-background-size: cover;
                background-size: cover;
                -o-background-size: cover;
            }
            li.nav-item {
                color: red;
            }
            a {
                color: red;
            }
            a:hover {
                color: white;
            }
            a.nav-link {
                color: red;
            }
            a.nav-link:hover {
                color: black;
            }
            hr { 
                background-color: red; 
                height: 1px; 
            }
        </style>
    </head>
    <body>
        <div class="container py-5">
            <p style="color:red;">Desenvolvido por Ian Germano</p>
            <div class="row">

                <div class="col-4 col-md-3 col-lg-2 col-xl-2 text-center bg-white rounded">
                    <ul class="nav flex-column">
                      <li class="nav-item">
                        <br>
                        <h2>Menu</h2>
                      </li>
                      <hr>
                      <li class="nav-item">
                        <a class="nav-link" href="/comics">HQs</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/comics/adicionar">Adicionar HQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/comics/buscar">Buscar HQ</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/logout">Deslogar</a>
                      </li>
                    </ul>
                </div>
                

                <div class="col-8 col-md-9 col-lg-10 col-xl-10 bg-dark text-white rounded">
                    @yield('content')
                </div>

            </div>

        </div>
      
    </body>
</html>
