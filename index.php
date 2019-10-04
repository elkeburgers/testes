<?php
//    var_dump($_GET);
//    var_dump($_POST);
    var_dump($_REQUEST);

//    echo "Seja bem vindo ".$_GET["nome"]." ".$_GET["sobrenome"];

//    if($_GET["nome"] != "elke"){
//    if($_GET["nome"] != "vinicius"){
//        echo "Não é a Elke!";
//    }else{
//        echo "Eai Elke?";
//    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<!-- adicionando informação get no post -->
<!--    <form method="post" action="index.php?idade=13"> -->
<!-- action informando para encaminhar as informações do formulario para outra pagina -->
    <form method="post" action="receber.php?QUALQUER=COISA">
    <!-- input não invisivel sem o usuario saber -->
        <input type="text" name="idade" id="13" hidden>
        <input type="text" name="nome" id="">
        <input type="text" name="sobrenome" id="">
            <button type="submit">Enviar</button>
    </form>
</body>
</html>

