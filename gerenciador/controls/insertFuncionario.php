<!DOCTYPE html>
<html>
<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title>Insert Funcionário</title>
   <style>
         p.sucesso{
            color: #34d334;
            margin: 0;
            position: relative;
            top: -20px;
      }

      p.erro{
            color: red;
            margin: 0;
            position: relative;
            top: -20px;
      }
   </style>
</head>
<body>
   <?php
      require_once('config.php');
      

      $nome = isset($_POST['funcionario'])?$_POST['funcionario']:"";
      $matricula = isset($_POST['matricula'])?$_POST['matricula']:"";

      if(isset($_POST['acao'])){
      if($insert = mysqli_query($conn,"INSERT INTO funcionario(nome_funcionario,matricula_funcionario)VALUES('$nome','$matricula')")){
         echo "<p class='sucesso'>Funcionário&nbsp;cadastrado&nbsp;com&nbsp;Sucesso!</p>";
      }else{echo "<p class='erro'>Funcionário&nbsp;já&nbsp;registrado!</p>";}
   }

         ?>
</body>
</html>