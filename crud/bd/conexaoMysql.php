<?php



function conexaoMysql()
    
{
    
    $server = 'localhost';
    $user = 'root';
    $password = 'bcd127';
    $database = 'dbcontatos';
        
 if($conexao = mysqli_connect($server , $user,$password ,$database))
  return $conexao;
    
    
    else
    {
           
       echo(ERRO_CONEXAO_BD);
      return false;
     }   
    
        
    
}




?>