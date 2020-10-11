@extends('layouts.app')

@section('content')
<section class="hero-wrap hero-wrap-2 mb-5" style="background-image: url('images/bg_4.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center">
        <div class="col-md-9 ftco-animate text-center">
          <h1 class="mb-2 bread">Encomendas</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="{{url('/')}}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Encomendas <i class="ion-ios-arrow-forward"></i></span></p>
        </div>
      </div>
    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <ul class="nav flex-column">
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/pedidos')}}">Todas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/pedidos/estado/2')}}">Não Atendidos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{url('/pedidos/estado/3')}}">Em Atendimento</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pedidos/estado/4')}}">Entregue</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/pedidos/estado/1')}}">Cancelados</a>
                </li>
              </ul>
        </div>


        <div class="col-md-8">
            @if(isset($isSaved))
                <div class="alert alert-success mt-3 mb-3">Pedido Cancelado com sucesso.</div>
            @endif
            @foreach($DadosEncomenda as $encomenda)
                <div class="card mb-3">
                    <div class="card-header">
                    De: {{ date('d/M/Y H:i:s',  strtotime($encomenda['DataHoraFeita'])) }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Este Pedido Contém:</h5>
                        <p class="card-text">| @foreach($encomenda['pedidoprodutos'] as $PedidoProduto) {{$produtoController->getById($PedidoProduto['IdProduto'])[0]['Nome']}} ({{$PedidoProduto['Quantidade']}}) | @endforeach</p>
                        <h4>Total: {{$encomenda['Total']}} KZ</h4>
                        @if(strcmp($encomenda['Estado'], "Cancelado") == 0)
                            <div class="alert alert-danger mt-3 mb-3">Pedido Cancelado.</div>
                        @elseif(strcmp($encomenda['Estado'], "Não Atendido") == 0)
                            <div class="alert mt-3 mb-3">Pedido Não Atendido no Momento.</div>
                            <button id="BtnCancelarEncomenda" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('EncomendaId').value = '{{$encomenda['Id']}}'">Cancelar Encomenda</button>
                        @elseif(strcmp($encomenda['Estado'], "Em Atendimento") == 0)
                         <div class="alert alert-warning mt-3 mb-3">Pedido Em Atendimento.</div>
                         <button id="BtnCancelarEncomenda" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('EncomendaId').value = '{{$encomenda['Id']}}'">Cancelar Encomenda</button>
                        @elseif(strcmp($encomenda['Estado'], "Entregue") == 0)
                          <div class="alert alert-success mt-3 mb-3">Este Pedido foi Entregue</div>
                        @endif
                    </div>
                </div>
            @endforeach

            @if( count($DadosEncomenda) == 0)
                <div class="col-md-12 m-5 p-5">
                    <h1>Não Existe Nenhuma até Agora...</h1>
                </div>
            @endif
        </div>
    </div>
</div>
  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Cancelar Encomenda</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Tem a certeza que deseja cancelar a encomenda?
        </div>
        <div class="modal-footer">
          <form method="POST" action="{{ route('pedido-cancelar') }}">
              @csrf
              <input type="hidden" name="EncomendaId" id="EncomendaId" value="">
              <input id="BtnConfirmar" type="submit" class="btn btn-primary" value="Confirmar"/>
          </form>

          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        </div>
      </div>
    </div>
  </div>
@endsection
