<?php include '../../php/connection.php'; ?>
<?php session_start();
   if(!isset($_SESSION["matricula"]) || !isset($_SESSION["senha"])){
       header("Location: ../../index.php");exit();}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Agendamentos</title>
        <link rel="stylesheet" type="text/css" href="../../css/style_profile.css"/>    
     </head>
    <body>    
<div class="nav">
<div id="div_img"><img id="user_img" src="../../imgs/user.png"></div>     
<p id="name_user"><?php echo $_SESSION['nome']; ?></p>    
<ul id="menu">
<li><a href="perfil.php">Perfil</a></li>
<li><a href="#">Cadastros</a>
 <ul id="sub_menu_c">
  <li><a href="novo_cadastro.php">Novo</a></li>
  <li><a href="cadastros.php">Visualizar</a></li>
 </ul>
</li>
<li class="selected"><a href="#">Agendamentos</a>
 <ul id="sub_menu_a">
  <li><a href="novo_agendamento.php">Novo</a></li>
  <li><a href="agendamentos.php">Visualizar</a></li>
 </ul>
</li>
<li><a href="../../php/logout.php">Sair</a></li>
</ul>
</div>

<div id="content_profile">
 <p id="title_page">Todos os agendamentos</p> 
   <!-- Content here... -->
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
