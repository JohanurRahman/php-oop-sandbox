<?php

    class User {
        
        public $name;
        public $age;

        // Runs when an object is created

        # Magic Constant = __CLASS__
        # Magic Methods = __construct & __destruct

        public function __construct($name, $age) {
            echo __CLASS__ . ' instantiated';
            $this->name = $name;
            $this->age = $age;
        }
        
        public function sayHello() {
            return $this->name . ' says hello';
        }

        # Called when no other references to a certain object 
        # Used for cleanup, closing connections and etc

        public function __destruct() {
            echo "destructor ran..";
        }

    }

    $user1 = new User('John Doe', 25);
    // echo $user1->name . ' is ' . $user1->age . ' years old';
    // echo "<br>";
    // echo $user1->sayHello();

    echo "<br>";

    // $user2 = new User('Steve Smith', 35);
    // echo $user2->name . ' is ' . $user2->age . ' years old';
    // echo "<br>";
    // echo $user2->sayHello();

?>