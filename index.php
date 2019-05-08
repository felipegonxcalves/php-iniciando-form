<?php

    if ($_SERVER['REQUEST_METHOD'] == 'POST'){
        //FILTRO PARA CARACTERES DE HTML
        $nome = trim(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS)); // PEGA UM POR UM

        //FILTRO DE LIMPEZA PARA INTEIRO
        $idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT); // PEGA UM POR UM
        var_dump($nome);
        var_dump($idade);

        //PEGA TODOS DE UMA VEZ
        $data = filter_input_array(INPUT_POST);
        var_dump($data);
    }
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Digite o nome">
        <input type="text" name="idade" placeholder="Digite a idade">
        <input type="submit" value="enviar">
    </form>
</body>
</html>
