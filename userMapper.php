<?php

namespace Innoppl\Solid;


class userMapper
{
    public function __construct()
    {
        //initialize databse connection
    }
    public function saveUser()
    {
        //some code to save in databse
    }
    public function getUser()
    {
        //some code to retrive user from the database
        //$result = from database
        $result = "";
        return json_encode($result);
    }
}