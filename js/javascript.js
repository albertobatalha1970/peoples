function validacao(){
	if(document.form.nome.value.length >10){
		window.alert("Seu nome de usuario deve conter no m�ximo, 10 caracteres");
		document.form.nome.focus();
		return false;
	}

	
	
	
	if(document.form.fone.value.length >12){
		window.alert("Preencha corretamente, este campo com o n�mero do seu celular");
		document.form.fone.focus();
		return false;
	}



	if(document.form.password.value.length >8){
		window.alert("Sua senha deve conter no m�ximo, 8 caracteres");
		document.form.password.focus();
		return false;
	}

if(document.form.foto.value==""){
		window.alert("Escolha uma imagem para enviar");
		document.form.foto.focus();
		return false;
	}
	
}
