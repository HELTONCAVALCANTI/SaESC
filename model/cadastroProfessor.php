<script type="text/javascript" charset="utf-8">
	<?php

	require_once ("../conexao/conexao.php");

	require_once ("../view/header.php");

	$matricula = $_POST['matricula'];
	$nome = $_POST['nome'];
	$endereco = $_POST['endereco'];
	$email = $_POST['email'];
	$titulacao = $_POST['titulacao'];
	$disciplina = $_POST['disciplina'];
	$senha = $_POST['senha'];


// Fazer verificação dos erros...
//verifica se o usuario ou email já existem 

	$sql_email_check = mysql_query("SELECT COUNT(pcodigo) FROM professor WHERE pemail='{$email}'");
	$sql_matricula_check = mysql_query("SELECT COUNT(pcodigo) FROM professor WHERE pmatricula='{$matricula}'");

	$eReg = mysql_fetch_array($sql_email_check);
	$mReg = mysql_fetch_array($sql_matricula_check);

	$email_check = $eReg[0];
	$matricula_check = $mReg[0]; 

	if (($email_check > 0) || ($matricula_check > 0)){

		if ($email_check > 0){

			echo "<script>alert('Este email já está sendo utilizado.')</script>"; 
			
		//echo "<meta http-equiv=refresh content=0;url=../view/login.php>";//

			echo "<script>window.history.back(document.getElementById('bt_cp').click())</script>";


			unset($pemail);

		}

		if ($matricula_check > 0){

			echo "<script>alert('Esta matricula já está sendo utilizada.')</script>"; 
			
		//echo "<meta http-equiv=refresh content=0;url=../view/login.php>";//

			echo "<script>window.history.back(document.getElementById('bt_cp').click())</script>";

			unset($pmatricula);
		}
		
	}

	else{
		
	//se não houve nenhum erro no cadastro, então vamos cadastrar o professor.

		$sql = "INSERT INTO professor (pmatricula,pnome, pendereco,pemail, ptitulacao, pdisciplina) values ('$matricula','$nome','$endereco',
		'$email','$titulacao','$disciplina')";
		$sql1 = "INSERT INTO usuario (login, senha, tipo) values ('$matricula','$senha','professor')";
		$res = mysql_query($sql);
		$res1 = mysql_query($sql1);
		
		if($res && $res1){
			echo "Professor Cadastrado com sucesso! Você será redirecionado para tela de login.";
			
			echo "<script>alert('Professor Cadastrado com sucesso! Você será redirecionado para tela de login.')</script>";
			
			echo "<meta http-equiv=refresh content=0;url=../index.php>";
			
			
		}else{
			echo "O usuário não foi cadastrado! Entre em contato com o administrador do sistema!".mysql_error();}
			
			
			
			
			
			
		}


		?>