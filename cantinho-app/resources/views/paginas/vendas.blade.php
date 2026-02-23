<x-layout titulo="TELA DE VENDAS">
  <link rel="stylesheet" href="/css/vendas.css">
<div class="container">

   

    @if(session('erro'))
        <div class="alert alert-danger">{{ session('erro') }}</div>
    @endif

    @if(session('sucesso'))
        <div class="alert alert-success">{{ session('sucesso') }}</div>
    @endif

    <form action="{{ route('vendas.addItem') }}" method="POST">
        @csrf
        <div>
            <label>Nome ou Código do Produto</label>
            <input type="text" name="produto_codigo" required>

            <label>Quantidade</label>
            <input type="number" name="quantidade" value="1" min="1">

            <label>Tipo de Venda</label>
            <select name="tipo_venda">
                <option value="publico">Público</option>
                <option value="funcionarios">Funcionários Besni</option>
            </select>

            <button type="submit">Adicionar</button>
        </div>
    </form>

    <table border="1" width="100%">
        <thead>
            <tr>
                <th>Item</th>
                <th>Produto</th>
                <th>Quantidade</th>
                <th>Valor Unit.</th>
                <th>Total</th>
                <th>Excluir</th>
            </tr>
        </thead>
        <tbody>
            @forelse($itens as $index => $item)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $item['nomeProduto'] }}</td>
                    <td>{{ $item['quantidade'] }}</td>
                    <td>R$ {{ number_format($item['valor_unitario'],2,',','.') }}</td>
                    <td>R$ {{ number_format($item['subtotal'],2,',','.') }}</td>
                    <td>
                        <form method="POST" action="{{ route('vendas.removeItem', $index) }}">
                            @csrf
                            <button type="submit">🗑</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Nenhum item adicionado</td>
                </tr>
            @endforelse
        </tbody>
    </table>
    
    @php
        $subtotal = collect($itens)->sum('subtotal');
    @endphp

    <div>
        <strong>Subtotal: R$ {{ number_format($subtotal,2,',','.') }}</strong>
    </div>

    <form action="{{ route('vendas.finalizar') }}" method="POST">
        @csrf <br><br><br><br>
        <div class="pagamento-box">

    <div class="pagamento-grid">

        <div>
            <label>Forma de Pagamento</label>
            <select name="forma_pagamento" required>
                <option value="">Selecione</option>
                <option value="credito">Crédito</option>
                <option value="debito">Débito</option>
                <option value="pix">Pix</option>
                <option value="dinheiro">Dinheiro</option>
            </select>
        </div>

        <div>
            <label>Valor Recebido</label>
            <input type="number" step="0.01" name="valor_recebido">
        </div>

        <div>
            <label>Desconto</label>
            <input type="number" step="0.01" name="desconto">
        </div>

    </div>
        <button type="submit">Finalizar Venda</button>
    </form>
        <div class="area-botoes">
            <a class="btn-voltar" href="gerenciar">
               <i class="bi bi-arrow-left"></i> Voltar
            </a>
        </div>
</div>


    
</div>
</x-layout>