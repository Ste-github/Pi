<x-layout titulo="Itens Venda">
   

<div class="pdv-container">

   
    <!-- Resumo da compra -->
  
    <!-- Métodos de pagamento -->
    <div class="pagamento-box">

        <h4>Forma de Pagamento</h4>

        <div class="pagamento-opcoes">
            <label><input type="radio" name="pagamento"> Pix</label>
            <label><input type="radio" name="pagamento"> Dinheiro</label>
            <label><input type="radio" name="pagamento"> Cartão</label>
        </div>

        <div class="pagamento-campos">
            <div class="campo-pagamento">
                <label>Valor Recebido</label>
                <input type="text" placeholder="R$0,00">
            </div>

            <div class="campo-pagamento">
                <label>Troco</label>
                <input type="text" placeholder="R$0,00" readonly>
            </div>
        </div>

    </div>

    <!-- Botões -->
    <div class="pdv-botoes">
        <a href="vendas" class="pdv-btn cancelar">Voltar</a>
        <button class="pdv-btn finalizar">Confirmar Pagamento</button>
    </div>

</div>


</x-layout>