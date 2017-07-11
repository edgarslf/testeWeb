<?php   require_once("cabecalho.php"); 
        require_once("banco-mercadoria.php");

        $mercadorias = listaMercadorias($conexao); 
    ?>
    <table class="table table-striped table-bordered">
         <tr>
             <td><p>Tipo de Mercadoria</p> </td>
            <td>Nome da Mercadoria</td>
            <td>Quantidade</td>
            <td>Preço</td>
            <td>Tipo de Negocio</td>
            
        </tr>
    <?php
        foreach($mercadorias as $mercadoria) : 
    ?>
        <tr>
            <td><?= $mercadoria['tipoMercadoria'] ?> </td>
            <td><?= $mercadoria['nomeMercadoria'] ?></td>
            <td><?= $mercadoria['quantidade'] ?></td>
            <td><?= $mercadoria['preco'] ?></td>
            <td><?= $mercadoria['tipoNegocio'] ?></td>
            
        </tr>
    
    <?php endforeach; 
    ?>
    
</table>



<?php include("rodape.php"); ?>