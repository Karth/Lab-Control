<?php

	try {
		$pdo = new PDO("mysql:host=localhost; dbname=db_lab;","root","");
	} catch (PDOException $e) {
		if($e->getCode() == 1049){
			echo "Banco de Dados inexiste!";
		}
	}


?>