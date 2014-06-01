
<?php  include_once 'connection.php'; ?>
<html><meta charset="utf-8"><head><title>Loading...</title><script type="text/javascript">
function login_right(){setTimeout("window.location='../pages/perfil/perfil.php'",1000); } 
function cadastre_right(){setTimeout("window.location='../pages/perfil/cadastros.php'",1000); } 
function update_right(){setTimeout("window.location='../pages/perfil/perfil.php'",1000); } 
</script><link href='http://fonts.googleapis.com/css?family=Pontano+Sans&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head><body style="background-color: #EEE;"></body></html>   
<?php



 /*=================================== CREATE FUNCTION ===================================*/
 if(isset($_POST['cadastrar'])){
    
    $date_received = $_POST['date'];
    $iten_type = $_POST['iten-type'];
    $description = $_POST['description'];
    $unit = $_POST['iten-unit'];
    $amount = $_POST['amount'];
    $cost = $_POST['unit-cost'];
    $min_amount = $_POST['min-amount'];
    $key_words = $_POST['key-words'];
    $provider = $_POST['provider']; 
    
    if($unit == "outro"){
      $unit = $_POST['other_unit'];
    }
    if($key_words == "mais"){
      $key_words = $_POST['more'];
    }

    $command = 'INSERT INTO itens (  
      data_recebimento,tipo_material,descricao,unidade,quantidade,valor_unit,quant_min,palavra_chave,fornecedor)  VALUES (:date_received, :iten_type, :description, :unit, :amount, :cost, :min_amount, :key_words, :provider)';
    try{
    $query = $pdo->prepare($command);

    $query->bindValue(":date_received", $date_received);
    $query->bindValue(":iten_type", $iten_type);
    $query->bindValue(":description",$description);
    $query->bindValue(":unit",$unit);
    $query->bindValue(":amount",$amount);
    $query->bindValue(":cost",$cost );
    $query->bindValue(":min_amount",$min_amount);
    $query->bindValue(":key_words",$key_words);
    $query->bindValue(":provider",$provider);
    $query->execute();
   
      echo "<center style='margin-top:20%;'><p style='font: 30px Pontano Sans; color:#555'>Cadastrando...</p></center>";
      echo "<center style='opacity: 0.5'; > <img width='40px' height='40px' src='../imgs/gifs/loader.GIF'></center>";
      echo "<script type='text/javascript'> cadastre_right(); </script>";
   
   }catch(PDOException $e){
    echo $e->getCode();
   }    
  }

  /*=================================== READ FUNCTION ====================================*/
  else if(isset($_POST['entrar'])){
    $matricula_login = $_POST['matricula'];
    $senha_login = $_POST['senha'];
    
    $command =  ("SELECT * FROM users WHERE (matricula =:matricula) AND (senha =:senha)");

    try{
      $query = $pdo->prepare($command);
      $query->bindValue(":matricula",$matricula_login);
      $query->bindValue(":senha",$senha_login);
      $query->execute();
    }catch(PDOException $e){
      $e->getMessage();
    }
     $row = $query->rowCount();

    while($result = $query->fetch(PDO::FETCH_OBJ)){
      session_start();
      $_SESSION['nome'] = $result->usuario;
      $_SESSION['matricula'] = $result->matricula;
      $_SESSION['senha'] = $result->senha;
      $_SESSION['email'] = $result->email;
      $_SESSION['celular'] = $result->celular;
      $_SESSION['idade'] = $result->idade;
      $_SESSION['endereco'] = $result->endereco;
      $_SESSION['id'] = $result->id;
      echo "<center style='margin-top:20%;'><p style='font: 30px Pontano Sans; color:#555'>Carregando...</p></center>";
      echo "<center style='opacity: 0.5'; > <img width='40px' height='40px' src='../imgs/gifs/loader.GIF'></center>";
      echo "<script type='text/javascript'> login_right(); </script>";
    }
    if($row < 1){
      header("location: pages_erro/une.php");
    }
  }

  /*============================= UPDATE FUNCTION =================================*/
  else if(isset($_POST['update'])){

    $id = (int)$_POST['id'];
    $matricula = $_POST['matricula'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $idade = $_POST['idade'];
    $fone = $_POST['fone'];
    $endereco = $_POST['endereco'];
  
  $command = "UPDATE users SET matricula = :matricula, usuario = :usuario, email = :email, idade = :idade, fone = :fone, endereco = :endereco WHERE id = :id";
  
  try {
    $query = $pdo->prepare($command);

    $query->bindValue(":id",$id, PDO::PARAM_INT);
    $query->bindValue(":matricula",$matricula, PDO::PARAM_STR);
    $query->bindValue(":usuario",$usuario, PDO::PARAM_STR);
    $query->bindValue(":email",$email, PDO::PARAM_STR);
    $query->bindValue(":idade",$idade, PDO::PARAM_STR);
    $query->bindValue(":fone",$fone, PDO::PARAM_STR);
    $query->bindValue(":endereco",$endereco, PDO::PARAM_STR);
    $query->execute();
    echo "<center style='margin-top:20%;'><p style='font: 30px Pontano Sans; color:#555'>Atualizando...</p></center>";
    echo "<center style='opacity: 0.5'; > <img width='40px' height='40px' src='../imgs/gifs/loader.GIF'></center>";
    echo "<script type='text/javascript'> update_right(); </script>";
  }
  catch(PDOException $e) {
    echo $e->getMessage();
  }

  }
  







  /* SE NÃO EXISTIR UM $_POST[] O USUÁRIO É REDIRECIONADO PARA A PAGINA DE ERRO :) */
 else if (!isset($_POST[''])){
      header("location: pages_erro/une.php");
  }
