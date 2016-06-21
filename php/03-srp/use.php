<?php

require_once './Person.php';

$person = new Person();
$person->setName("Pedro");
$person->setSurname("Roncal");
$person->setGender('M');
$person->setAddress1("Los alamos");
$person->setAddress2("Los fresnos");

echo "Name : {$person->getFullNameTextPlainGender()}";
