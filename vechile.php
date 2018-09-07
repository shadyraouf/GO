<?php
	class Vechile{
		private $color;
		private $speed;
		protected $fuel;
		private $noOfWheels;

		public function setColor($color){
			$this->color=$color;
		}

		public function getColor(){
			return $this->color;
		}
		public function setSpeed($speed){
			$this->speed=$speed;
		}

		public function getSpeed(){
			return $this->speed;
		}
		public function setFuel($fuel){
			$this->fuel=$fuel;
		}

		public function getFuel(){
			return $this->fuel;
		}
		public function setnoOfWheels($noOfWheels){
			$this->noOfWheels=$noOfWheels;
		}

		public function getnoOfWheels(){
			return $this->noOfWheels;
		}

		public function start(){
			echo get_class($this)." started working...<br/>";
		}
		public function stop(){
			echo get_class($this)." stoped working...<br/>";
		}
	}

	class TransportationLoad extends Vechile{
		private $doors;
		private $maxload;

		public function setDoors($doors){
			$this->doors=$doors;
		}

		public function getDoors(){
			return $this->doors;
		}
		public function setMaxLoad($maxload){
			$this->maxload=$maxload;
		}

		public function getMaxLoad(){
			return $this->maxload;
		}
	}

	class Passengers extends Vechile{
		private $maxNoOfPassengers;

		public function setmaxNoOfPassengers($maxNoOfPassengers){
			$this->maxNoOfPassengers=$maxNoOfPassengers;
		}

		public function getmaxNoOfPassengers(){
			return $this->maxNoOfPassengers;
		}

	}

	class Car extends Passengers{
		private $doors;

		public function setDoors($doors){
			$this->doors=$doors;
		}

		public function getDoors(){
			return $this->doors;
		}

		public function getCarFuel(){
			return $this->fuel;
		}

		public function start(){
			parent::start();
			echo "its not going to start";
		}
	}

	class Bike extends Passengers{
		private $headUp;

		public function setHeadUp($headUp){
			$this->headUp=$headUp;
		}

		public function getHeadUp(){
			return $this->headUp;
		}

	}

	class Truck extends TransportationLoad{
		
		private $sizeOfContaner;
		
		public function setSizeOfContaner($sizeOfContaner){
			$this->sizeOfContaner=$sizeOfContaner;
		}

		public function getSizeOfContaner(){
			return $this->sizeOfContaner;
		}
	}

	class Van extends TransportationLoad{
	
		private $noOfBoxs;
		
		public function setnoOfBoxs($noOfBoxs){
			$this->noOfBoxs=$noOfBoxs;
		}

		public function getnoOfBoxs(){
			return $this->noOfBoxs;
		}
	}

	$car =new Car();
	$car->setColor("Blue");
	$car->setSpeed(80);
	$car->setFuel("95 Fuel");
	$car->setnoOfWheels(4);
	$car->setmaxNoOfPassengers(5);
	$car->setDoors(4);

	echo $car->getColor()."<br/>";
	echo $car->getSpeed()."<br/>";
	echo $car->getFuel()."<br/>";
	echo $car->getnoOfWheels()."<br/>";
	echo $car->getmaxNoOfPassengers()."<br/>";
	echo $car->getDoors()."<br/>";
	echo "Fuel: ".$car->getCarFuel()."<br/>";

	$car->start($car);
	$car->stop($car);
	var_dump($car instanceof Vechile);
?>