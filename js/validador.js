function validacao() {
  var cpf = document.getElementById("validationCPF");
  var cnh = document.getElementById("validationCNH");
  var telefone = document.getElementById("validationCelular");
  var senha = document.getElementById("validationSenha");
  var senha2 = document.getElementById("validationSenha2");

  var validadorCPF = document.getElementById("CPFValidador");
  var validadorCNH = document.getElementById("CNHValidador");
  var validadorCelular = document.getElementById("CelularValidador");
  var validadorSenha = document.getElementById("SenhaValidador")

    if(cpf.value.length === 11){
        cpf.classList.add('is-valid');
        cpf.classList.remove('is-invalid');
        validadorCPF.className = 'valid-feedback';
        validadorCPF.innerHTML = "OK"
    }else{
        cpf.classList.add('is-invalid');
        validadorCPF.className = 'invalid-feedback';
        validadorCPF.innerHTML = "CPF INVÁLIDO!"
        return false;
    }

    if(cnh.value.length === 11){
        cnh.classList.add('is-valid');
        cnh.classList.remove('is-invalid');
        validadorCNH.className = 'valid-feedback';
        validadorCNH.innerHTML = "OK"
    }else{
        cnh.classList.add('is-invalid');
        validadorCNH.className = 'invalid-feedback';
        validadorCNH.innerHTML = "CNH Inválida, digite os 11 digitos válidos!"
        return false;
    }
    
    if(telefone.value.length === 15){
        telefone.classList.add('is-valid');
        telefone.classList.remove('is-invalid');
        validadorCelular.className ='valid-feedback';
        validadorCelular.innerHTML = "OK"
    }else{
        telefone.classList.add('is-invalid');
        validadorCelular.className = 'invalid-feedback';
        validadorCelular.innerHTML = "Digite o telefone corretamente!";
        return false;
    }

    if((senha.value.length === senha2.value.length) && (senha.value === senha2.value)){
        senha.classList.add('is-valid');
        senha.classList.remove('is-invalid');
        validadorSenha.className = 'valid-feedback'
        validadorSenha.innerHTML = 'As senhas conferem!'
    }else{
        senha.classList.add('is-invalid');
        validadorSenha.className = 'invalid-feedback';
        validadorSenha.innerHTML = "As senhas não são iguais!";
        return false;
    }

}

