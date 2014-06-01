<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Login</title> 
        <link rel="stylesheet" type="text/css" href="css/style.css"/>
    </head>
    <body>
    <center>
        <p id="title">LabControl</p>
         <div id='content_login'>
          <div id="paper1"></div><div id="paper2"></div>
         

           <form id="form_login" action="php/functions.php" method="post" >
            <img src="imgs/user.png" id="img_login">
             <input type="text" class="txt_field" id="matricula" name="matricula" placeholder="Matricula" required autofocus>
            <input type="password" class="txt_field" id="senha" name="senha" placeholder="Senha" required>
            <a href="#">Esqueceu sua senha?</a><br> 
            <input type="submit" id="bt-login" name="entrar" value="Entrar">
            



            <!-- <input type="button" id="bt-cadastre" value="Cadastrar"> -->
          </form>
        </div>
    </center>  
    </body>
</html>
