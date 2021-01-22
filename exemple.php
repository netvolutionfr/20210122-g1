<?php

$fruits = ["ananas", "pomme", "poire", "orange"];

foreach ($fruits as $fruit) {
    echo $fruit;
}

$contact1 = (object) [
    "nom" => "Toto",
    "prenom" => "Titi"
];

$contact2 = (object) [
    "nom" => "Dupont",
    "prenom" => "Jean"
];

$contacts = array($contact1, $contact2);
