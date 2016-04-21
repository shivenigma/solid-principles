<?php

namespace Innoppl\Solid;


class User implements userInterface, adminInterface
{
    private $name;
    private $email;
    private $age;
    private $status;

    public function __construct($name, $email, $dob)
    {
        $this->setName($name);
        $this->setEmail($email);
        $this->calculateAge($dob);
        $this->status = true;
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

    public function isAdmin()
    {
        return false;
    }

    public function deactivate()
    {
        $this->status = false;
    }

    public function save(userMapper $mapper)
    {
        $user = array(
            "name" => $this->name,
            "email" => $this->email,
            "age" => $this->age
        );
        $mapper->save($user);
    }
}