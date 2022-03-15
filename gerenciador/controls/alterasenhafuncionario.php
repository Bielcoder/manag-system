
<?php require_once('config.php');
     

?>

<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/cadastroFuncionario.css">
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
            <div class="item-corpo-final">Alteração&nbsp;de&nbsp;Senha&nbsp;</div>
         </div>
      </header>

      <aside>
    
       <form method="post" action="updatesenhafuncionario.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Alterar&nbsp;senha&nbsp;de&nbsp;acesso</p><br>
         <input type="text" name="matricula-funcionario" value="<?php echo $_GET['funcionario']?>" id="caixa-auta" class="form-control" placeholder="Matricula Funcionário"/><br>
         <input type="text" name="senha-funcionario" class="form-control" placeholder="NOVA SENHA"/><br>
         <input type="number" name='nivel-acesso' value="0" class="nivel-acesso"/>
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