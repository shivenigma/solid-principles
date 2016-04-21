<?php
$user = new \Innoppl\Solid\User("vignesh", "vignesh.m@innoppl.com", "31-03-1992");

$mapper = new \Innoppl\Solid\userMapper();

$mapper->save($user);
// User is the detail here, nothing is depend on user.
//Usermapper is depends on the abstraction adminInterface.
//this respects the dependency inversion principle.

$admin = new \Innoppl\Solid\adminUser("senthil", "senthil.php@innoppl.com",true);
$mapper->save($admin);