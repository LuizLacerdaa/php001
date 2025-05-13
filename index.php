<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>

<body>
    <h1>Aula 001 de PHP </h1>
    <hr>

    <?php
    echo "<h2>Variavel</h2>";
    $nome = "Luiz Lacerda";
    $idade = 21;
    $fumante = False;
    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Fumante: " ;

    if ($fumante == true){
        echo "Sim";
    }else{
        echo "Não";
    }
    



    ?>

</body>

</html>