<?php
/**
 * Created by PhpStorm.
 * User: vigneshm
 * Date: 21/04/16
 * Time: 2:44 PM
 */

namespace Innoppl\Solid;


interface adminInterface
{
    public function setName($name);

    public function setEmail($email);

    public function isAdmin();
}