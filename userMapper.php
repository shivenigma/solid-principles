<?php

namespace Innoppl\Solid;


class userMapper
{
    public function connect()
    {
        //initialize databse connection
        //used mysql
    }
    public function save()
    {
        //some code to save in databse
    }
    public function get()
    {
        //some code to retrive user from the database
        //$result = from database
        $result = "";
        return json_encode($result);
    }
}