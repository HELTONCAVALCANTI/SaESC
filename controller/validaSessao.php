<?php 

require_once ("../model/verificaUsuario.class.php");

require_once ("../view/header.php");

session_start();

echo "<meta charset='UTF-8'/>";

@$recebe_login = $_POST['login'];
@$recebe_senha = $_POST['senha'];
$sair = isset($_POST['sair']);

procurarUsuario($recebe_login, $recebe_senha);	


function iniciaSessao($login = "", $tipo = ""){


	if($login != null){
		$_SESSION['logado'] = true;
		$_SESSION['login'] = $login;
		$_SESSION['tipo'] = $tipo;	

		echo "<script>alert('Usuário logado com sucesso!')</script>"; 

		echo "<meta http-equiv=refresh content=0;url=../view/tela_principal.php>";

	}
	

}


if($sair == "sair"){
	unset($_SESSION['logado']);
	unset($_SESSION['login']);
	unset($_SESSION['tipo']);
	echo "<meta http-equiv=refresh content=0;url=../view/login.php>";
}


?>