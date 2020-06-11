<?php

class person {

private $name;
private $age;
private $job;

function getName(){

    return $this->name;

}
function setName($name){

    $this->name = $name;
}
function getAge(){

    return $this->age;
    
    }
function setAge($age){
    
    $this->age = $age;
}
function getJob(){

    return $this->job;
        
}
function setJob($job){
        
    $this->job = $job;

}


}

$person1 = new person;

$person1->setName("gigi");
echo $person1->getName()."<br>";

$person1->setAge(18);
echo $person1->getAge()."<br>";

$person1->setJob("Developer");
echo $person1->getJob();





?>