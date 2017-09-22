<?php

require_once ("../conexao/conexao.php");

require_once ("../view/header.php");

$amatricula = $_POST['matricula'];
$anome = $_POST['nome'];
$aendereco = $_POST['endereco'];
$aemail = $_POST['email'];
$acre = $_POST['cre'];
$interesse = $_POST['ainteresse']; 
$senha = $_POST['senha'];


// Fazer verificação dos erros...
//verifica se o usuario ou email já existem 

$sql_email_check = mysql_query("SELECT COUNT(acod) FROM aluno WHERE aemail='{$aemail}'");
$sql_matricula_check = mysql_query("SELECT COUNT(acod) FROM aluno WHERE matricula='{$amatricula}'");

$eReg = mysql_fetch_array($sql_email_check);
$mReg = mysql_fetch_array($sql_matricula_check);

$email_check = $eReg[0];
$matricula_check = $mReg[0]; 

if (($email_check > 0) || ($matricula_check > 0)){

	if ($email_check > 0){

	//echo "Este email já está sendo utilizado.<br /><br />";
	
	echo "<script>alert('Este email já está sendo utilizado.')</script>"; 

	echo "<meta http-equiv=refresh content=0;url=../view/login.php>";
	
	unset($aemail);

	}

	if ($matricula_check > 0){

	//echo "Esta matricula já está sendo utilizada.<br /><br />";
	
	echo "<script>alert('Esta matricula já está sendo utilizada.')</script>"; 
	
	echo "<meta http-equiv=refresh content=0;url=../view/login.php>";
	
	unset($amatricula);
	}
	
}

else{
	
	//se não houve nenhum erro no cadastro, então vamos cadastrar o aluno.

	$sql = "INSERT INTO aluno (anome, aendereco,aemail, acre, matricula, ainteresse) values ('$anome','$aendereco','$aemail','$acre','$amatricula','$interesse')";
	$sql1 = "INSERT INTO usuario (login, senha, tipo) values ('$amatricula','$senha','aluno')";
	$res = mysql_query($sql);
	$res1 = mysql_query($sql1);
	
				if($res && $res1){
					echo "Aluno Cadastrado com sucesso! Você será redirecionado para tela de login.";
					echo "<meta http-equiv=refresh content=0;url=../index.php>";
				}else{
				echo "O usuário não foi cadastrado! Entre em contato com o administrador do sistema!".mysql_error();}
    				
}


?>