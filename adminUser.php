<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 21/04/16
 * Time: 1:16 PM
 */

namespace Innoppl\Solid;


class adminUser implements adminInterface
{
    private $admin;
    private $name;
    private $email;

    public function __construct($name, $email, $dob, $admin)
    {
        parent::__construct($name, $email, $dob);
        $this->admin = $admin;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function isAdmin()
    {
        return true;
    }
}