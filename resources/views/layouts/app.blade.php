<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Albertina & Filhos') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light @yield('nav-home')ftco-navbar-light-2" id="ftco-navbar">
            <div class="container">
              <a class="navbar-brand" href="{{url('/')}}">{{ config('app.name', 'Albertina & Filhos') }}</a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>

              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a href="{{url('/')}}" class="nav-link"><i class="icon-home"></i></a></li>
                    <li class="nav-item"><a href="{{url('/sobre')}}" class="nav-link">Sobre</a></li>
                    <li class="nav-item"><a href="{{url('/produtos')}}" class="nav-link">Produtos</a></li>
                    <li class="nav-item">
                         <a href="{{url('/carrinho')}}" class="nav-link"><i class="icon-shopping-cart"></i> Pedidos Online</a>
                    </li>
                      @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">Login</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Registar</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="#myorders" class="dropdown-item">Minhas Encomendas</a>
                                <a href="#edit" class="dropdown-item">Editar Perfil</a>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </div>
          </nav>

        <main>
            @yield('content')
        </main>

        <footer class="ftco-footer ftco-bg-dark ftco-section mt-5">
            <div class="container">
                <div class="row mb-5">
                    <div class="col-md-6">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Albertina & Filhos - Pastelaria e Fastfood</h2>
                            <p>A “Albertina & Filhos, Pastelaria e Fastfood” teve a sua abertura oficialmente nos meados de 2014, está situada
                                nos combatentes, próximo à Escola 147.</p>
                            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="ftco-footer-widget mb-4">
                            <h2 class="ftco-heading-2">Horários</h2>
                            <ul class="list-unstyled open-hours">
                                <li class="d-flex"><span>Segunda-feira</span><span>8:00 - 00:00</span></li>
                                <li class="d-flex"><span>Terça-feira</span><span>8:00 - 00:00</span></li>
                                <li class="d-flex"><span>Quarta-feira</span><span>8:00 - 00:00</span></li>
                                <li class="d-flex"><span>Quinta-feira</span><span>8:00 - 00:00</span></li>
                                <li class="d-flex"><span>Sexta-feira</span><span>8:00 - 02:00</span></li>
                                <li class="d-flex"><span>Sábado</span><span>9:00 - 02:00</span></li>
                                <li class="d-flex"><span>Domingo</span><span>10:00 - 02:00</span></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-12 text-center">
                        <p>
                            Copyright &copy; 2020 Todos os direitos reservados | Desenhado por <a href="https://facebook.com/edy96jorge" target="_blank">Edivaldo Jorge</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
