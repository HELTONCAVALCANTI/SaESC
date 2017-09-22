<?php

$servidor = "localhost";
$database = "academica";
$user = "root";
$pwd = "";


@ $conexao = mysql_connect($servidor, $user, $pwd);

$banco_selecionado = mysql_select_db($database);




/*
if(mysql_error()){
		echo "Ocorreu um erro ".mysql_error();
}else{
	echo "conectou";
}
*/
?>