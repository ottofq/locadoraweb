function validarClienteSide() {
  var cpf = document.getElementById("CPF");
  var cnh = document.getElementById("CNH");
  var telefone = document.getElementById("Celular");
  var senha = document.getElementById("Senha");
  var senha2 = document.getElementById("Senha2");

  var validadorCPF = document.getElementById("CPFValidador");
  var validadorCNH = document.getElementById("CNHValidador");
  var validadorCelular = document.getElementById("CelularValidador");
  var validadorSenha = document.getElementById("SenhaValidador");

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

function validarServerSide(){
  var query = location.search;
  var erro = query.split("?erro=");

    console.log(query);
    console.log('partes',erro);

    if(erro[1] == 2){
        var cpf = document.getElementById("CPF");
        var validadorCPF = document.getElementById("CPFValidador");
        cpf.classList.add('is-invalid');
        validadorCPF.className = 'invalid-feedback';
        validadorCPF.innerHTML = "JÁ EXISTE UM CLIENTE COM ESSE CPF ASSOCIADO!";
    }

    if(erro[1] == 3){
      var cnh = document.getElementById("CNH");
      var validadorCNH = document.getElementById("CNHValidador");
      cnh.classList.add('is-invalid');
      validadorCNH.className = 'invalid-feedback';
      validadorCNH.innerHTML = "JÁ EXISTE UM CLIENTE COM ESSE CNH ASSOCIADO!";
  }

  if(erro[1] == 4){
    var email = document.getElementById("Email");
    var validadorEmail = document.getElementById("EmailValidador");
    email.classList.add('is-invalid');
    validadorEmail.className = 'invalid-feedback';
    validadorEmail.innerHTML = "JÁ EXISTE UM CLIENTE COM ESSE EMAIL ASSOCIADO!";
}
}

function validarDatas() {

    // Validação da data e horario de retirada

    var flagRetirada = false;
    var flagDevolucao = false;

    var dataRetirada = document.getElementById("dataRetirada").value;
    var horarioRetirada = document.getElementById("horarioRetirada").value;
    var dr = dataRetirada.split("-");
    var hr = horarioRetirada.toString().split(":");
    var ano = dr[0];
    var mes = dr[1]-1;
    var dia = dr[2];
    var hora = hr[0];
    var minutos = hr[1];
    var seg = "0";
    var mili = "0";

    var dataRetiradaEscolhida = new Date(ano, mes, dia, hora, minutos, seg, mili);
    var dataAtual = new Date();

    var difRetirada = dataRetiradaEscolhida.getTime() - dataAtual.getTime();
    if (difRetirada > 0) {
      if ((hora >= 8 && hora < 18) || (hora == 18 && minutos == 0)) {
        flagRetirada = true;
      }
    }

    // Validação da data e horario de entrega

    var dataDevolucao = document.getElementById("dataDevolucao").value;
    var horarioDevolucao = document.getElementById("horarioDevolucao").value;
    var dr = dataDevolucao.split("-");
    var hr = horarioDevolucao.toString().split(":");
    var ano = dr[0];
    var mes = dr[1]-1;
    var dia = dr[2];
    var hora = hr[0];
    var minutos = hr[1];
    var seg = "0";
    var mili = "0";

    var dataDevolucaoEscolhida = new Date(ano, mes, dia, hora, minutos, seg, mili);

    var dif = dataDevolucaoEscolhida.getTime() - dataRetiradaEscolhida.getTime();
    if (dif > 0) {
      if ((hora >= 8 && hora < 18) || (hora == 18 && minutos == 0)) {
        flagDevolucao = true;
      }
    }

    if (flagRetirada == true && flagDevolucao == true) {
      return true;
    } else {

      if (flagRetirada == false) {
        var erro = document.getElementById("erroDataRetirada");
        erro.classList.add("alert");
        erro.classList.add("alert-danger");
        erro.classList.add("p-1");
        erro.innerHTML = "Data ou horário inválido. Favor escolhê-los corretamente";
      } else {
        var erro = document.getElementById("erroDataRetirada");
        erro.classList.remove("alert");
        erro.classList.remove("alert-danger");
        erro.classList.remove("p-1");
        erro.innerHTML = "";
      }

      if (flagDevolucao == false) {
        var erro = document.getElementById("erroDataDevolucao");
        erro.classList.add("alert");
        erro.classList.add("alert-danger");
        erro.classList.add("p-1");
        erro.innerHTML = "Data ou horário inválido. Favor escolhê-los corretamente";
      } else {
        var erro = document.getElementById("erroDataDevolucao");
        erro.classList.remove("alert");
        erro.classList.remove("alert-danger");
        erro.classList.remove("p-1");
        erro.innerHTML = "";
      }

      return false;
    }
}
