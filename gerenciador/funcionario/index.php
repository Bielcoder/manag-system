<?php session_start();
      if(!isset($_SESSION['acesso'])){
               header('location:../controls/login.php');
            }
?>


<!DOCTYPE html>


<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Estilização Bootstrap -->
      <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <style>

p.aviso{
   color: red;
}
      </style>
   </head>
   <body>
      <!--Aqui comeca o cabecalho-->
      <header>
         <div class="navbar-topo">
            <div class="item-topo">INVENTÁRIO DE MULTIMÍDIA</div>
            <div class="btn-navbar-logout"><a href='../controls/system.php?logout' name="logout"  class="btn btn-dark" ><b>Logout</b></a></div>
            
         </div>
      </header>
      <aside>
         <div class="navbar-lateral-esquerda"></div>

         <div class="corpo-principal">
            <div class="item-corpo-1">
               Disponiveis<br>
               <div class="item-corpo-1-1"><p class="nome"><?php require_once('controls/selectProduto.php');?></p></div>
            </div>
            <div class="item-corpo-2">
               Emprestados<br>
               <div class="item-corpo-2-2"><?php require_once('controls/selectSaida.php');?></div>
            </div>
            <div class="item-corpo-3">
               Não&nbsp;Devolvidos<br>
               <div class="item-corpo-3-3" id="current_date">
                <?php 
                 require_once('controls/selectSaida.php');
                 $select = mysqli_query($conn,"SELECT * FROM registrosaida");
                while ($linha = mysqli_fetch_array($select)){
                  
                  $hoje = date('d/m/y');
         
                if($linha['data_emprestado'] < $hoje){

               echo "<p class='aviso'>Prod : ".$linha['nome_produto_emprestado'].'<br>';
               echo "Func : ".$linha['nome_funcionario_emprestado'].'<br>';
               echo "Data : ".$linha['data_emprestado'].'<br>';
               echo "Hora : ".$linha['hora_emprestado'].'<br>';
               echo "-------------------------------".'</p>'; 
            }
            
         }

         
           
  
                ?>
                  </div>
            </div>
         </div>
        </aside>
      <footer>
         <div class="navbar-rodape">
            <div class="item-rodape">&copy;&nbsp;Perfil&nbsp;Funcionário</div>
         </div>
      </footer>
   </body>
</html>

