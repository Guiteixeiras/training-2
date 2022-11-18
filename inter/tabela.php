<?php $info = [
    ['joao', 'M', 'Portugal'],
    ['ana', "F", "Brasil"],
    ["carlos", 'M', 'Angola'],
    ["matilde", "F", 'moçambique'],
];

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tabela</title>
</head>

<body>

    <table border="5">
        <thead>
            <tr>
                <th>Nome</th>
                <th>Gênero</th>
                <th>País</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($info as $tabela) : ?>
                <tr>
                    <td><?= $tabela[0] ?></td>
                    <td><?= $tabela[1] ?></td>
                    <td><?= $tabela[2] ?></td>
                </tr>
            <?php endforeach; ?>

        </tbody>
    </table>



</body>

</html>