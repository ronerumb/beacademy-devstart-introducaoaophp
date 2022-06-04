<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio</title>
</head>

<body>

    <form action="" method="post">
        <input type="text" name="numero1" placeholder="Digite o primeiro numero"><br>
        <input type="text" name="numero2" placeholder="Digite o segundo numero"><br>
        <button name="adicao">Adição</button>
        <button name="multiplicacao">Multiplicação</button>
        <button name="divisao">Divisão</button>
        <button name="subtracao">Subtração</button>

    </form>

</body>

</html>

<?php


if (($_POST['numero1'] != '') and ($_POST['numero2'] != '')) {

    if (isset($_POST['adicao'])) {
        echo $_POST['numero1'] + $_POST['numero2'];
    }
    if (isset($_POST['divisao'])) {
        echo $_POST['numero1'] / $_POST['numero2'];
    }
    if (isset($_POST['multiplicacao'])) {
        echo $_POST['numero1'] * $_POST['numero2'];
    }
    if (isset($_POST['subtracao'])) {
        echo $_POST['numero1'] - $_POST['numero2'];
    }
} else {
    echo "Existe um campo vazio, preencha-o";
}
