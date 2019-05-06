
function ativador(){
	let form=document.getElementById("formA");
	if (form.elements[2].value.length>7) {
		if (form.elements[3].value===form.elements[2].value) {
			requisitarArquivo("nothing.php" ,"error2");
		}else{
			requisitarArquivo("errorConfirmacao.php" ,"error2");
		}
		requisitarArquivo("nothing.php" ,"error1");
	}else{
		requisitarArquivo("errorTamanho.php","error1");
	}
};