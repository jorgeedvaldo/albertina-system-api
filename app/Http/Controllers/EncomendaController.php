<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Api\ClienteController;
use App\Http\Controllers\Api\PedidoController;
use App\Http\Controllers\Api\ProdutoController;
use App\Models\Pedido;
use App\Models\Sincronizacao;

class EncomendaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function CancelarEncomenda(Request $request)
    {
        Pedido::where('Id', $request->EncomendaId)
        ->update([
            'Estado' => 'Cancelado'
            ]);

        Sincronizacao::create([
            'Id'=>  $request->EncomendaId,
            'Tabela' => 'Pedido',
            'Accao' => 'UPDATE',
        ]);

        $isSaved=true;

        $clienteController = new ClienteController();
        $pedidoController = new PedidoController();
        $produtoController = new ProdutoController();

        $ClienteActual = $clienteController->getByNomeUsuario(auth()->user()->username)[0];
        $DadosEncomenda = $pedidoController->getByIdCliente($ClienteActual['Id']);
        return view('encomendas', compact('DadosEncomenda', 'produtoController', 'isSaved'));
    }

    public function index()
    {
        $clienteController = new ClienteController();
        $pedidoController = new PedidoController();
        $produtoController = new ProdutoController();

        $ClienteActual = $clienteController->getByNomeUsuario(auth()->user()->username)[0];
        $DadosEncomenda = $pedidoController->getByIdCliente($ClienteActual['Id']);
        return view('encomendas', compact('DadosEncomenda', 'produtoController'));
    }

    public function getByEstado($estado)
    {
        $clienteController = new ClienteController();
        $pedidoController = new PedidoController();
        $produtoController = new ProdutoController();
        $EstadoActual = $estado;

        $ClienteActual = $clienteController->getByNomeUsuario(auth()->user()->username)[0];

        if($estado == 1)
        {
            $DadosEncomenda = Pedido::with('pedidoprodutos')
                            ->where([
                                ['IdCliente', '=', $ClienteActual['Id']],
                                ['Estado', '=', 'Cancelado'],
                            ])
                            ->orderByRaw('Id DESC')
                            ->get();
            return view('encomendas', compact('DadosEncomenda', 'produtoController', 'EstadoActual'));
        }
        else if($estado == 2)
        {
            $DadosEncomenda = Pedido::with('pedidoprodutos')
                            ->where([
                                ['IdCliente', '=', $ClienteActual['Id']],
                                ['Estado', '=', 'Não Atendido'],
                            ])
                            ->orderByRaw('Id DESC')
                            ->get();
            return view('encomendas', compact('DadosEncomenda', 'produtoController', 'EstadoActual'));
        }
        else if($estado == 3)
        {
            $DadosEncomenda = Pedido::with('pedidoprodutos')
                            ->where([
                                ['IdCliente', '=', $ClienteActual['Id']],
                                ['Estado', '=', 'Em Atendimento'],
                            ])
                            ->orderByRaw('Id DESC')
                            ->get();
            return view('encomendas', compact('DadosEncomenda', 'produtoController', 'EstadoActual'));
        }
        else if($estado == 4)
        {
            $DadosEncomenda = Pedido::with('pedidoprodutos')
                            ->where([
                                ['IdCliente', '=', $ClienteActual['Id']],
                                ['Estado', '=', 'Entregue'],
                            ])
                            ->orderByRaw('Id DESC')
                            ->get();
            return view('encomendas', compact('DadosEncomenda', 'produtoController', 'EstadoActual'));
        }
        else
        {
            return redirect()->route('pedidos');
        }
    }
}
