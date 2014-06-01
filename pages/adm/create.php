<html>
	<head>
		<script type="text/javascript">
		function cadastre_right(){setTimeout("window.location='.adm.php'",1000); } 

		</script>
		<style>
		body{
			background-color: #EEE;
		}
		</style>
	</head>
</html>



<?php include '../../php/connection.php'; 

   if(isset($_POST['novo'])){
      $usuario = $_POST['usuario'];    
      $senha = $_POST['senha'];
      $matricula = $_POST['matricula'];
      $email = $_POST['email'];
      $idade = $_POST['idade'];
      $fone = $_POST['fone'];
      $endereco = $_POST['endereco'];
      $command = 'INSERT INTO users (  
        matricula,usuario,senha,email,celular,idade,endereco)  VALUES (:matricula, :usuario, :senha , :email,:fone , :idade,:endereco)';
      try{
      $query = $pdo->prepare($command);
      $query->bindValue(":usuario", $usuario);
      $query->bindValue(":senha", $senha);
      $query->bindValue(":matricula",$matricula);
      $query->bindValue(":email",$email);
      $query->bindValue(":idade",$idade);
      $query->bindValue(":fone",$fone);
      $query->bindValue(":endereco",$endereco);
      $query->execute();
      echo "<script type='text/javascript'> cadastre_right() </script>";
      echo "<center style='margin-top:20%;'><p style='font: 30px Pontano Sans; color:#555'>Cadastrando...</p></center>";
      echo "<center style='opacity: 0.5'; > <img width='40px' height='40px' src='../../imgs/gifs/loader.GIF'></center>";
     }catch(PDOException $e){
      echo $e->getCode();
     }
  }
  





