<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            height: 50vh;
            background-color: black;
            color: white;
            font-size: 1rem;
        }
    </style>
    <title>Aula 06</title>
</head>
<body>
    <pre>
    <?php 
       require "class_controle.php";

       $controle1 = new ControleRemoto;
       
       $controle1->desligar();

       $controle1->abrirMenu();

       print_r($controle1);
       
    ?>
    </pre>
</body>
</html>
