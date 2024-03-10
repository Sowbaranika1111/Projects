<?php
class Product{
    public $name = 'soap';
    public $price; //in dollars
    public $rate = 'Rs.20';

    public function priceInIndianRs()
    {
        $Indianprice = $this -> price * 82;
        return $Indianprice ;
    }
}
$soapObject1 = new Product();
$soapObject2 = new Product();

$combObject = new Product();

print $soapObject1 -> name."<br>";
$soapObject1 -> name = 'toothpaste';
print $soapObject1 -> name."<br>";

$soapObject1 -> price = "10";
$soapObject2 -> price = "20";
$Indianprice = $soapObject2 -> priceInIndianRs();
echo $Indianprice."<br>";


$Indianprice  = $soapObject1 -> priceInIndianRs();
echo $Indianprice ;

print $combObject -> rate."<br>";
$combObject -> rate = "Rs.25";
print $combObject->rate;

//============================================================================================================================================

class Fruit {
  // Properties
  public $name;
  public $color;

  //methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

//============================================================================================================================================

class Flowers
{
  //properties
  public $flowerName;
  public $flowerColor;

  //methods
  function set_name_color($flowerName,$flowerColor){
    $this->flowerName  = $flowerName;
    $this->flowerColor = $flowerColor;
  }
  //1st method storing in array
  function getNameColor_mthd_1(){
    return array($this->flowerName,$this->flowerColor);
  }
  //2nd method storing in associative array
  function get_name_color_mthd_2(){
    return array('flowerName' => $this -> flowerName ,
                 'flowerColor'=> $this -> flowerColor) ;
  }
}
$flowerObj1 = new Flowers();
$flowerObj2 = new Flowers();

$flowerObj1 -> set_name_color("Lily","Pink");
$flowerObj2 -> set_name_color("Jasmine","White");

$result1 = $flowerObj1 -> getNameColor_mthd_1();
$result2 = $flowerObj2 -> get_name_color_mthd_2();

//getting name,color via first method
echo $flowerName = $result1[0]."<br>";

//getting name,color via second method
echo $flowerColor = $result2['flowerColor'];
//============================================================================================================================================

// using a constructor and providing the necessary parameters while creating the object itself
// thus eliminating the need for creating a separate method for parameters assignment
  
class FlowerShop
{
  public $name;
  public $color;

  function __construct($name,$color)
  {
    $this -> name = $name;  //both the names shd be same , not like $this -> nameOfFlower = $name , but $this -> name = $name; ==> this is crt
    $this-> color = $color;
  }
  function get_name()
  {
    return $this -> name;
  }
  function get_color()
  {
    return $this -> color;
  }
}
$flower_1 = new FlowerShop("Rose","Red");
$flower_2 = new FlowerShop("Lotus","Pink");

echo "Name of the first flower: "  .$flower_1_name = $flower_1 -> get_name()."<br>";
echo "Color of the second flower: ".$flower_2_color = $flower_2 -> get_color();

//============================================================================================================================================
// destruct function is automatically called at the end of the script. It is enough if we simply create an object with the necessary parameters 
class Flower
{
  public $name;
  public $color;

  function __construct($name,$color)
  {
    $this -> name = $name;
    $this -> color = $color;
  }
  function __destruct()
  {
    echo"The flower is {$this->name} and the color is {$this ->color}.";
  }
}
$appleObj = new Flower("Sunflower","Yellow");

//======================================================INHERITANCE======================================================================================
class Fruits
{
  public $name;
  public $color;
  public function __construct($name,$color){
    $this -> name = $name;
    $this -> color = $color;
  }
  public function parentIntro(){
    echo "<br>"."'This is from Parent class- ' The fruit is {$this->name} and the color is {$this->color}".'<br>';
  } 
}
class Banana extends Fruits
{
  public function childClassBenefits()
  {
    echo "'This is from Child class- ' It provides vitamins and minerals".'<br>';
  }
}
$banana = new Banana("Banana","Yellow"); //creating an object from the child class Banana , if u create an object from the parent class u can't access child class properties and methods.
$banana -> parentIntro();
$banana -> childClassBenefits();
//========================Final===================

?>
