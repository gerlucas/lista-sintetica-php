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
        'alfabetizacao' => '83,3%',
        'mortalidade_infantil' => '21,3‰',
        'expectativa_vida' => '70,6 anos'
    ],
    'Mato Grosso' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/45px-Bandeira_de_Mato_Grosso.svg.png',
        'unidade_federativa' => 'Mato Grosso',
        'abreviacao' => 'MT',
        'sede_governo' => 'Cuiabá',
        'area' => '903 357,9',
        'populacao' => '3 236 578',
        'densidade' => '3,10',
        'pib' => '107 418 000',
        'pib_percentual_total' => '1,8',
        'pib_per_capita' => '32 894,96',
        'idh' => '0,725',
        'alfabetizacao' => '93,5%',
        'mortalidade_infantil' => '16,9‰',
        'expectativa_vida' => '74,2 anos'
    ],
    'Mato Grosso do Sul' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg/45px-Bandeira_de_Mato_Grosso_do_Sul.svg.png',
        'unidade_federativa' => 'Mato Grosso do Sul',
        'abreviacao' => 'MS',
        'sede_governo' => 'Campo Grande',
        'area' => '357 125,0',
        'populacao' => '2 630 098',
        'densidade' => '6,34',
        'pib' => '83 082 000',
        'pib_percentual_total' => '1,4',
        'pib_per_capita' => '31 337,22',
        'idh' => '0,729',
        'alfabetizacao' => '93,7%',
        'mortalidade_infantil' => '14,0‰',
        'expectativa_vida' => '75,5 anos'
    ],
    'Minas Gerais' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Bandeira_de_Minas_Gerais.svg/45px-Bandeira_de_Minas_Gerais.svg.png',
        'unidade_federativa' => 'Minas Gerais',
        'abreviacao' => 'MG',
        'sede_governo' => 'Belo Horizonte',
        'area' => '586 528,3',
        'populacao' => '20 777 672',
        'densidade' => '32,79',
        'pib' => '519 326 000',
        'pib_percentual_total' => '8,7',
        'pib_per_capita' => '24 884,94',
        'idh' => '0,731',
        'alfabetizacao' => '93,8%',
        'mortalidade_infantil' => '10,9‰',
        'expectativa_vida' => '77,2 anoss'
    ],
    'Pará' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bandeira_do_Pará.svg/45px-Bandeira_do_Pará.svg.png',
        'unidade_federativa' => 'Pará',
        'abreviacao' => 'PA',
        'sede_governo' => 'Belém',
        'area' => '1 247 689,5',
        'populacao' => '8 101 180',
        'densidade' => '5,58',
        'pib' => '130 883 000',
        'pib_percentual_total' => '2,2',
        'pib_per_capita' => '16 009,98',
        'idh' => '0,646',
        'alfabetizacao' => '90,7%',
        'mortalidade_infantil' => '16,6‰',
        'expectativa_vida' => '72,1 anos'
    ],
    'Paraíba' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Bandeira_da_Paraíba.svg/45px-Bandeira_da_Paraíba.svg.png',
        'unidade_federativa' => 'Paraíba',
        'abreviacao' => 'PB',
        'sede_governo' => 'João Pessoa',
        'area' => '56 439,8',
        'populacao' => '3 950 359',
        'densidade' => '63,71',
        'pib' => '56 140 000',
        'pib_percentual_total' => '0,9',
        'pib_per_capita' => '14 133,32',
        'idh' => '0,658',
        'alfabetizacao' => '83,7%',
        'mortalidade_infantil' => '16,1‰',
        'expectativa_vida' => '73,2 anos'
    ],
    'Paraná' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paraná.svg/45px-Bandeira_do_Paraná.svg.png',
        'unidade_federativa' => 'Paraná',
        'abreviacao' => 'PR',
        'sede_governo' => 'Curitiba',
        'area' => '199 314,9',
        'populacao' => '11 112 062',
        'densidade' => '51,48',
        'pib' => '376 960 000',
        'pib_percentual_total' => '6,3',
        'pib_per_capita' => '33 768,62',
        'idh' => '0,749',
        'alfabetizacao' => '95,5%',
        'mortalidade_infantil' => '9,3‰',
        'expectativa_vida' => '77,1 anos'
    ],
    'Pernambuco' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Bandeira_de_Pernambuco.svg/45px-Bandeira_de_Pernambuco.svg.png',
        'unidade_federativa' => 'Pernambuco',
        'abreviacao' => 'PE',
        'sede_governo' => 'Recife',
        'area' => '98 311,6',
        'populacao' => '9 297 861',
        'densidade' => '85,58',
        'pib' => '156 955 000',
        'pib_percentual_total' => '2,6',
        'pib_per_capita' => '16 795,34',
        'idh' => '0,673',
        'alfabetizacao' => '87,2%',
        'mortalidade_infantil' => '12,7‰',
        'expectativa_vida' => '73,9 anos'
    ],
    'Piauí' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Bandeira_do_Piauí.svg/45px-Bandeira_do_Piauí.svg.png',
        'unidade_federativa' => 'Piauí',
        'abreviacao' => 'PI',
        'sede_governo' => 'Teresina',
        'area' => '251 529,2',
        'populacao' => '3 198 185',
        'densidade' => '11,95',
        'pib' => '39 148 000',
        'pib_percentual_total' => '0,7',
        'pib_per_capita' => '12 218,51',
        'idh' => '0,646',
        'alfabetizacao' => '82,8%',
        'mortalidade_infantil' => '19,1‰',
        'expectativa_vida' => '71,1 anos'
    ],
    'Rio de Janeiro' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg/45px-Bandeira_do_estado_do_Rio_de_Janeiro.svg.png',
        'unidade_federativa' => 'Rio de Janeiro',
        'abreviacao' => 'RJ',
        'sede_governo' => 'Rio de Janeiro',
        'area' => '43 696,1',
        'populacao' => '16 497 395',
        'densidade' => '352,05',
        'pib' => '659 137 000',
        'pib_percentual_total' => '11',
        'pib_per_capita' => '39 826,95',
        'idh' => '0,761',
        'alfabetizacao' => '97,3%',
        'mortalidade_infantil' => '11,5‰',
        'expectativa_vida' => '76,2 anos'
    ],
    'Rio Grande do Norte' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bandeira_do_Rio_Grande_do_Norte.svg/45px-Bandeira_do_Rio_Grande_do_Norte.svg.png',
        'unidade_federativa' => 'Rio Grande do Norte',
        'abreviacao' => 'RN',
        'sede_governo' => 'Natal',
        'area' => '52 796,8',
        'populacao' => '3 419 550',
        'densidade' => '56,88',
        'pib' => '57 250 000',
        'pib_percentual_total' => '1',
        'pib_per_capita' => '16 631,86',
        'idh' => '0,684',
        'alfabetizacao' => '85,3%',
        'mortalidade_infantil' => '14,7‰',
        'expectativa_vida' => '75,7 anos'
    ],
    'Rio Grande do Sul' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Bandeira_do_Rio_Grande_do_Sul.svg/45px-Bandeira_do_Rio_Grande_do_Sul.svg.png',
        'unidade_federativa' => 'Rio Grande do Sul',
        'abreviacao' => 'RS',
        'sede_governo' => 'Porto Alegre',
        'area' => '281 748,5',
        'populacao' => '11 228 091',
        'densidade' => '38,49',
        'pib' => '381 985 000	',
        'pib_percentual_total' => '6,4',
        'pib_per_capita' => '33 960,36',
        'idh' => '0,746',
        'alfabetizacao' => '96,8%',
        'mortalidade_infantil' => '9,6‰',
        'expectativa_vida' => '77,8 anos'
    ],
    'Rondônia' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Bandeira_de_Rondônia.svg/45px-Bandeira_de_Rondônia.svg.png',
        'unidade_federativa' => 'Rondônia',
        'abreviacao' => 'RO',
        'sede_governo' => 'Porto Velho',
        'area' => '237 590,7',
        'populacao' => '1 755 015',
        'densidade' => '6,46',
        'pib' => '36 563 000',
        'pib_percentual_total' => '0,6',
        'pib_per_capita' => '20 677,95',
        'idh' => '0,690',
        'alfabetizacao' => '93,3%',
        'mortalidade_infantil' => '20,0‰',
        'expectativa_vida' => '71,3 anos'
    ],
    'Roraima' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Bandeira_de_Roraima.svg/45px-Bandeira_de_Roraima.svg.png',
        'unidade_federativa' => 'Roraima',
        'abreviacao' => 'RR',
        'sede_governo' => 'Boa Vista',
        'area' => '224 299,0',
        'populacao' => '500 826',
        'densidade' => '1,74',
        'pib' => '10 354 000',
        'pib_percentual_total' => '0,2',
        'pib_per_capita' => '20 476,71',
        'idh' => '0,707',
        'alfabetizacao' => '93,4%',
        'mortalidade_infantil' => '17,2‰',
        'expectativa_vida' => '71,5 anos'
    ],
    'Santa Catarina' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bandeira_de_Santa_Catarina.svg/45px-Bandeira_de_Santa_Catarina.svg.png',
        'unidade_federativa' => 'Santa Catarina',
        'abreviacao' => 'SC',
        'sede_governo' => 'Florianópolis',
        'area' => '95 736,2',
        'populacao' => '6 734 568',
        'densidade' => '61,53',
        'pib' => '249 073 000',
        'pib_percentual_total' => '4,2',
        'pib_per_capita' => '36 525,28',
        'idh' => '0,774',
        'alfabetizacao' => '97,2%',
        'mortalidade_infantil' => '9,2‰',
        'expectativa_vida' => '79,1 anos'
    ],
    'São Paulo' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Bandeira_do_estado_de_São_Paulo.svg/45px-Bandeira_do_estado_de_São_Paulo.svg.png',
        'unidade_federativa' => 'São Paulo',
        'abreviacao' => 'SP',
        'sede_governo' => 'São Paulo',
        'area' => '248 209,4',
        'populacao' => '44 169 350',
        'densidade' => '162,93',
        'pib' => '1 939 890 000',
        'pib_percentual_total' => '32,4',
        'pib_per_capita' => '43 694,68',
        'idh' => '0,783',
        'alfabetizacao' => '97,2%',
        'mortalidade_infantil' => '9,9‰',
        'expectativa_vida' => '78, anos'
    ],
    'Sergipe' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Bandeira_de_Sergipe.svg/45px-Bandeira_de_Sergipe.svg.png',
        'unidade_federativa' => 'Sergipe',
        'abreviacao' => 'SE',
        'sede_governo' => 'Aracaju',
        'area' => '21 910,4',
        'populacao' => '2 227 294',
        'densidade' => '89,81',
        'pib' => '38 554 000',
        'pib_percentual_total' => '0,6',
        'pib_per_capita' => '17 189,28',
        'idh' => '0,665',
        'alfabetizacao' => '85,3%',
        'mortalidade_infantil' => '16,2‰',
        'expectativa_vida' => '72,7 anos'
    ],
    'Tocantins' => [
        'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Bandeira_do_Tocantins.svg/45px-Bandeira_do_Tocantins.svg.png',
        'unidade_federativa' => 'Tocantins',
        'abreviacao' => 'TO',
        'sede_governo' => 'Palmas',
        'area' => '277 620,9',
        'populacao' => '1 502 759',
        'densidade' => '4,70',
        'pib' => '28 930 000',
        'pib_percentual_total' => '0,5',
        'pib_per_capita' => '19 094,16',
        'idh' => '0,699',
        'alfabetizacao' => '89,6%',
        'mortalidade_infantil' => '15,8‰',
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
