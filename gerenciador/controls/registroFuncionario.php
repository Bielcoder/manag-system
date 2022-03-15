<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/registroProduto.css">
      <!-- Estilização Bootstrap -->
      <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
   </head>
   <body>
      <!--Aqui comeca o cabecalho-->
      <header>
         <div class="navbar-topo">
            <div class="item-topo">INVENTÁRIO DE MULTIMÍDIA</div>
            <div class="btn-navbar-entrada"><a href="../index.php" class="btn btn-dark" >Página Principal</a></div>
           
         </div>

         <div class="sub-navbar-meio">
            <div class="item-corpo-final">Registro de Funcionários</div>
         </div>
      </header>

      <aside>
    
       <form method="POST" action="registroFuncionario.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Registrar&nbsp;Funcionário</p><br>
             <?php require_once('insertFuncionario.php')?>
         <input type="text" name="funcionario" class="form-control" placeholder="Nome Funcionario"/><br>
         <input type="text" name="matricula" class="form-control" placeholder="Matricula Funcionário"/><br>
          <div class="botao"><input type="submit" name="acao" value="Enviar" class="btn btn-dark"/></div>
         </div> 
      </div>
      </form> 

      

      </aside>

      <footer>
         <div class="navbar-rodape">
            <div class="item-rodape">&copy;&nbsp;Perfil Gerenciador</div>
         </div>
      </footer>

   </body>
</html>