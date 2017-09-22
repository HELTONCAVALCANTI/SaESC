<!--FORMULÁRIO UTILIZADO PARA INCLUIR E EDITAR DADOS DO USUARIO, com o POST e value os campos são preenchidos caso o formulário seja utilizado para alterar os dados.-->

<div class="form-group">
	<label class="control-label col-sm-2"  for="matricula">Matrícula:</label>
	<div class="col-sm-10"> <!--os dados do input serão preenchidos caso o form seja utilizado para alterar os dados do usuario-->
		<input type="text" name="matricula" class="form-control" id="matricula" placeholder="Informe a matricula" title="Informe sua matrícula" required <?php if(isset($_POST['matricula'])){echo "value = '".$matricula."'";}?>>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2"  for="nome">Nome:</label>
	<div class="col-sm-10">
		<input type="text" name="nome" class="form-control" id="nome" placeholder="Informe o nome completo" title="Insira seu nome completo" required <?php if(isset($_POST['nome'])){echo "value = '".$nome."'";}?>>
	</div>
</div>

<div class="form-group">
	<label class="control-label col-sm-2"  for="endereco">Endereço:</label>
	<div class="col-sm-10">
		<input type="text" name="endereco" class="form-control" id="endereco" placeholder="Informe o endereço" title="Informe seu endereço required" <?php if(isset($_POST['endereco'])){echo "value = '".$endereco."'";}?>>
	</div> 
</div>

<div class="form-group">
	<label class="control-label col-sm-2"  for="email">E-mail:</label>
	<div class="col-sm-10">
		<input type="text" name="email" class="form-control" id="email" placeholder="Informe o e-mail" title="Digite seu email para cadastro" required <?php if(isset($_POST['email'])){echo "value = '".$email."'";}?>>
	</div>
</div>

<div class="form-group"> 
<label class="control-label col-sm-2"  for="cre">Senha:</label>
	<div class="col-sm-10">
		<input type="password" name="senha" class="form-control" id="senha" placeholder="Informe a senha com até 6 dígitos" title="Digite uma senha com no mínimo 6 digitos">
	</div> 
</div>

<!--Select com turmas para viculação do aluno-->
<div class="form-group"> 
	<label class="control-label col-sm-2"  for="cre">Selecione a turma para vincular o aluno:</label>
	<div class="col-sm-10">
		<select type="select" name="vinc_aluno_turma" class="form-control" id="vinc_turma" placeholder="Informe a senha com até 6 dígitos" title="Selecione uma turma para vincular">


			<optgroup label="Fundamental">
				<option value="1ef">1º Ano</option>
				<option value="2ef">2º Ano</option>
				<option value="3ef">3º Ano</option>
				<option value="4ef">4º Ano</option>
				<option value="5ef">5º Ano</option>
				<option value="6ef">6º Ano</option>
				<option value="7ef">7º Ano</option>
				<option value="8ef">8º Ano</option>
				<option value="9ef">9º Ano</option>
			</optgroup>
			<optgroup label="Médio">
				<option value="1em">1º Ano Ensino Medio</option>
				<option value="2em">2º Ano Ensino Medio</option>
				<option value="3em">3º Ano Ensino Medio</option>
			</optgroup>	
		</select>


	</div> 
</div>
<!--fim do select-->


</div>		
<div class="form-group">        
	<div class="col-sm-offset-2 col-sm-10">
		<button type="submit" class="btn btn-primary"><?php if(isset($_POST['matricula'])){echo "Salvar";}else{echo "Enviar";}?></button> <!--Botão alterado de acordo com o uso do form-->
		<button type="reset" class="btn btn-warning"<?php if(isset($_POST['matricula'])){echo "disabled";}else{echo "Limpar campos";}?>>Limpar</button> <!--Botão alterado de acordo com o uso do form-->
		<button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
	</div>
</div>

</fieldset>