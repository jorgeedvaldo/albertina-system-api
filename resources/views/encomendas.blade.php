@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @if(isset($isSaved))
            <div class="col-md-8 mb-3">
                <div class="alert alert-success mt-3 mb-3">Pedido Cancelado com sucesso.</div>
            </div>
        @endif
        <div class="col-md-8">
            @foreach($DadosEncomenda as $encomenda)
                <div class="card mb-3">
                    <div class="card-header">
                    De: {{ $encomenda['DataHoraFeita'] }}
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">Este Pedido Contém:</h5>
                        <p class="card-text">| @foreach($encomenda['pedidoprodutos'] as $PedidoProduto) {{$produtoController->getById($PedidoProduto['IdProduto'])[0]['Nome']}} ({{$PedidoProduto['Quantidade']}}) | @endforeach</p>

                        @if(strcmp($encomenda['Estado'], "Cancelado") == 0)
                            <div class="alert alert-danger mt-3 mb-3">Pedido Cancelado.</div>
                        @else
                            <button id="BtnCancelarEncomenda" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" onclick="document.getElementById('EncomendaId').value = '{{$encomenda['Id']}}'">Cancelar Encomenda</button>
                        @endif
                    </div>
                </div>
            @endforeach
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
