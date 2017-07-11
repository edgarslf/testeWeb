<?php   require_once("cabecalho.php");
        require_once("banco-mercadoria.php");
?>

    <?php 
        $tipoMercadoria = $_POST["tipoMercadoria"]; 
        $nomeMercadoria = $_POST["nomeMercadoria"];
        $preco = $_POST["preco"];
        $quantidade = $_POST["quantidade"];
        $tipoNegocio = $_POST["tipoNegocio"];
           
        
            
        if(insereMercadoria($conexao, $tipoMercadoria, $nomeMercadoria, $preco, $quantidade, $tipoNegocio)) {
    ?>
        <p class="text-success">A mercadoria <?= $nomeMercadoria; ?>, <?= $preco; ?>  foi adicionada com sucesso!</p>
    <?php
        } else {
            $msg = mysqli_error($conexao);
    ?>
        <p class="text  -danger">A mercadoria <?= $nomeMercadoria; ?> não foi adicionada: <?= $msg ?></p>
    <?php
        }
    ?>
            
    
    <?php require_once ("rodape.php") ?>