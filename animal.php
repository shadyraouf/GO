<?php
class Animal{
	protected $name;
	
}

class Dog extends Animal{

	public function setDogName($name){
		$this->name=$name;
	}
	public function getDogName(){
		echo $this->name;
	}
}

$dog=new Dog();
$dog->setDogName("New Dog");
$dog->getDogName();
?>