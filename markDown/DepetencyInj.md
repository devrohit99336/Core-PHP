## Dependency injection

Dependency injection is a procedure where one object supplies the dependencies of another object. Dependency Injection is a software design approach that allows avoiding hard-coding dependencies and makes it possible to change the dependencies both at runtime and compile time.

जब कोई class अपने cunstructor मेथड के द्वारा किसी दूसरी class का object accept या recived करती है तो उसे **Dpetency Injection** कहते है | 

```diff
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

+    public function __construct(logger $logger)
    {
        $this->logger = $logger; // logger object pass in the privte logger variable
    }
}

  $logger_obj = new logger();
+ $obj = new userInfo($logger_obj); // pass the logger object in userInfo cunstructor
  $obj->createUser();
  $obj->updateUser();

```