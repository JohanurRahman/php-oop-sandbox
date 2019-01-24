<?php

    # Define a class
    class User {
        
        # Properties (Attributes)

        public $name;
        

        # Methods (Functions)

        public function sayHello() {
            return $this->name . " says hello\n";
        }
    }

    # Instantiate a user objects from the user class

    $user1 = new User();
    echo $user1->name = 'Johan';
    echo '<br>';
    echo $user1->sayHello();

    # Create new user
    $user2 = new User();

    echo '<br>';
    echo $user2->name = 'Jeff';
    echo '<br>';
    echo $user2->sayHello();
     

?>