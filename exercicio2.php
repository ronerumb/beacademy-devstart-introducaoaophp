<?php

$bandas = [
    ["nome" => "Exaltasamba", "genero" => "Pagode"],
    ["nome" => "Tchan", "genero" => "Axé"],
    ["nome" => "Gusttavo Lima", "genero" => "Sertanejo"]

];



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio2</title>
    <style>
        table,
        th,
        td {
            border: 1px solid black;
        }
    </style>
</head>

<body>


    <table>
        <tr>
            <th>Banda/Cantor</th>
            <th>Genero</th>
        </tr>
        <?php foreach ($bandas as $banda) { ?>
            <tr>
                <td><?php echo $banda["nome"]; ?></td>
                <td><?php echo $banda["genero"]; ?></td>

            </tr>

        <?php } ?>


    </table>


</body>

</html>