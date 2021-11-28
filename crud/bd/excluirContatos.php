<?php


require_once('../bd/conexaoMysql.php');



function excluir($idContatos)
{
    
    $sql = "delete from tblcontatos 
            where idcontatos = ".$idContatos;
    
    
    
    
    $conexao = conexaoMysql();
    
    if(mysqli_query($conexao, $sql))
        return true;
    else
        return false; 
    
    
    
}







?>