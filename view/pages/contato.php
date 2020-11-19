<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <?php require_once('./php/includes/links-header.php');?>

    <title>Aba Ybyra</title>
</head>

<body>
    <?php require_once("./php/includes/header.php");?>


<section class="content">

    <div class="contato">
        <center>
            <h2>Contato</h2>
            <center>
                <form class="form" method="POST" action="./email.php">
                    <input class="field" name="name" placeholder="Nome" type="text">
                    <input class="field" name="email" placeholder="E-mail" type="text">
                    <input class="field" name="assunto" placeholder="Assunto" type="text">
                    <textarea class="field" name="message" placeholder="Digite sua mensagem aqui..."></textarea>
                    <input class="field" type="submit" value="Enviar">
                </form>
    </div>
    <div class="mapas">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3657.0671107903863!2d-46.75801658487099!3d-23.566033067650267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce55e14edd0381%3A0x8d6bf2c426264628!2sAv.%20Escola%20Polit%C3%A9cnica%20-%20Rio%20Pequeno%2C%20S%C3%A3o%20Paulo%20-%20SP!5e0!3m2!1sen!2sbr!4v1604264326242!5m2!1sen!2sbr"
            width="600" height="450" frameborder="0" style="border:2px solid #228B22" allowfullscreen=""
            aria-hidden="false" tabindex="0"></iframe>
        <p>Nosso Endereço:</p>
        <p>Avenida Escola Politécnica, São Paulo-SP
        <p>
    </div>
</section>
</div>
</body>
</html>
