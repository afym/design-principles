<?php

class Person
{

    private $id;
    private $name;
    private $surname;
    private $age;
    private $birthday;
    private $phoneNumber1;
    private $phoneNumber2;
    private $phoneNumber3;
    private $address1;
    private $address2;
    private $gender;

    public function getId()
    {
        return $this->id;
    }

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

    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    public function getPhoneNumber3()
    {
        return $this->phoneNumber3;
    }

    public function getAddress1()
    {
        return $this->address1;
    }

    public function getAddress2()
    {
        return $this->address2;
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setId($id)
    {
        $this->id = $id;
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

    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;
    }

    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;
    }

    public function setPhoneNumber3($phoneNumber3)
    {
        $this->phoneNumber3 = $phoneNumber3;
    }

    public function setAddress1($address1)
    {
        $this->address1 = $address1;
    }

    public function setAddress2($address2)
    {
        $this->address2 = $address2;
    }

    public function setGender($gender)
    {
        $this->gender = $gender;
    }

    public function getFullNameTextPlain()
    {
        return "{$this->name} {$this->surname}";
    }

    public function getFullNameTexPlainComma()
    {
        return "{$this->name}, {$this->surname}";
    }

    public function getFullNameTextPlainGender()
    {
        if ($this->gender == 'M') {
            return "Mr. {$this->name}, {$this->surname}";
        }

        return "Ms. {$this->name}, {$this->surname}";
    }

}
