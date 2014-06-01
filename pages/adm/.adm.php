<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title> Cadastre um Usuário </title>
	<link rel="stylesheet" href="../../css/style.css">
	
</head>
<body class="body-adm">
	<p id="title"> Bem-vindo Administrador </p>
	<div id="adm-content">
	 <form method="post" action="create.php" id="form_user" > 
     <p class="sub-title">Cadastro de Usuários</p>
	
     <p class="legend">Usuário</p>
     <input id="name" class="user_details" name="usuario" type="text" required>
   	 <p class="legend">Senha</p>
     <input id="senha" class="user_details" name="senha" type="password" required>
     <p class="legend">Matricula</p>
     <input id="matricula" class="user_details" name="matricula" type="text" required>
     <p class="legend">Email</p>
     <input id="email" class="user_details" name="email" type="email" required>
     <p class="legend">Idade</p>
     <input id="idade" class="user_details" name="idade" type="text" required>
     <p class="legend">Fone</p>
     <input id="fone" class="user_details" name="fone" type="text" required>
     <p class="legend">Endereço</p>
     <input id="endereco" class="user_details" name="endereco" type="text" required>
     <input class="btn" type="submit" name="novo" value="Novo" >
    <a href="../../index.php"><input class="btn" type="button" id="bt-new-pass"  value="Voltar">
    </a>
   </form>
   </div>
</body>
</html>