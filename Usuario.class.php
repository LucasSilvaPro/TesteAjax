<?php  

class Usuario{
	private $nome;
	private $email;
	private $password;
	private $passwordConfirm;
	private $data;
	private $genero;
	private $foto;

	function getUsuario(){
		return $this->nome;
	}
	function setUsuario($u){
		$this->nome=$u;
	}
	function getEmail(){
		return $this->email;
	}
	function setEmail($e){
		$this->email=$e;
	}
	function getPassword(){
		return $this->password;
	}
	function setPassword($p){
		$this->password=$p;
	}
	function getData(){
		return $this->data;
	}
	function setData($d){
		$this->data=$d;
	}
	function getGenero(){
		return $this->genero;
	}
	function setGenero($g){
		$this->genero=$g;
	}
	function getFoto(){
		return $this->foto;
	}
	function setFoto($f){
		$this->foto=$f;
	}
	function validate($p,$pC){
		if ($pC===$p) {
			return True;
		}else{
			return False;
		}
	}

}

?>