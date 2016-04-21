<?php

namespace Innoppl\Solid;


class User
{
    private $name;
    private $email;
    private $age;

    public function __construct($name, $email, $dob)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->calculateAge($dob);
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function calculateAge($dob)
    {
        //some stuff to calculate age from dob
        $age = "";
        $this->age = $age;
    }
}