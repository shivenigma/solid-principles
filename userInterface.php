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

    public function calculateAge($dob);
    

    public function deactivate();
}