<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Albertina & Filhos') }} - Loja</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <!--example-component></!--example-component-->
    </div>
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
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/all.js') }}"></script>
</body>
</html>
