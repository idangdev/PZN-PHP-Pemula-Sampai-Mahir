<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Eko", "Kurniawan", "Khannedy"];
var_dump($names);

// OPERASI ARRAY
var_dump($names[0]);

$names[0] = "Budi";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "Joko";
var_dump($names);

var_dump(count($names));

$eko = array(
    "id" => "eko",
    "name" => "Eko Kurniawan",
    "age" => 30
);

var_dump($eko);

var_dump($eko["name"]);

$budi = [
    "id" => "budi",
    "name" => "Budi Nugraha",
    "age" => 35
];

var_dump($budi);

// ARRAY DALAM ARRAY
$wildan = array(
    "id" => "wildan",
    "name" => "Wildan Sania",
    "age" => 22,
    "address" => array(
        "city" => "Pemalang",
        "country" => "Indonesia"
    )
);

var_dump($wildan);

var_dump($wildan["address"]["country"]);
