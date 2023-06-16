<?php
 ini_set("display_errors", "1");
 error_reporting(E_ALL);

    if(isset($_POST['submit']))
    {
        print_r($_POST['nome'])
        print_r($_POST['email'])
        print_r($_POST['senha'])
    }

?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Form</title>
    <link rel="stylesheet" href="/Site/css/style.css">
    <link rel="stylesheet" href="/Site/php/config.php">
</head>
<body>
    <main>
        <h1>Crie Sua Conta</h1>
        <div class="social-media">
            <a href="#">
                <img src="/Site/img/google.png" alt="Google">
            </a>
            <a href="#">
                <img src="/Site/img/facebook.png" alt="Facebook">
            </a>
            <a href="#">
                <img src="/Site/img/linkedin.png" alt="linkedin">
            </a>
        </div>

        <div class="alternative">
            <span>OU</span>
        </div>

        <form action="/Site/php/config.php" method="POST">
            <label for="name">
                <span>Nome</span>
                <input type="text" id="name" name="name">
            </label>

            <label for="email">
                <span>E-mail</span>
                <input type="email" id="email" name="email">
            </label>

            <label for="password">
                <span>Senha</span>
                <input type="password" id="password" name="senha">
            </label>

            <input type="submit" value="submit" id="submit">
        </form>
    </main>
    <section class="images">
        <img src="/Site/img/mobile.svg" alt="Mobile">
        <div class="circle"></div>
    </section>
</body>
</html>