<?php
// класс Машина
class Car
{
public $name;
public $distance;
public $baseFuelConsumption;
public $fuelConsumption;
	public function __construct($name, $distance, $baseFuelConsumption)
	{
		$this->name = $name;
		$this->distance = $distance;
		$this->baseFuelConsumption = $baseFuelConsumption;
	}
	public function fuelConsumption()
	{
		$name = $this->name;
		$distance = $this->distance;
		$baseFuelConsumption = $this->baseFuelConsumption;
		$fuelConsumption = $distance/100*$baseFuelConsumption;
		return "На $distance км для $name понадобиться $fuelConsumption л топлива<br><br>";	
	}
}
echo 'Класс Машина<br><br>';
$BMW = new Car('BMW', 350, 14);
echo $BMW->fuelConsumption();
$Mazda = new Car('Mazda', 475, 11);
echo $Mazda->fuelConsumption();
// класс Телевизор
class TV
{
public $name;
public $price;
public $fullPrice;
public $remoteController = 350;
public $externalSpeakers = 4500;
public $antenna = 500;
	public function __construct($name, $price)
	{
		$this->name = $name;
		$this->price = $price;
	}
	public function fullPrice()
	{
		$name = $this->name;
		$price = $this->price;
		$remoteController = $this->remoteController;
		$externalSpeakers = $this->externalSpeakers;
		$antenna = $this->antenna;
		$fullPrice = $price + $remoteController + $externalSpeakers + $antenna;
		return "Телевизор $name в полной комплектации стоит $fullPrice рублей<br><br>";	
	}
}
echo 'Класс Телевизор<br><br>';
$LG = new TV('LG', 12000);
echo $LG->fullPrice();
$Samsung = new TV('Samsung', 15000);
echo $Samsung->fullPrice();
// класс Шариковая ручка
class Pen
{
public $name;
	public function __construct($name)
	{
		$this->name = $name;
	}
	public function presence()
	{
		$name = $this->name;
	
		if ($name=='Parker') {
			return "Ручка $name только под заказ<br><br>";
		} else {
			return "Ручка $name в наличии<br><br>";	
		}
	}
}
echo 'Класс Шариковая ручка<br><br>';
$Parker = new Pen('Parker');
echo $Parker->presence();
$ErichKrause = new Pen('ErichKrause');
echo $ErichKrause->presence();
// класс Утка
class Duck
{
public $name;
public $age;
	public function __construct($age)
	{
		$this->age = $age;
	}
	public function cookingMethod()
	{
		$age = $this->age;
			
		if ($age < 1) {
			return "Возраст птицы $age года - Утку можно готовить любым способом<br><br>";
		}
		if ($age >= 1 && $age <=2) {
			return "Возраст птицы $age года - Утка пригодна только на холодец<br><br>";	
		} 
		if ($age > 2){
			return "Возраст птицы $age года - Оставьте животное доживать свой век спокойно<br><br>";
		}
	}
}
echo 'Класс Утка<br><br>';
$duck1 = new Duck(0.5);
echo $duck1->cookingMethod();
$duck2 = new Duck(1.5);
echo $duck2->cookingMethod();
$duck3 = new Duck(3);
echo $duck3->cookingMethod();
// класс Продукт
class Product
{
public $name;
public $price;
public $class;
public $discount;
	public function __construct($name, $class, $price)
	{
		$this->name = $name;
		$this->class = $class;
		$this->price = $price;
	}
	public function fullPrice()
	{
		$name = $this->name;
		$class = $this->class;
		$price = $this->price;
		$discount = 0.8;
			
		if ($class == 'выпечка') {
			$price*=$discount;
			return "$name сегодня стоит $price рублей<br><br>";
		} else {
			return "$name сегодня стоит $price рублей<br><br>";;	
		
		}
	}
}
echo 'Класс Продукт <br><br>';
$milk = new Product('Молоко', 'молочка', 48);
echo $milk->fullPrice();
$cake = new Product('Торт', 'выпечка', 350);
echo $cake->fullPrice();
?>