
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
            <div class="item-corpo-final">Registro de Produtos</div>
         </div>
      </header>

      <aside>
    
       <form method="POST" action="registroProduto.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Registrar Produto</p><br>
             <p><?php require_once('insertProduto.php');?></p>
         <input type="text" name="produto" class="form-control" placeholder="Nome do Produto"/><br>
         <input type="text" name="codigo" class="form-control" placeholder="Código Fabricante"/><br>
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