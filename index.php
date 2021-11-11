<?php






require_once('crud/bd/conexaoMysql.php');

conexaoMysql();

require_once('funcoes/config.php');

?>
  

  <html>
   
   
    
    <head>
        <link rel="stylesheet"
        type="text/css"
        href="css/style.css">
        <meta charset="utf-8">
        
    
    </head>
    
    
    

    
    
  <body>
      
      <form action="" name="frmCadastro" method="post">
      
        <div id="cadastro">
            
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">NOME</label>
        <input type="text"  name="txtNome" class="inputCadastro" value="">
            
        </div> 
            
       <div class="cadastroUsuario">
            
        <label class="labelRegistro">EMAIL</label>
        <input type="email" name="txtEmail" class="inputCadastro" value="">
            
        </div>  
        
        <div class="cadastroUsuario">
            
        <label class="labelRegistro">CELULAR</label>
        <input  type="number" name="txtNumeroCelular" class="inputCadastro" value="">
                              
        </div>
            
     <button id="botao"type="submit" value="<?=$modo?>" name="btnEnviar"> SALVAR</button>
        
        
        
        </div>
          
    </form>
      
      
 
      
    
            
      <table class="tblRegistro" >
          <tr>
              <td class="colunasRegistro">
              NOME
              </td>
              <td class="colunasRegistro">
              USUARIO
              </td>
             <td class="colunasRegistro">
              SENHA
              </td>
              <td class="clnRegistro"></td>
          
          
          </tr>

          
           <tr>
              <td class="colunasResultado"></td>
              <td class="colunasResultado"></td>
              
               <td class="clnRegistro">
               
                <a href="">
                            <img src="img/edit.png" alt="Editar" title="Editar" class="editar">
                        </a>
                        <a onclick="">
                            
                            <img src="img/trash.png" alt="Excluir" title="Excluir" class="excluir">
                        </a>
                   
                   
               </td>
          
          
          </tr>
        
           
      
      </table>
      
    
    
    </body>

</html>