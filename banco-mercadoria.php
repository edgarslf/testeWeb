<?php
require_once("conecta.php");


function listaMercadorias($conexao){
    $mercadorias = array();
    $resultado = mysqli_query($conexao, "SELECT * FROM mercadoria");
    
    while($mercadoria = mysqli_fetch_assoc($resultado)){
        array_push($mercadorias, $mercadoria) ;
    }
    return $mercadorias;
}



function insereMercadoria($conexao, $tipoMercadoria, $nomeMercadoria, $preco, $quantidade, $tipoNegocio){
    $tipoMercadoria= mysqli_real_escape_string($conexao, $tipoMercadoria);
    $nomeMercadoria= mysqli_real_escape_string($conexao, $nomeMercadoria);
    $query= "insert into mercadoria ( tipoMercadoria , nomeMercadoria, preco, quantidade, tipoNegocio) values ('{$tipoMercadoria}' , '{$nomeMercadoria}' , {$preco}, {$quantidade} , '{$tipoNegocio}' )";
        $resultadoDaInsercao = mysqli_query($conexao, $query);
            return $resultadoDaInsercao;
        }
