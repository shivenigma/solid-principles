<?php

namespace Innoppl\Solid;


class userMapper
{
    public function __construct()
    {
        $this->connect();
    }

    public function connect()
    {
        //initialize databse connection
        //used mysql
    }
    public function save(adminInterface $user)
    {
        //some code to save in databse
        //work on the user object
        //save the user here
    }
    public function get()
    {
        //some code to retrive user from the database
        //$result = from database
        $result = "";
        return json_encode($result);
    }
}