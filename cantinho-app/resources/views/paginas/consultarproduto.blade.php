<x-layout titulo="Consultar Produtos">
<div class="consultar-container">

    

    <input type="text" placeholder="Digite o nome do produto..." class="input-busca">

    <table class="tabela-clientes">
        <thead>
            <tr>
                 <th>Nome</th>
                <th>Valor</th>
                <th>Valor com Desconto</th>
                <th>Código</th>
                <th>Em Estoque</th>
                
            </tr>
        </thead>
        <tbody>
            <tr>
               <td>Coxinha</td>
                <td>R$9,90</td>
                <td>R$7,90</td>
                <td>1</td>
                <td>15</td>
              
            </tr>
        </tbody>
    </table>
   
      
                    <div class="area-botoes">
                    <a class="btn-voltar" href="homeprodutos">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
                </div>

        
</div>
</x-layout>