<?php




require_once('../bd/conexaoMysql.php');


function editar ($arrayContatos)
{
 $sql = "update tblcontatos set 
         nome = '".$arrayContatos['nome']."',
         email = '".$arrayContatos['email']."',
         celular = '".$arrayContatos['celular']."'
         where idcontatos = ".$arrayContatos['id'];
     
  $conexao = conexaoMysql();
    
   if(mysqli_query($conexao, $sql))
           return true;
//   echo('foi a atualização');
     
        else
            return false;
//            echo('foi a atualização');
     
    die;

}




?>