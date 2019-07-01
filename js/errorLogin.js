function error(){
    var erro = document.getElementById('error');
          erro.classList.add('alert');
          erro.classList.add('alert-danger');
          erro.innerHTML = 'Login Incorreto! Digite a senha e o email corretamente!';
          console.log(erro);
          return true;
}