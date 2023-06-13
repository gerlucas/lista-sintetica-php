<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFS do Brasil</title>
</head>
<body>
<?php

$estados = [
    'Acre' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/45px-Bandeira_do_Acre.svg.png',
        'unidade_federativa' => 'Acre',
        'abreviacao' => 'AC',
        'sede_governo' => 'Rio Branco',
        'area' => '164 122,2',
        'populacao' => '795 145',
        'densidade' => '4,30',
        'pib' => '13 622 000',
        'pib_percentual_total' => '0,2',
        'pib_per_capita' => '16 953,46',
        'idh' => '0,663',
        'alfabetizacao' => '86,9%',
        'mortalidade_infantil' => '17,0‰',
        'expectativa_vida' => '73,9 anos'
    ],
];

echo '<table border="1">';
echo '<tr><th>Bandeira</th><th>Unidade Federativa</th><th>Abreviação</th><th>Sede de Governo</th><th>Área (km²)</th><th>População (2014)</th><th>Densidade (2005)</th><th>PIB (2015)</th><th>(% total) (2015)</th><th>PIB per capita (R$) (2015)</th><th>IDH (2010)</th><th>Alfabetização (2016)</th><th>Mortalidade Infantil (2016)</th><th>Expectativa de Vida (2016)</th></tr>';

foreach ($estados as $estado => $dados) {
    echo '<tr>';
    echo '<td><a href="' . $dados['bandeira'] . '"><img src="' . $dados['bandeira'] . '" alt="' . $dados['unidade_federativa'] . '" width="45" height="32"></a></td>';
    echo '<td>' . $dados['unidade_federativa'] . '</td>';
    echo '<td>' . $dados['abreviacao'] . '</td>';
    echo '<td>' . $dados['sede_governo'] . '</td>';
    echo '<td>' . $dados['area'] . '</td>';
    echo '<td>' . $dados['populacao'] . '</td>';
    echo '<td>' . $dados['densidade'] . '</td>';
    echo '<td>' . $dados['pib'] . '</td>';
    echo '<td>' . $dados['pib_percentual_total'] . '</td>';
    echo '<td>' . $dados['pib_per_capita'] . '</td>';
    echo '<td>' . $dados['idh'] . '</td>';
    echo '<td>' . $dados['alfabetizacao'] . '</td>';
    echo '<td>' . $dados['mortalidade_infantil'] . '</td>';
    echo '<td>' . $dados['expectativa_vida'] . '</td>';
    echo '</tr>';
}

echo '</table>';
?>

</body>
</html>
