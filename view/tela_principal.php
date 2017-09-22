<?php require_once ("../view/header.php");?>
<?php include ("../controller/verificaSessao.php");?>



<nav class="navbar navbar-inverse sidebar" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">SaESC <??></a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#"> <?php echo ucfirst($_SESSION['tipo']).": ".ucfirst($_SESSION['login']);?><span style="    font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li> 
				<!--Função ucfirst deixa a primeira letra da palavra maiúscula; no código tem a impressão das 2 variáveis de sessão que contem o nome do usuario e tipo de usuario-->

				<li ><a href="#">Turmas<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
				<li ><a href="#cadastrar_professor" class="scroll" data-toggle="modal" style="text-decoration: none;">Cadastrar Professor<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
				<li class="dropdown">

					<li><a href="#cadastrar_aluno" class="scroll" data-toggle="modal" style="text-decoration: none;">Cadastrar Aluno<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<!-- <li ><a href="#">Profile<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a></li>
					<li ><a href="#">Messages<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-envelope"></span></a></li>-->
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Opções <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-cog"></span></a>
						<ul class="dropdown-menu forAnimate" role="menu">

							<li class="divider"></li>
							<li>
								<form action="../controller/validaSessao.php" method="POST">
									<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit" name="sair">Logout</button>
								</form>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="main">
		<!-- Content Here -->


		<div class="container">
			<div class="col-sm-10">
				<div class="col-sm-5">
					<br>
					<br>
					<br>



					<!--################################# MODAL COM FORMULÁRIO DE CADASTRO DE PROFESSOR #########################-->

					<div id="cadastrar_professor" class="modal fade panel panel-defaut">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						</div>
						<div class="modal-body" style="text-align: center; margin-left: 25px;">

							<div class="container">
								<fieldset>
									<legend>Cadastrar Professor</legend>
									<form class="form-horizontal" method="post" action="../model/cadastroProfessor.php" role="form">

										<!--Insere o formulário de cadastro do professor-->
										<?php include("form_cadastro_professor.php");?>



									</form>
								</div>
							</div>
						</div>

						<!--#######################################################################################################-->




						<!--################################# MODAL COM FORMULÁRIO DE CADASTRO DE ALUNO #########################-->


						<div id="cadastrar_aluno" class="modal fade panel panel-defaut">
							<div class="modal-header">
								<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							</div>
							<div class="modal-body" style="text-align: center; margin-left: 25px;">

								<div class="container">
									<fieldset>
										<legend>Cadastrar Aluno</legend>
										<form class="form-horizontal" method="post" action="../model/cadastroAluno.php" role="form">


											<!--Insere o formulário de cadastro de aluno-->
											<?php include("form_cadastro_aluno.php");?>




										</form>
									</div>
								</div>
							</div>





							<!--#####################################################################################################-->


							<?php 

							$usuario = $_SESSION['login'];
							$tipo =    $_SESSION['tipo'];	


							if($tipo != "professor"){

								unset($_SESSION['logado']);


							}


							?>



							<img src="../assets/img/logomarca.png" width="70%" height="30%">

						</div>
					</div>
				</div>

			</div>
