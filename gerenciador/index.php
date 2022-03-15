<?php session_start();
      if(!isset($_SESSION['acessodois'])){
               header('location:controls/login.php');
            }
?>
   
<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Inventário</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="css/index.css">
      <!-- Estilização Bootstrap -->
      <link href="css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <style>
  

p.aviso{
   color: red;
}
      
      /*responsividade menu*/
      @media screen and (max-width: 1275px){
         div.btn-navbar-entrada {
         text-indent: 0px;
         margin: 5px 31px 2px 182px;
         padding: 0;
         display: flex;
         align-items: center;
      }
   }

    @media screen and (max-width: 1095px){
         div.btn-navbar-entrada {
         text-indent: 0px;
         margin: 2px 60px 2px 190px;
         padding: 0;
         display: flex;
         align-items: center;
      }
   }

 @media screen and (max-width: 900px){
          div.btn-navbar-entrada {
         text-indent: 0px;
         margin: 2px 40px 2px 190px;
         padding: 0;
         display: flex;
         align-items: center;
      }
      }

    @media screen and (max-width: 590px){
          div.btn-navbar-entrada {
         text-indent: 0px;
         margin: 2px 30px 15px 20px;
         padding: 0;
         display: flex;
         align-items: center;
      }
      div.btn-navbar-saida{
   margin: 0px 0px 0px 0px;
   padding: 0;
   margin: 0px 30px 12px -40px;
   display: flex;
   align-items: center;
}
      
      div.btn-navbar-logout{
   margin: 0px 0px 0px 0px;
   padding: 0;
   margin: 0px 20px 12px -40px;
   display: flex;
   flex-wrap: nowrap;
   align-items: center;
}

      }

   @media screen and (max-width: 531px){
       div.item-topo{
   font-size: 25pt;
   font-family: 'logo-navbar',sans-serif;
   text-indent: 0px;
   margin: 0px 0px 0px 0px;
   padding: 0;
}

      }
      /*responsividade acessos*/
      @media screen and (max-width: 635px){
      div.nivel-acesso {
display: flex;
flex-wrap: wrap;
justify-content: space-around;
position: relative;
top: 312px;
margin: 0px 200px 0px 190px;
}

div.admin {
    display: flex;
    justify-content: space-evenly;
    position: relative;
    bottom: -255px;
    margin: 0px 200px 0px 190px;
}
}

@media screen and (max-width: 635px){
div.btn-navbar-cadastrar-funcionario{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-remover-funcionario{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-cadastrar-gerente{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-remover-gerente{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-registrar{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-remover{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-registrar-pro{
      margin: 0px 0px 15px 0px;
}

div.btn-navbar-remover-pro{
      margin: 0px 0px 0px 0px;
}


}


      
   


      </style>
   </head>
   <body>
      <!--Aqui comeca o cabecalho-->
      <header>
         <div class="navbar-topo">
            <div class="item-topo">INVENTÁRIO&nbsp;DE&nbsp;MULTIMÍDIA</div>
            <div class="btn-navbar-entrada"><a href="controls/registroEntrada.php" class="btn btn-dark" >Registrar&nbsp;Entrada</a></div>
            <div class="btn-navbar-saida"><a href="controls/registroSaida.php" class="btn btn-dark" >Registrar&nbsp;Saida</a></div>
            <div class="btn-navbar-logout"><a href='controls/system.php?logout' name="logout"  class="btn btn-dark" ><b>Logout</b></a></div>
         </div>
      </header>

      
      <aside>

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
         <div class="navbar-quantidade">
            <div class="item-corpo-final">Quantidade</div>
         </div>

         <div class="quantidade">
            <div class="item-quantidade-1">
               Disponiveis<br>
               <div class="item-quantidade-1-1"><?php require_once('controls/selectProdutoFaltando.php');?></div>
            </div>
            <div class="item-quantidade-2">
               Emprestados<br>
               <div class="item-quantidade-2-2"></div>
            </div>
         </div>

         <div class="navbar-admin">
            <div class="item-corpo-final">Administrativo</div>
         </div>
         <div class="admin">
            <div class="btn-navbar-registrar"><a href="controls/registroFuncionario.php" class="btn btn-dark" >Registrar&nbsp;Funcionário</a></div>
            <div class="btn-navbar-remover"><a href="controls/remocaoFuncionario.php" class="btn btn-dark" >Remover&nbsp;Funcionário</a></div>
            <div class="btn-navbar-registrar-pro"><a href="controls/registroProduto.php" class="btn btn-dark" >Registrar&nbsp;Produto</a></div>
            <div class="btn-navbar-remover-pro"><a href="controls/remocaoProduto.php" class="btn btn-dark" >Remover&nbsp;Produto</a></div>
         </div>

          <div class="acesso">Acessos</div>
         <div class="nivel-acesso">
            <div class="btn-navbar-cadastrar-funcionario"><a href="controls/cadastroFuncionario.php" class="btn btn-dark" >Cadastrar&nbsp;Funcionário</a></div>
            <div class="btn-navbar-remover-funcionario"><a href="controls/remocaoCadastroFuncionario.php" class="btn btn-dark" >Remover&nbsp;Cadastro&nbsp;do&nbsp;Funcionário</a></div>
            <div class="btn-navbar-cadastrar-gerente"><a href="controls/cadastroGerente.php" class="btn btn-dark" >Cadastrar&nbsp;Gerente</a></div>
            <div class="btn-navbar-remover-gerente"><a href="controls/remocaoCadastroGerente.php" class="btn btn-dark" >Remover&nbsp;Cadastro&nbsp;do&nbsp;Gerente</a></div>
             <div class="reset-senha"><a href="controls/reset-senha.php" class="btn btn-dark" >Reset&nbsp;Senha</a></div>
         </div>

      </aside>
      <footer>
         <div class="navbar-rodape">
            <div class="item-rodape">&copy;&nbsp;Perfil&nbsp;Gerenciador</div>
         </div>
      </footer>
   </body>
</html>