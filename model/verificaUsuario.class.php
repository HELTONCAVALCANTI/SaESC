<?php 

require_once ("../conexao/conexao.php");

require_once ("../view/header.php");

function procurarUsuario($login = '', $senha = ''){


	$result = mysql_query("SELECT * FROM usuario WHERE login = '".$login."' AND senha = '".$senha."'");

	if (!$result) {
		echo 'Não foi possível executar a consulta: ' . mysql_error();
		exit;
	}
	$row = mysql_fetch_row($result);
	

	if($senha == $row[2]){ //checa se existe a senha na terceira coluna, caso sim, verifica abaixo se é professor ou aluno

		if($row[3] == "professor"){

				iniciaSessao($row[1], $row[3]); //chama função para passar os valores de login e tipo para sessão no arquivo validaSessao
				

			}elseif($row[3] == "aluno"){

				iniciaSessao($row[1], $row[3]);	//chama função para passar os valores de login e tipo para sessão no arquivo validaSessao

			}

		}elseif(empty($row)){
			
			echo "<script>alert('Usuário ou senha inválida!')</script>"; 
			
			echo $voltar = "<meta http-equiv=refresh content=0;url=../index.php>";
		}


	}


	
	
	?>