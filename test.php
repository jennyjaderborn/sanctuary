<?php

//vi gör en klass, stor bokstav för att skilja från objekt senare
//en klass innehåller attribut(variabler) eller metoder(funktioner)
class Person {
    public $firstName;
    public $lastName;
    
    public function setMyName($newFirstName, $newLastName) {
        $this->firstName = $newFirstName;
        $this->lastName = $newLasttName;
    }

    public function sayMyName() {
        echo "My name is: ".$this->firstName;
    }
}

$myLisaPerson = new Person; 

print_r($myPerson);
echo "<br/>";

print_r($myPerson);

