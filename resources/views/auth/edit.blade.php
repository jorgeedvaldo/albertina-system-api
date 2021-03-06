@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Editar</h1>
          <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Editar <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>

<div class="container">
    <form method="POST" action="{{ route('edit-save') }}">
        @csrf
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Editar meus dados</h1>
        </div>
        @if(isset($isSaved))
            <div class="col-md-8">
                <div class="alert alert-success mt-3 mb-3">Dados alterados com sucesso.</div>
            </div>
        @endif
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dados Pessoais</div>

                <div class="card-body">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nome *</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $DadosCliente['Nome'] }}" required autocomplete="name" autofocus>

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
                                    <option value="Masculino">Masculino</option>
                                    <option value="Feminino">Feminino</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="NumeroBilhete" class="col-md-4 col-form-label text-md-right">Número do Bilhete *</label>

                            <div class="col-md-6">
                                <input id="NumeroBilhete" type="text" class="form-control" name="NumeroBilhete" value="{{ $DadosCliente['NumeroBilhete'] }}" required autocomplete="NumeroBilhete" autofocus>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="Telefone1" class="col-md-4 col-form-label text-md-right">Telefone Principal *</label>

                            <div class="col-md-6">
                                <input id="Telefone1" type="text" class="form-control" name="Telefone1" value="{{ $DadosCliente['Telefone1'] }}" required autocomplete="Telefone1" autofocus>
                            </div>
                        </div>

                        <div class="form-goup row mb-3">
                            <label for="Telefone2" class="col-md-4 col-form-label text-md-right">Telefone Alternativo</label>

                            <div class="col-md-6">
                                <input id="Telefone2" type="number" class="form-control" name="Telefone2" value="{{ $DadosCliente['Telefone2'] }}">
                            </div>
                        </div>
                </div>
            </div>
        </div>

        <div class="col-md-8 mt-3">
            <div class="card">
                <div class="card-header">
                    Dados da Morada
                </div>
                <div class="card-body">
                    <div class="form-goup row mb-3">
                        <label for="Provincia" class="col-md-4 col-form-label text-md-right">Província</label>

                        <div class="col-md-6">
                            <input id="Provincia" type="text" class="form-control" name="Provincia" value="{{ $DadosCliente['morada']['Provincia'] }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Municipio" class="col-md-4 col-form-label text-md-right">Município</label>

                        <div class="col-md-6">
                            <input id="Municipio" type="text" class="form-control" name="Municipio" value="{{ $DadosCliente['morada']['Municipio'] }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Bairro" class="col-md-4 col-form-label text-md-right">Bairro</label>

                        <div class="col-md-6">
                            <input id="Bairro" type="text" class="form-control" name="Bairro" value="{{ $DadosCliente['morada']['Bairro'] }}">
                        </div>
                    </div>
                    <div class="form-goup row mb-3">
                        <label for="Rua" class="col-md-4 col-form-label text-md-right">Rua</label>

                        <div class="col-md-6">
                            <input id="Rua" type="text" class="form-control" name="Rua" value="{{ $DadosCliente['morada']['Rua'] }}">
                        </div>
                    </div>
                    <div class="form-goup row">
                        <label for="NumeroCasa" class="col-md-4 col-form-label text-md-right">Número da Casa</label>

                        <div class="col-md-6">
                            <input id="NumeroCasa" type="NumeroCasa" class="form-control" name="NumeroCasa" value="{{ $DadosCliente['morada']['NumeroCasa'] }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        <div class="form-group row justify-content-center mt-3">
            <div class="col-md-8">
                <button type="submit" class="btn btn-primary btn-block btn-bg">
                    Guardar
                </button>
            </div>
        </div>
    </form>
</div>
@endsection
