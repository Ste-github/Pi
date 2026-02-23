<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\produtosModel;
use App\Models\vendaModel;
use App\Models\itensvendaModel;

class vendasController extends Controller
{
    public function index()
    {
        $itens = session()->get('venda', []); // 🔥 corrigido

        return view('paginas.vendas', compact('itens'));
    }

    public function adicionarItem(Request $request)
    {
        $request->validate([
            'produto_codigo' => 'required',
            'quantidade' => 'required|integer|min:1',
        ]);

        $produto = produtosModel::where('nomeProduto', $request->produto_codigo)
                    ->orWhere('id', $request->produto_codigo)
                    ->first();

        if (!$produto) {
            return back()->with('erro', 'Produto não encontrado!');
        }

        $tipoVenda = $request->input('tipo_venda', 'publico');

        $valorUnitario = ($tipoVenda == 'funcionarios' && $produto->valorDesconto)
                         ? $produto->valorDesconto
                         : $produto->valor;

        $valorUnitario = floatval($valorUnitario);
        $quantidade = intval($request->quantidade);

        $item = [
            'produto_id' => $produto->id,
            'nomeProduto' => $produto->nomeProduto,
            'quantidade' => $quantidade,
            'valor_unitario' => $valorUnitario,
            'subtotal' => $valorUnitario * $quantidade
        ];

        $venda = session()->get('venda', []);
        $venda[] = $item;

        session()->put('venda', $venda);

        return back()->with('sucesso', 'Item adicionado!');
    }

    public function removerItem($index)
    {
        $venda = session()->get('venda', []);

        if (isset($venda[$index])) {
            unset($venda[$index]);
            session()->put('venda', array_values($venda));
        }

        return back();
    }

    public function finalizar(Request $request)
{
    $itensVenda = session()->get('venda', []);

    if (empty($itensVenda)) {
        return back()->with('erro', 'Nenhum item adicionado!');
    }

    $subtotal = collect($itensVenda)->sum('subtotal');
    $desconto = floatval($request->input('desconto', 0));

    $total = $subtotal - $desconto;$formaPagamento = $request->input('forma_pagamento');
$valorRecebido = floatval($request->input('valor_recebido', 0));

    $venda = vendaModel::create([
        'funcionario_id' => auth()->id(),
        'subtotal' => $subtotal,
        'desconto' => $desconto,
        'total' => $total,
        'forma_pagamento' => $formaPagamento,
    ]);

    foreach ($itensVenda as $item) {
        itensvendaModel::create([
            'venda_id' => $venda->id,
            'produto_id' => $item['produto_id'],
            'quantidade' => $item['quantidade'],
            'preco_unitario' => $item['valor_unitario'],
            'subtotal' => $item['subtotal'],
        ]);
    }

    session()->forget('venda');

    return redirect()->route('vendas.index')
        ->with('sucesso', 'Venda concluída com sucesso!');
}
}