<!DOCTYPE html>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Inventário Multimídia</title>
      <!-- Estilização Pura -->
      <link rel="stylesheet" href="../css/reset-senha.css">
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
            <div class="item-corpo-final">Alteração&nbsp;de&nbsp;Senha</div>
         </div>
      </header>

      <aside>
    
       <form method="get" action="systemsenha.php">
       <div class="fieldset">    
          <div class="container">
             <p class="titulo-form">Alterar&nbsp;Senha</p><br>

               <table>
                  <div class="box">
                  <th>
                     <p class="funcionario">Funcionário/Senha</p>
                  </th>
                     <tr>
                         <td class="funcionario"> <?php require_once('config.php'); $select = mysqli_query($conn,"SELECT * FROM nivelacesso WHERE acesso = 0");
                           while ($descreva = mysqli_fetch_array($select)){
                                 echo "<input type='radio' class='funcionario' name='funcionario' value='{$descreva['matricula']}'>";

                                 echo $descreva['matricula'].'&nbsp;&nbsp;-&nbsp;&nbsp;'.$descreva['senha'].'<br>';

                           }
                           
                     ?></td>
                  </tr>
              

                  


                  <th>
                     <p class="gerente">Gerente/Senha</p>
                     <tr>
                      <td class="gerente"> <?php require_once('config.php'); $select = mysqli_query($conn,"SELECT * FROM nivelacesso WHERE acesso = 1");
                           while ($descreva = mysqli_fetch_array($select)){
                                 echo "<input type='radio' class='gerente' name='funcionario' value='{$descreva['matricula']}'>";
                              
                                 echo $descreva['matricula'].'&nbsp;&nbsp;-&nbsp;&nbsp;'.$descreva['senha'].'<br>';
                           }
                     ?></td>
                  </tr>
                  </th>
                   

                  </div>

               </table>
         
          <div class="botao"><input type="submit"  name="acao" class="btn btn-dark"/></div>
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