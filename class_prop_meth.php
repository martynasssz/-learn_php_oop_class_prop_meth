<?php 
// Define a class

class User {
	// Properties (attributes)
	// public $name ='Martin'; //property name set to Martin // geriau neuzsetinti cia parametro
	   public $name;
	//Medhods (functions)
	public function sayHello(){
		return 'Hello';
	}

	public function sayHello1(){
		return $this->name. 'Says Hello'; //use this to access name property within the method 
	}	
	
}

// Instatiate a user object from the user class
$user1 = new User();
//galime uzsetinti ir po objeto sukurimo
$user1->name = "Martin";
echo $user1->name; //gausime ekrane "Brad", nes name priskirtas defautinis parametras
echo '<br>';
echo $user1->sayHello(); //gausime hello uzrasa
echo '<br>';
echo $user1->sayhello1(); //gausime martin Says Hello
echo '<br>';

// Create new user

$user2 = new User();
$user2->name = "Andrius"; //----nera gera praktika, bet galima ir taip----
echo $user2->name; //gausime Andrius

echo '<br>';
echo $user2->sayHello1(); //gausime Andrius Says Hello




