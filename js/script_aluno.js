function valida_campos(){
    let nome  = document.getElementById('nome').value;
    let dn = document.getElementById('dn').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    let escola = document.getElementById('escola').value;
    let codigo_aluno  = document.getElementById('codigo_aluno').value;
        

    if(nome.length> 0 && dn.length > 0 && email.length > 0 && senha.length > 0 && escola.length > 0 && codigo_aluno.length > 0) {
        document.getElementById("cadastrar-aluno").style.visibility = "initial";
    } else{
        document.getElementById("cadastrar-aluno").style.visibility = "hidden";
    }

}

