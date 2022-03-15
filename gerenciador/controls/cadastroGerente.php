<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/cadastroGerente.css">
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
            <div class="item-corpo-final">Cadastro&nbsp;de&nbsp;Acesso&nbsp;do&nbsp;Gerente</div>
         </div>
      </header>

      <aside>
    
       <form method="post" action="cadastroGerente.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Cadastrar&nbsp;Acesso</p><br>
            <?php require_once('insertCadastroGerente.php');?>
         <input type="text" name="matricula-gerente" id="caixa-auta" class="form-control" placeholder="Matricula Funcionário"/><br>
         <input type="text" name="senha-gerente" class="form-control" placeholder="SENHA DE ACESSO"/><br>
         <input type="number" name='nivel-acesso' value="1" class="nivel-acesso"/>
          <div class="botao"><input type="submit" name="acao" class="btn btn-dark"/></div>
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