<?php
$a1 = [
    'nome' => 'Chiquinho',
    'email' => 'chiquinho@gmail.com',
    'telefone' => '909-000',
    'nota' => [
        9,
        8,
        7,
        7,
    ]
];

$a2 = [
    'nome' => 'Maria',
    'email' => 'maria@gmail.com',
    'telefone' => '0909-000',
    'nota' => [
        10,
        10,
        10,
        10,
    ]
];
$alunos = [
    $a1,
    $a2,
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio3</title>
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
        <thead>
            <tr>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Nota 1</th>
                <th>Nota 2</th>
                <th>Nota 3</th>
                <th>Nota 4</th>
                <th>Media</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno) { ?>
                <tr>
                    <td><?php echo $aluno["nome"]; ?></td>
                    <td><?php echo $aluno["email"]; ?></td>
                    <td><?php echo $aluno["telefone"]; ?></td>
                    <?php for ($i = 0; $i < count($aluno["nota"]); $i++) { ?>
                        <td><?php echo $aluno["nota"][$i]; ?></td>
                    <?php } ?>
                    <td><?php echo array_sum($aluno["nota"]) / count($aluno["nota"]); ?></td>

                </tr>

            <?php } ?>
        </tbody>


    </table>


</body>

</html>