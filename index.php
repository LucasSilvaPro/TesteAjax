<?php 

	echo "<link rel='stylesheet' href='css/uikit.css'>
	<link rel='stylesheet' href='css/uikit-rtl.css'>
	<link rel='stylesheet' href='css/css.css'><br>";

	echo "
	<center>
		<form method='post' id='form' action='registro.php' enctype='multipart/form-data'><br>
			<label id='title'>CADASTRO<label><br><br>
			<span class='uk-margin-small-right' uk-icon='user' ratio='1.5'></span><br>
			<label>Usuario<label><br>
			<input type='text' class='uk-input uk-form-width-large' name='nome' required /><br><br>
			<span class='uk-margin-small-right' uk-icon='mail' ratio='1.5'></span><br>
			<label>Email<label><br>
			<input type='text' class='uk-input uk-form-width-large' name='email' required /><br><br>
			<span class='uk-margin-small-right' uk-icon='lock' ratio='1.5'></span><br>
			<label>Senha<label><br>
			<input type='password' class='uk-input uk-form-width-large' name='password' onkeyup='ativador()' required/><br><br>
			<div id='error1'></div>
			<span class='uk-margin-small-right' uk-icon='lock' ratio='1.5'></span><br> 
			<label>Confirme sua senha<label><br>
			<input type='password' class='uk-input uk-form-width-large' name='passwordConfirm' onkeyup='ativador()' required/><br><br>
			<div id='error2'></div>
			<span class='uk-margin-small-right' uk-icon='star' ratio='1.5'></span><br>
			<label>Data de Nascimento<label><br>
			<input type='date' class='uk-input uk-form-width-large' name='data' />
			<label>Genero<label><br><br>
			<input class='uk-radio' type='radio' name='genero' checked /><label>Masculino<label/>
			<input class='uk-radio' type='radio' name='genero'/><label>Feminino<label/>
			<input class='uk-radio' type='radio' name='genero' /><label>Prefiro não responder<label/>
			<br><br>
			<label>Foto de Perfil<label><br>
			<input type='file' class='uk-input uk-form-width-large' name='foto' /><br><br>
			<input id='buton' type='submit' class='uk-button uk-button-secondary' value='cadastrar' />

		</form>
	</center>
	 ";

	 echo "
	<script src='js/uikit.js'></script>
	<script src='js/uikit-icons.js'></script>
	<script src='js/ajax.js'></script>
	<script src='js/javinha.js'></script>
	  ";
	
?>