<?php include ("validaSessao.php")?>

<meta charset="UTF-8">


<?php if(isset($_SESSION['logado'])):?>




<?php else:?>
	<script>alert('Você não tem permissão para acessar esta página, você precisa fazer login para ter acesso!')</script>
	<?php echo "<meta http-equiv=refresh content=0;url=../view/login.php>";?>
<?php endif;?>