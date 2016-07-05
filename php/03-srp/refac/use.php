<?php

require_once 'GenderEnum.php';
require_once 'Address.php';
require_once 'PhoneNumber.php';
require_once 'Person.php';
require_once 'PersonPrinter.php';

$person = new Person();
$person->setName("Walter");
$person->setSurname("Mendoza");
$person->setGender(GenderEnum::MASCULINE);
$person->setAge(25);

$phone1 = new PhoneNumber();
$phone1->setAreaCode("051");
$phone1->setLineNumber("98614585");

$phone2 = new PhoneNumber();
$phone2->setAreaCode("051");
$phone2->setLineNumber("98614585");

$phones = new ArrayObject();
$phones->append($phone1);
$phones->append($phone2);

$person->setPhoneNumbers($phones);

$printer = new PersonPrinter($person);

echo $printer->getFullNameTextPlainGender();