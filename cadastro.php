<?php
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="cadastro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Phudu:wght@300..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Cadastro</title>
</head>

<body>
    <img src="img/FundoLogin2.jpg" class="fundoo">
    <img src="img/semfundo.png" alt="" class="back">
    <div class="fundo">
    <h1 class="titulo"> Cadastre-se</h1>
        <form action="cadastrar.php" method="POST">
            <div class="cadastro1">
                <img src="img/PerfilBranco.png" class="perfil">
                <input type="text" name="email" class="forms" placeholder="Email" required>
                <input type="text" name="nome" class="forms" placeholder="Nome" required>
                <input type="text" name="cpf" class="forms" placeholder="CPF" required>
                <input type="text" name="rg" class="forms" placeholder="RG" required>
                <input type="text" name="senha" class="forms" placeholder="Senha" required>
                <input type="text" name="senhaa" class="forms" placeholder="Confirmar Senha" required>
                <label>
                    <div class="checkboxx">
                    <input type="checkbox" name="termos" required>
                    <h1>Ao continuar você declara que leu e concorda com os
                        <a href="termosdeuso.php"> Termos de Uso </a>
                        e a
                        <a href="politica.php"> Política de Privicidade</a>
                        do AjudeAKI
                    </h1>
                    </div>
                </label>
                <button class='botao1'>Cadastrar-se </button>
            </div>
    </div>



    </form>