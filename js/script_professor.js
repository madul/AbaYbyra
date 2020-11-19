function valida_campos(){
    let nome  = document.getElementById('nome').value;
    let email = document.getElementById('email').value;
    let senha = document.getElementById('senha').value;
    let escola = document.getElementById('escola').value;
    let codigo_professor  = document.getElementById('codigo_professor').value;
    
        if(nome.length > 0 && email.length > 0 && senha.length> 0 && escola.length > 0 && codigo_professor.length > 0) {
            document.getElementById("cadastrar-professor").style.visibility = "initial";
        } else{
            document.getElementById("cadastrar-professor").style.visibility = "hidden";
        }
    
    }

    