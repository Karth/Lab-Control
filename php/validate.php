
<?php  include_once 'connection.php'; ?>
<html><head><title>Loading...</title><script type="text/javascript">
function login_right(){setTimeout("window.location='../pages/perfil/perfil.php'",1000); } 
</script><link href='http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head><body style="background-color: #EEE;"></body></html>   
<?php
  
  
  
  $matricula_login = $_POST['matricula'];
  $senha_login = $_POST['senha'];
  
  $query = mysql_query("SELECT * FROM users WHERE (matricula = '$matricula_login') AND (senha = '$senha_login')") or die(mysql_error());
  $result = mysql_fetch_array($query);
  
  $rows = mysql_num_rows($query);
  
 
  if($rows > 0){
      
      session_start();
      $_SESSION['nome'] = $result['usuario'];
      $_SESSION['matricula'] = $result['matricula'];
      $_SESSION['senha'] = $result['senha'];
      $_SESSION['email'] = $result['email'];
      $_SESSION['celular'] = $result['celular'];
      $_SESSION['idade'] = $result['idade'];
      
      
      echo "<center style='margin-top:20%;'><p style='font: 30px Pontano Sans; color:#555'>Carregando...</p></center>";
      echo "<center style='opacity: 0.5'; > <img width='40px' height='40px' src='../imgs/gifs/loader.GIF'></center>";
      echo "<script type='text/javascript'> login_right(); </script>";
  }
  else{
      header("location: pages_erro/une.php");
      }