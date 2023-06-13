<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Sintética de UFS do Brasil</title>
    <link rel="stylesheet" href="style.css">
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
    'Alagoas' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Bandeira_de_Alagoas.svg/45px-Bandeira_de_Alagoas.svg.png',
        'unidade_federativa' => 'Alagoas',
        'abreviacao' => 'AL',
        'sede_governo' => 'Maceió',
        'area' => '27 767,7',
        'populacao' => '3 327 551',
        'densidade' => '108,61',
        'pib' => '46 364 000',
        'pib_percentual_total' => '0,8',
        'pib_per_capita' => '13 877,53',
        'idh' => '0,631',
        'alfabetizacao' => '80,6%',
        'mortalidade_infantil' => '19,5‰',
        'expectativa_vida' => '71,6 anos'
    ],
    'Amapá' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Bandeira_do_Amapá.svg/45px-Bandeira_do_Amapá.svg.png',
        'unidade_federativa' => 'Amapá',
        'abreviacao' => 'AP',
        'sede_governo' => 'Macapá',
        'area' => '142 814,6',
        'populacao' => '756 500',
        'densidade' => '4,16',
        'pib' => '13 861 000',
        'pib_percentual_total' => '0,2',
        'pib_per_capita' => '18 079,54',
        'idh' => '0,708',
        'alfabetizacao' => '95%',
        'mortalidade_infantil' => '23,2‰',
        'expectativa_vida' => '73,9 anos'
    ],
    'Amazonas' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Bandeira_do_Amazonas.svg/45px-Bandeira_do_Amazonas.svg.png',
        'unidade_federativa' => 'Amazonas',
        'abreviacao' => 'AM',
        'sede_governo' => 'Manaus',
        'area' => '1 570 745,7',
        'populacao' => '3 893 763',
        'densidade' => '2,05',
        'pib' => '86 560 000',
        'pib_percentual_total' => '1,4',
        'pib_per_capita' => '21 978,95',
        'idh' => '0,674',
        'alfabetizacao' => '93,1%',
        'mortalidade_infantil' => '18,2‰',
        'expectativa_vida' => '71,9 anos'
    ],
    'Bahia' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Bandeira_da_Bahia.svg/45px-Bandeira_da_Bahia.svg.png',
        'unidade_federativa' => 'Bahia',
        'abreviacao' => 'BA',
        'sede_governo' => 'Salvador',
        'area' => '564 692,7',
        'populacao' => '15 150 143',
        'densidade' => '24,46',
        'pib' => '245 025 000',
        'pib_percentual_total' => '4,1',
        'pib_per_capita' => '16 115,89',
        'idh' => '0,660',
        'alfabetizacao' => '87%',
        'mortalidade_infantil' => '17,3‰',
        'expectativa_vida' => '73,5 anos'
    ],
    'Ceará' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bandeira_do_Cear%C3%A1.svg/1280px-Bandeira_do_Cear%C3%A1.svg.png',
        'unidade_federativa' => 'Ceará',
        'abreviacao' => 'CE',
        'sede_governo' => 'Fortaleza',
        'area' => '148 825,6',
        'populacao' => '8 867 448',
        'densidade' => '54,40',
        'pib' => '130 621 000',
        'pib_percentual_total' => '2,2',
        'pib_per_capita' => '14 669,14',
        'idh' => '0,682',
        'alfabetizacao' => '84,8%',
        'mortalidade_infantil' => '14,4‰',
        'expectativa_vida' => '73,8 anos'
    ],
    'Distrito Federal' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg/45px-Bandeira_do_Distrito_Federal_%28Brasil%29.svg.png',
        'unidade_federativa' => 'Distrito Federal',
        'abreviacao' => 'DF',
        'sede_governo' => 'Brasília',
        'area' => '5 822,1',
        'populacao' => '2 867 869',
        'densidade' => '400,73',
        'pib' => '215 613 000',
        'pib_percentual_total' => '3,6',
        'pib_per_capita' => '73 971,05',
        'idh' => '0,824',
        'alfabetizacao' => '97,4%',
        'mortalidade_infantil' => '10,5‰',
        'expectativa_vida' => '78,1 anos'
    ],
    'Espírito Santo' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Bandeira_do_Espírito_Santo.svg/45px-Bandeira_do_Espírito_Santo.svg.png',
        'unidade_federativa' => 'Espírito Santo',
        'abreviacao' => 'ES',
        'sede_governo' => 'Vitória',
        'area' => '46 077,5',
        'populacao' => '3 894 899',
        'densidade' => '73,97',
        'pib' => '120 363 000',
        'pib_percentual_total' => '2',
        'pib_per_capita' => '30 627,45',
        'idh' => '0,740',
        'alfabetizacao' => '93,8%',
        'mortalidade_infantil' => '8,8‰',
        'expectativa_vida' => '78,2 anos'
    ],
    'Goiás' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_Goiás.svg/45px-Flag_of_Goiás.svg.png',
        'unidade_federativa' => 'Goiás',
        'abreviacao' => 'GO',
        'sede_governo' => 'Goiânia',
        'area' => '340 086,7',
        'populacao' => '6 551 322',
        'densidade' => '16,52',
        'pib' => '173 632 000',
        'pib_percentual_total' => '2,9',
        'pib_per_capita' => '26 265,32',
        'idh' => '0,735',
        'alfabetizacao' => '93,5%',
        'mortalidade_infantil' => '14,9‰',
        'expectativa_vida' => '74,2 anos'
    ],
    'Maranhão' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Bandeira_do_Maranhão.svg/45px-Bandeira_do_Maranhão.svg.png',
        'unidade_federativa' => 'Maranhão',
        'abreviacao' => 'MA',
        'sede_governo' => 'São Luís',
        'area' => '331 983,3',
        'populacao' => '6 861 924',
        'densidade' => '18,38',
        'pib' => '78 475 000',
        'pib_percentual_total' => '1,3',
        'pib_per_capita' => '11 366,23',
        'idh' => '0,639',
        'alfabetizacao' => '83,9%',
        'mortalidade_infantil' => '18,6‰',
        'expectativa_vida' => '70,8 anos'
    ],
    'Mato Grosso' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/45px-Bandeira_de_Mato_Grosso.svg.png',
        'unidade_federativa' => 'Mato Grosso',
        'abreviacao' => 'MT',
        'sede_governo' => 'Cuiabá',
        'area' => '903 378,3',
        'populacao' => '3 526 220',
        'densidade' => '3,90',
        'pib' => '132 239 000',
        'pib_percentual_total' => '2,2',
        'pib_per_capita' => '37 826,11',
        'idh' => '0,735',
        'alfabetizacao' => '92,2%',
        'mortalidade_infantil' => '16,3‰',
        'expectativa_vida' => '75,1 anos'
    ],
    'Mato Grosso do Sul' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg/45px-Bandeira_de_Mato_Grosso_do_Sul.svg.png',
        'unidade_federativa' => 'Mato Grosso do Sul',
        'abreviacao' => 'MS',
        'sede_governo' => 'Campo Grande',
        'area' => '357 145,5',
        'populacao' => '2 809 394',
        'densidade' => '7,72',
        'pib' => '103 282 000',
        'pib_percentual_total' => '1,7',
        'pib_per_capita' => '38 116,29',
        'idh' => '0,758',
        'alfabetizacao' => '94,5%',
        'mortalidade_infantil' => '11,7‰',
        'expectativa_vida' => '76,3 anos'
    ],
    'Minas Gerais' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Bandeira_de_Minas_Gerais.svg/45px-Bandeira_de_Minas_Gerais.svg.png',
        'unidade_federativa' => 'Minas Gerais',
        'abreviacao' => 'MG',
        'sede_governo' => 'Belo Horizonte',
        'area' => '586 522,1',
        'populacao' => '21 292 666',
        'densidade' => '36,24',
        'pib' => '614 964 000',
        'pib_percentual_total' => '10,3',
        'pib_per_capita' => '28 913,73',
        'idh' => '0,731',
        'alfabetizacao' => '92,4%',
        'mortalidade_infantil' => '10,6‰',
        'expectativa_vida' => '75,9 anos'
    ],
    'Pará' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bandeira_do_Pará.svg/45px-Bandeira_do_Pará.svg.png',
        'unidade_federativa' => 'Pará',
        'abreviacao' => 'PA',
        'sede_governo' => 'Belém',
        'area' => '1 247 689,5',
        'populacao' => '8 690 745',
        'densidade' => '6,87',
        'pib' => '117 474 000',
        'pib_percentual_total' => '2',
        'pib_per_capita' => '14 532,63',
        'idh' => '0,666',
        'alfabetizacao' => '90,9%',
        'mortalidade_infantil' => '17,7‰',
        'expectativa_vida' => '71,6 anos'
    ],
    'Paraíba' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Bandeira_da_Paraíba.svg/45px-Bandeira_da_Paraíba.svg.png',
        'unidade_federativa' => 'Paraíba',
        'abreviacao' => 'PB',
        'sede_governo' => 'João Pessoa',
        'area' => '56 439,8',
        'populacao' => '4 051 859',
        'densidade' => '68,59',
        'pib' => '53 137 000',
        'pib_percentual_total' => '0,9',
        'pib_per_capita' => '13 234,08',
        'idh' => '0,699',
        'alfabetizacao' => '85,7%',
        'mortalidade_infantil' => '14,6‰',
        'expectativa_vida' => '75,6 anos'
    ],
    'Paraná' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paraná.svg/45px-Bandeira_do_Paraná.svg.png',
        'unidade_federativa' => 'Paraná',
        'abreviacao' => 'PR',
        'sede_governo' => 'Curitiba',
        'area' => '199 307,9',
        'populacao' => '11 516 840',
        'densidade' => '57,78',
        'pib' => '486 968 000',
        'pib_percentual_total' => '8,1',
        'pib_per_capita' => '42 135,48',
        'idh' => '0,758',
        'alfabetizacao' => '95,4%',
        'mortalidade_infantil' => '9,9‰',
        'expectativa_vida' => '77,3 anos'
    ],
    'Pernambuco' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Bandeira_de_Pernambuco.svg/45px-Bandeira_de_Pernambuco.svg.png',
        'unidade_federativa' => 'Pernambuco',
        'abreviacao' => 'PE',
        'sede_governo' => 'Recife',
        'area' => '98 311,6',
        'populacao' => '9 616 621',
        'densidade' => '92,49',
        'pib' => '216 042 000',
        'pib_percentual_total' => '3,6',
        'pib_per_capita' => '22 461,54',
        'idh' => '0,730',
        'alfabetizacao' => '93,5%',
        'mortalidade_infantil' => '13,7‰',
        'expectativa_vida' => '73,7 anos'
    ],
    'Piauí' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Bandeira_do_Piauí.svg/45px-Bandeira_do_Piauí.svg.png',
        'unidade_federativa' => 'Piauí',
        'abreviacao' => 'PI',
        'sede_governo' => 'Teresina',
        'area' => '251 529,2',
        'populacao' => '3 281 480',
        'densidade' => '13,03',
        'pib' => '49 438 000',
        'pib_percentual_total' => '0,8',
        'pib_per_capita' => '14 506,12',
        'idh' => '0,694',
        'alfabetizacao' => '87,3%',
        'mortalidade_infantil' => '16,1‰',
        'expectativa_vida' => '71,8 anos'
    ],
    'Rio de Janeiro' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg/45px-Bandeira_do_estado_do_Rio_de_Janeiro.svg.png',
        'unidade_federativa' => 'Rio de Janeiro',
        'abreviacao' => 'RJ',
        'sede_governo' => 'Rio de Janeiro',
        'area' => '43 696,1',
        'populacao' => '17 366 189',
        'densidade' => '396,44',
        'pib' => '736 776 000',
        'pib_percentual_total' => '12,3',
        'pib_per_capita' => '42 461,25',
        'idh' => '0,799',
        'alfabetizacao' => '95,5%',
        'mortalidade_infantil' => '8,8‰',
        'expectativa_vida' => '76,1 anos'
    ],
    'Rio Grande do Norte' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bandeira_do_Rio_Grande_do_Norte.svg/45px-Bandeira_do_Rio_Grande_do_Norte.svg.png',
        'unidade_federativa' => 'Rio Grande do Norte',
        'abreviacao' => 'RN',
        'sede_governo' => 'Natal',
        'area' => '52 796,8',
        'populacao' => '3 534 165',
        'densidade' => '66,93',
        'pib' => '63 651 000',
        'pib_percentual_total' => '1,1',
        'pib_per_capita' => '17 921,46',
        'idh' => '0,682',
        'alfabetizacao' => '94,1%',
        'mortalidade_infantil' => '14,8‰',
        'expectativa_vida' => '75,6 anos'
    ],
    'Rio Grande do Sul' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Bandeira_do_Rio_Grande_do_Sul.svg/45px-Bandeira_do_Rio_Grande_do_Sul.svg.png',
        'unidade_federativa' => 'Rio Grande do Sul',
        'abreviacao' => 'RS',
        'sede_governo' => 'Porto Alegre',
        'area' => '281 748,5',
        'populacao' => '11 433 957',
        'densidade' => '40,57',
        'pib' => '530 013 000',
        'pib_percentual_total' => '8,8',
        'pib_per_capita' => '46 321,87',
        'idh' => '0,746',
        'alfabetizacao' => '97,4%',
        'mortalidade_infantil' => '8,6‰',
        'expectativa_vida' => '77,6 anos'
    ],
    'Rondônia' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Bandeira_de_Rondônia.svg/45px-Bandeira_de_Rondônia.svg.png',
        'unidade_federativa' => 'Rondônia',
        'abreviacao' => 'RO',
        'sede_governo' => 'Porto Velho',
        'area' => '237 590,7',
        'populacao' => '1 845 093',
        'densidade' => '7,76',
        'pib' => '47 044 000',
        'pib_percentual_total' => '0,8',
        'pib_per_capita' => '26 741,70',
        'idh' => '0,692',
        'alfabetizacao' => '94,6%',
        'mortalidade_infantil' => '17,2‰',
        'expectativa_vida' => '73,6 anos'
    ],
    'Roraima' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Bandeira_de_Roraima.svg/45px-Bandeira_de_Roraima.svg.png',
        'unidade_federativa' => 'Roraima',
        'abreviacao' => 'RR',
        'sede_governo' => 'Boa Vista',
        'area' => '224 299,0',
        'populacao' => '672 682',
        'densidade' => '2,96',
        'pib' => '13 642 000',
        'pib_percentual_total' => '0,2',
        'pib_per_capita' => '19 812,07',
        'idh' => '0,711',
        'alfabetizacao' => '94,5%',
        'mortalidade_infantil' => '15,2‰',
        'expectativa_vida' => '73,6 anos'
    ],
    'Santa Catarina' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bandeira_de_Santa_Catarina.svg/45px-Bandeira_de_Santa_Catarina.svg.png',
        'unidade_federativa' => 'Santa Catarina',
        'abreviacao' => 'SC',
        'sede_governo' => 'Florianópolis',
        'area' => '95 736,2',
        'populacao' => '7 317 832',
        'densidade' => '76,44',
        'pib' => '297 548 000',
        'pib_percentual_total' => '5',
        'pib_per_capita' => '40 670,07',
        'idh' => '0,805',
        'alfabetizacao' => '98%',
        'mortalidade_infantil' => '8,2‰',
        'expectativa_vida' => '79,2 anos'
    ],
    'São Paulo' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Bandeira_do_estado_de_São_Paulo.svg/45px-Bandeira_do_estado_de_São_Paulo.svg.png',
        'unidade_federativa' => 'São Paulo',
        'abreviacao' => 'SP',
        'sede_governo' => 'São Paulo',
        'area' => '248 209,4',
        'populacao' => '46 649 132',
        'densidade' => '187,53',
        'pib' => '2 221 570 000',
        'pib_percentual_total' => '36,9',
        'pib_per_capita' => '47 684,55',
        'idh' => '0,826',
        'alfabetizacao' => '97,4%',
        'mortalidade_infantil' => '8,4‰',
        'expectativa_vida' => '77,9 anos'
    ],
    'Sergipe' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Bandeira_de_Sergipe.svg/45px-Bandeira_de_Sergipe.svg.png',
        'unidade_federativa' => 'Sergipe',
        'abreviacao' => 'SE',
        'sede_governo' => 'Aracaju',
        'area' => '21 910,4',
        'populacao' => '2 339 000',
        'densidade' => '106,71',
        'pib' => '47 472 000',
        'pib_percentual_total' => '0,8',
        'pib_per_capita' => '21 192,29',
        'idh' => '0,665',
        'alfabetizacao' => '92,8%',
        'mortalidade_infantil' => '14,9‰',
        'expectativa_vida' => '72,7 anos'
    ],
    'Tocantins' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Bandeira_do_Tocantins.svg/45px-Bandeira_do_Tocantins.svg.png',
        'unidade_federativa' => 'Tocantins',
        'abreviacao' => 'TO',
        'sede_governo' => 'Palmas',
        'area' => '277 620,9',
        'populacao' => '1 590 248',
        'densidade' => '5,61',
        'pib' => '29 019 000',
        'pib_percentual_total' => '0,5',
        'pib_per_capita' => '18 257,66',
        'idh' => '0,699',
        'alfabetizacao' => '93,8%',
        'mortalidade_infantil' => '17,5‰',
        'expectativa_vida' => '73,4 anos'
    ]
];

echo '<table>';
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
