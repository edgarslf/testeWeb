<?php   require_once("cabecalho.php"); ?>
       

    
    
<h1>   Teste Web   </h1>


<h2>Cadastro de mercadoria</h2>
<form name="form" id"form" action="adiciona-mercadoria.php" method="post"  >
    <table class="table">
        <tr>
            <td>Tipo mercadoria </td>
            <td>  <input type="text" class="form-control" name="tipoMercadoria" required >  </td>     
        </tr>
        <tr>
            <td>Nome mercadoria </td>
            <td><input type="text" class="form-control" name="nomeMercadoria" required> </td>
        </tr>
        <tr>
            <td>Quantidade </td>
            <td><input type="number" class="form-control" name="quantidade" required> </td>
        </tr>
        <tr>
            <td>Preço </td>
            <td><input type="number" class="form-control" name="preco" required> </td>
        </tr>
        <tr>
            <td>Tipo de Negocio </td>
            <td><select name="tipoNegocio" class="form-control" required>
                            <option value="compra">Compra</option> <br/>
                            <option value="venda">Venda</option> 
                </select>    
                
         </tr>
        <tr>
        <td><button type="submit" class="btn btn-primary" >Cadastrar</button> </td>
        </tr>
    </table>
</form>


<?php include ("rodape.php") ?>