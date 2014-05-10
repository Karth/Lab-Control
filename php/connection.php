<?php

/*   THIS FILE WILL BE CONNECTION WITH YOUR DATABASE    */

$host = "127.0.0.1";
$user = "root";
$pass = "";
$db = "db_lab";

$adress = mysql_connect($host,$user,$pass) or die(mysql_error());
$my_db = mysql_select_db($db) or die(mysql_error()); 

