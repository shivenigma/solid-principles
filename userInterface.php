<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 21/04/16
 * Time: 2:17 PM
 */

namespace Innoppl\Solid;


interface userInterface
{

    public function setName($name);

    public function setEmail($email);

    public function calculateAge($dob);

    public function isAdmin();
}