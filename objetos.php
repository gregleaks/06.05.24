<?php

$bones = new stdClass();

$bones->marca1 = (object) [
    'nome' => 'Nike',
    'cor' => 'Vermelho'
];

$bones->marca2 = (object) [
    'nome' => 'Adidas',
    'cor' => 'Azul'
];

$bones->marca3 = (object) [
    'nome' => 'Lacoste',
    'cor' => 'Verde'
];

foreach ($bones as $bone) {
    echo "Cor: " . $bone->cor . ", Marca: " . $bone->nome . "<br>";
}