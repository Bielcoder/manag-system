<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Remoção Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/remocaoFuncionario.css">
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
            <div class="item-corpo-final">Remoção&nbsp;de&nbsp;Cadastro&nbsp;do&nbsp;Gerente</div>
         </div>
      </header>

      <aside>
    
       <form method="post" action="deleteCadastroGerente.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Remover&nbsp;Cadastro</p><br>
               
         <input type="text" name="matricula" class="form-control" placeholder="Matrícula Gerente">
         <input type="number" name='nivel-acesso' value="1" class="nivel-acesso"/>
          <div class="botao"><input type="submit" value="Enviar" name="acao" class="btn btn-dark"/></div>
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