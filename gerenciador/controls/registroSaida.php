
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Registro Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/registroSaida.css">
      <!-- Estilização Bootstrap -->
      <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <style type="text/css">
         
      </style>
   </head>
   <body>
      <!--Aqui comeca o cabecalho-->
      <header>
         <div class="navbar-topo">
            <div class="item-topo">INVENTÁRIO DE MULTIMÍDIA</div>
            <div class="btn-navbar-entrada"><a href="../index.php" class="btn btn-dark" >Página Principal</a></div>
           
         </div>

         <div class="sub-navbar-meio">
            <div class="item-corpo-final">Registrar Saida de Produto</div>
         </div>
      </header>

      <aside>
    
       <form method="post" action="registroSaida.php">
       <div class="fieldset">    
          <div class="container">
            <?php require_once('insertSaida.php')?>
             <p class="titulo-form">Registrar&nbsp;Saida</p>
      
               
               <h6 class="titulo-equipamento">Equipamentos</h6>
             <?php
             require_once('config.php');


             //select dos equipamentos
             $selectequipamento = mysqli_query($conn,"SELECT * FROM equipamento");
             while ($linhaequipamento = mysqli_fetch_array($selectequipamento)) {
               echo " <input type='radio' id='produto' name='produto' value='{$linhaequipamento['nome_produto']}' required>
               <label for='produto' name='produto'><p>".$linhaequipamento['nome_produto'].'<br>código : '.$linhaequipamento['codigo_produto']."</p></label>";
             } 
           
             echo "<h6 class='titulo-funcionario'>Funcionários</h6>";
             //select dos funcionarios
             $selectfuncionario = mysqli_query($conn,"SELECT * FROM funcionario");
             while($linhafuncionario = mysqli_fetch_array($selectfuncionario)){
               echo "<input type='radio' id='funcionario' name='funcionario' value='{$linhafuncionario['nome_funcionario']}' required>
                  <label for='funcionario' name='funcionario' class='funcionario'>
                  <p>".$linhafuncionario['nome_funcionario'].'-'.$linhafuncionario['matricula_funcionario']."</p>
                  </label>";
             }

             ?>
         
             <h6>Data de Devolução</h6>
             <input type="text" name="data-saida" id="data-saida" class="data-saida" placeholder="DD/MM/AAAA" required><br>
             <h6>Hora de Devolução</h6>
             <input type="time" name="hora-saida" id="hora-saida" class="hora-saida" required>
    
           
       
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