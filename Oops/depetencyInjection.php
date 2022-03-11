<?php

class logger
{
    public function log($message){
        echo "logger message: {$message}";
    }
}

class userInfo
{
    private $logger;
    public function createUser(){
        $this->logger->log('User created <br>');
    }

    public function updateUser(){
        $this->logger->log('User updated <br>');
    }

    public function __construct(logger $logger)
    {
        $this->logger = $logger; // logger object pass in the privte logger variable
    }
}

$logger_obj = new logger();
$obj = new userInfo($logger_obj); // pass the logger object in userInfo cunstructor
$obj->createUser();
$obj->updateUser();


?>