function validacao(){
	if(document.form.nome.value==""){
		alert("Digite seu nome de usuario");
		document.form.nome.focus();
		return false;
	}
}
