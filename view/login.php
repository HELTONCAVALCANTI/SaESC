<?php require_once "header.php"; ?>	



<div class="container">
	<div class="card card-container">

		<img id="profile-img" class="profile-img-card" src="../assets/img/logomarca.png"/>
		<p id="profile-name" class="profile-name-card"></p>

		<form class="form-signin" action="../controller/validaSessao.php" method="POST">

			<input type="hidden" name="nulo" value="2">
			<input type="text" name="login" value="" id="inputMatricula" class="form-control" placeholder="Login(Matrícula)" required autofocus>
			<input type="password" name="senha" id="inputPassword" class="form-control" placeholder="Senha" required>
			<div id="remember" class="checkbox">


			</div>
			<button class="btn btn-lg btn-primary btn-block btn-signin" type="submit">Entrar</button>
			<br>





		</form><!-- /form -->
	</div><!-- /card-container -->
</div>


<!-- /container -->

