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

print $soapObject -> name."<br>";
$soapObject -> name = 'toothpaste';
print $soapObject -> name."<br>";

$soapObject1 -> price = "10";
$soapObject2 -> price = "20";
$Indianprice = $soapObject2 -> priceInIndianRs();
echo $Indianprice."<br>";


$Indianprice  = $soapObject1 -> priceInIndianRs();
echo $Indianprice ;

print $combObject -> rate."<br>";
$combObject -> rate = "Rs.25";
print $combObject->rate;


class Fruit {
  // Properties
  public $name;
  public $color;

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

?>