//aula de Ajax
function iniciandoAjax(){ //iniciando Ajax
	var objAjax = false; //variavel que vai receber o objeto ajax
	if(window.XMLHttpRequest){// Firefox e demais browsers
		objAjax = new XMLHttpRequest();
	}else if(window.ActiveXObject){ //verifica se é o IE                                                
		try{// versão mais atualizada da Microsoft
			objAjax = new ActiveXObject("Msxml.XMLHTTP");
		}catch(e){
			try{
				objAjax = new ActiveXObject("Microsoft.XMLHTTP");
			}catch(e){
				objAjax = false;
			}
		}
	}else{
		alert("Seu browser não suporta AJAX.");
	}
	return objAjax;
}
function mostraResposta(ajax, element){//passando o elemento como parâmetro e o ajax
	if(ajax.readyState == 4){
		if(ajax.status == 200){	
			let e = document.getElementById(element);
			e.innerHTML = ajax.responseText;
		}else{
			alert("Erro na comunicação");
			
		}
	}
};
function requisitarArquivo(file, element){
	var ajax = iniciandoAjax();
	if(ajax){
		ajax.onreadystatechange = function(){ //é executado quando o estado da requisição muda
			mostraResposta(ajax, element);
		}
	}
	ajax.open("GET", file);
	ajax.send(null); 
}