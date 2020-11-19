function valida_campos(){
    let nome  = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    let nome_resp = document.getElementById('nome_resp').value;
    let endereco  = document.getElementById('endereco').value;
    let codigo_aluno  = document.getElementById('codigo_aluno').value;
    let codigo_professor = document.getElementById('codigo_professor').value;

    if(nome.length > 0 && email.length > 0 && senha.length > 0 && nome_resp.length > 0 && endereco.length > 0 && codigo_aluno.length > 0 && codigo_professor.length > 0) {
        document.getElementById("cadastrar-escola").style.visibility = "initial";
    } else{
        document.getElementById("cadastrar-escola").style.visibility = "hidden";
    }

}
