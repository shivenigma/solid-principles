<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 21/04/16
 * Time: 1:16 PM
 */

namespace Innoppl\Solid;


class adminUser extends User
{
    private $admin;

    public function calculateAge($dob)
    {
        return 0;
        /*
         * a override to the 
         * Refused bequest: a class that overrides a method of a base class in such a way that the contract of the base class is not honored by the derived class
         * */
    }

    public function __construct($name, $email, $dob, $admin)
    {
        parent::__construct($name, $email, $dob);
        $this->admin = $admin;
    }

    public function isAdmin()
    {
        return $this->admin;
    }
}