<?php include '../../php/connection.php'; ?>
<?php session_start();
   if(!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])){
       header("Location: ../../index.php");exit();}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>LabControl</title>
        <link rel="stylesheet" type="text/css" href="../../css/style_profile.css"/>    
        <script src="../../js/jquery/jarvis.js"></script>
    </head>
<body>    
   <div class="nav">
    <div id="div_img"><img id="user_img" src="../../imgs/user.png"></div>     
     <p id="name_user"><?php echo $_SESSION['nome']; ?></p>
      <ul id="menu"> 
       <li class="selected"><a href="">Perfil</a></li>
       <li><a href="#">Cadastros</a>
       <ul id="sub_menu_c">
        <li><a href="novo_cadastro.php">Novo</a></li>
        <li><a href="cadastros.php">Visualizar</a></li>
       </ul>
       </li>
       <li><a href="#">Agendamentos</a> 
       <ul id="sub_menu_a">
        <li><a href="novo_agendamento.php">Novo</a></li>
        <li><a href="agendamentos.php">Visualizar</a></li>
       </ul>
       </li>
       <li><a href="../../php/logout.php">Sair</a></li>
      </ul>
  </div>  
   <div id="content_profile">
   <p id="title_page">Meu Perfil</p> 
   <form method="post" action="../../php/functions.php" id="form_user"> 
     <p>Usuário</p>
     <input id="name" class="user_details" name="usuario" type="text" value="<?php echo $_SESSION['nome']; ?>">
     <p>Matricula</p>
     <input id="matricula"  class="user_details" name="matricula" type="text" value="<?php echo $_SESSION['matricula']; ?>">
    
     <input id="id" hidden class="user_details" name="id" type="text" value="<?php echo $_SESSION['id']; ?>">

     <p>Email</p>
     <input id="email" class="user_details" name="email" type="email" value="<?php echo $_SESSION['email']; ?>">
     <p>Idade</p>
     <input id="idade" class="user_details" name="idade" type="text" value="<?php echo $_SESSION['idade']; ?>">
     <p>Fone</p>
     <input id="fone" class="user_details" name="fone" type="text" value="<?php echo $_SESSION['celular']; ?>">
     <p>Endereço</p>
     <input id="endereco" class="user_details" name="endereco" type="text" value="<?php echo $_SESSION['endereco']; ?>">
     
     <input class="btn" type="submit" name="update" value="Salvar alterações">
     <input class="btn" type="button" value="Nova senha" id="bt-new-pass" onclick="new_pass()" >
   </form>
    </div>   
      <div id="footer_profile">
          <a href="http://portal.ifrn.edu.br/" target="_blank"><img id="icon_if" src="../../imgs/IFRN_Logo.png"></a>
          <p id="copyright">©Copyright IFRN <br></p>
           <p id="developer_details">Desenvolvedor : Carlos Henrique<br>
           <a href="https://github.com/Karth" target="_blank"><img id="icon_git" class="img_contact" src="../../imgs/Github.png"></a>
           <a href="https://www.facebook.com/carlos.henry.562" target="_blank"><img id="icon_face" class="img_contact" src="../../imgs/facebook.ico"></a></p>
      </div>
</body>
</html>
