<?php

class Person
{

    private $name;
    private $surname;
    private $age;
    private $birthday;
    private $gender;
    private $addresses;
    private $phoneNumbers;

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getBirthday()
    {
        return $this->birthday;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function getAddresses()
    {
        return $this->addresses;
    }

    public function getPhoneNumbers()
    {
        return $this->phoneNumbers;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setSurname($surname)
    {
        $this->surname = $surname;
    }

    public function setAge($age)
    {
        $this->age = $age;
    }

    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function setAddresses(ArrayObject $addresses)
    {
        $this->addresses = $addresses;
    }

    public function setPhoneNumbers(ArrayObject $phoneNumbers)
    {
        $this->phoneNumbers = $phoneNumbers;
    }

}
