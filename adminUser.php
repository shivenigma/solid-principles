<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 21/04/16
 * Time: 1:16 PM
 */

namespace Innoppl\Solid;


class adminUser implements userInterface
{
    private $admin;
    private $name;
    private $email;
    private $age;

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

    public function calculateAge($dob)
    {
        $this->age = null;
        /*
         * not a override but just a different implementation
         * our system don't need age of the admin as of now.
         * */
    }

    public function isAdmin()
    {
        return true;
    }

    public function deactivate()
    {
        return false;
        //an admin can't deactivate his account, because there is no one else to take up his mantle.
        //but we must implement this method because we implemented the userInterface.
        //typical example of Interface segregation violation principle.
    }
}