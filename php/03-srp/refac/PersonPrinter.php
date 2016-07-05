<?php

class PersonPrinter
{

    private $person;

    public function __construct(Person $person)
    {
        $this->person = $person;
    }

    public function getFullNameTexPlainComma()
    {
        return "{$this->person->getName()}, {$this->person->getSurname()}";
    }

    public function getFullNameTextPlainGender()
    {
        return "{$this->getPrefix()} {$this->person->getName()}, {$this->person->getSurname()}";
    }

    private function getPrefix()
    {
        $prefix = "Ms.";

        if ($this->person->getGender() == GenderEnum::MASCULINE) {
            $prefix = "Mr.";
        }
        
        return $prefix;
    }

}
