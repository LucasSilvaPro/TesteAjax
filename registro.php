<?php  

$nome=$_POST['nome'];
$email=$_POST['email'];
$senha=$_POST['password'];
$senhaConfirm=$_POST['passwordConfirm'];
$data=$_POST['data'];
$genero=$_POST['genero'];
$foto=$_FILES['foto'];

if (file_exists('Usuario.class.php')) {
	require_once('Usuario.class.php');
	$usuario= new Usuario();
	if ($usuario->validate($password,$passwordConfirm)){
		$usuario->setUsuario($nome);
		$usuario->setEmail($email);
		$usuario->setPassword($senha);
		$usuario->setData($data);
		$usuario->setGenero($genero);
		$usuario->setFoto($foto);
		if (!file_exists($usuario->getUsuario())) {
			mkdir("{$usuario->getUsuario()}",0777);
			move_uploaded_file($usuario->getFoto()['tmp_name'], "{$usuario->getUsuario()}/$usuario->getFoto()['name']");
			$arquivo=fopen("{$usuario->getUsuario()}/{$usuario->getUsuario()}.txt","w");
			fwrite($arquivo, "{$usuario->getUsuario()}\n{$usuario->getEmail()}\n{$usuario->getPassword()}\n{$usuario->getData()}\n{$usuario->getGenero()}\n{$usuario->getFoto()['name']}");
			fclose($arquivo);
		}		
	}
  }else{
  	header("Location: index.php");
  }
}

?>	x