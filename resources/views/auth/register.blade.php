@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Registar</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Registar <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>

<div class="container">
    <form method="POST" action="{{ route('register') }}">
        @csrf
    <div class="row">
        <div class="col-md-12">
            <h1>Cadastre-se como cliene</h1>
        </div>
        <div class="col-md-7">
            <div class="card">
                <div class="card-header">Dados Pessoais</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="Sexo" class="col-md-4 col-form-label text-md-right">Sexo *</label>
                            <div class="col-md-6">
                                <select name="Sexo" id="Sexo" class="form-control">
                                    <option value="Mascuino">Mascuino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="NumeroBilhete" class="col-md-4 col-form-label text-md-right">Número do Bilhete *</label>

                            <div class="col-md-6">
                                <input id="NumeroBilhete" type="text" class="form-control" name="NumeroBilhete" value="{{ old('NumeroBilhete') }}" required autocomplete="NumeroBilhete" autofocus>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="Telefone1" class="col-md-4 col-form-label text-md-right">Telefone Principal *</label>

                            <div class="col-md-6">
                                <input id="Telefone1" type="text" class="form-control" name="Telefone1" value="{{ old('Telefone1') }}" required autocomplete="Telefone1" autofocus>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="Telefone2" class="col-md-4 col-form-label text-md-right">Telefone Alternativo</label>

                            <div class="col-md-6">
                                <input id="Telefone2" type="number" class="form-control" name="Telefone2" value="{{ old('Telefone2') }}">
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-5">
            <div class="card">
                <div class="card-header">
                    Dados de Autenticação
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <label for="username" class="col-md-4 col-form-label text-md-right">Username *</label>

                        <div class="col-md-6">
                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="username" autofocus>

                            @error('username')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">Senha *</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirmar *</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 mt-3">
            <div class="card">
                <div class="card-header">
                    Dados da Morada
                </div>
                <div class="card-body">
                    <div class="form-goup row mb-3">
                        <label for="Provincia" class="col-md-4 col-form-label text-md-right">Província</label>

                        <div class="col-md-6">
                            <input id="Provincia" type="text" class="form-control" name="Provincia" value="{{ old('Provincia') }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Municipio" class="col-md-4 col-form-label text-md-right">Município</label>

                        <div class="col-md-6">
                            <input id="Municipio" type="text" class="form-control" name="Municipio" value="{{ old('Municipio') }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Bairro" class="col-md-4 col-form-label text-md-right">Bairro</label>

                        <div class="col-md-6">
                            <input id="Bairro" type="text" class="form-control" name="Bairro" value="{{ old('Bairro') }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Rua" class="col-md-4 col-form-label text-md-right">Rua</label>

                        <div class="col-md-6">
                            <input id="Rua" type="text" class="form-control" name="Rua" value="{{ old('Rua') }}">
                        </div>
                    </div>
                    <div class="form-goup row">
                        <label for="NumeroCasa" class="col-md-4 col-form-label text-md-right">Número da Casa</label>

                        <div class="col-md-6">
                            <input id="NumeroCasa" type="NumeroCasa" class="form-control" name="NumeroCasa" value="{{ old('NumeroCasa') }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="form-group row mt-3">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary btn-block btn-bg">
                    Cadastrar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
