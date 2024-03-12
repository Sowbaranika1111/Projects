<?php
class Area
{
    public $shape;
    public $length;
    public $breadth;

    function __construct($shape,$length,$breadth)
    {
      $this -> shape = $shape;
      $this -> length = $length;
      $this -> breadth = $breadth;
    }
    
    public function rectArea()
    {
      $rectangleArea = $this->length * $this -> breadth;
      return "Area of the Rectangle: ". $rectangleArea."<br>";
    }
    public function triArea()
    {
      $triangleArea = 0.5 * $this -> length * $this -> breadth;
      return "Area of the Triangle: ". $triangleArea."<br>";
    }
}
class Square extends Area
{
  public $shape;
  public $length;
  
  public function __construct($shape,$length)
  {
    $this -> shape = $shape;
    $this -> length = $length;
  }
  public function squareAreaMethod()
  {
    $squareArea = $this->length ** 2;
    return "Area of the Square: ". $squareArea;
  }
}

// $rectObj = new Area("Rectangle",readline("Enter the length of the rectangle: "),readline("Enter the length of the rectangle: "));
$rectObj = new Area("Rectangle",45,2);
$rectArea = $rectObj -> rectArea();
echo $rectArea;

$sqObj = new Square("Square",5);
$sqArea = $sqObj -> squareAreaMethod();
echo $sqArea;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="shape">Shape(Rectangle/Triangle:)</label>
        <input type="text" name="shape" required/>
        <br>
        <label for="length">Length:</label>
        <input type="number" name="length" required>
        <br>
        <label for="breadth">Breadth:</label>
        <input type="number" name="breadth" required>
        <br>
        <input type="submit" value="Calculate Area">
    </form>

<?php
    class ShapeArea
    {
        public $shape;
        public $length;
        public $breadth;
    
        function __construct($shape,$length,$breadth)
        {
          $this -> shape = $shape;
          $this -> length = $length;
          $this -> breadth = $breadth;
        }
        
        public function rectArea()
        {
          $rectangleArea = $this->length * $this -> breadth;
          return "Area of the Rectangle: ". $rectangleArea."<br>";
        }
        public function triArea()
        {
          $triangleArea = 0.5 * $this -> length * $this -> breadth;
          return "Area of the Triangle: ". $triangleArea."<br>";
        }
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $shapeInput = $_POST["shape"];
        $lengthInput = $_POST["length"];
        $breadthInput = $_POST["breadth"];

        $areaObj = new ShapeArea($shapeInput,$lengthInput,$breadthInput);

        $rectArea = $areaObj -> rectArea();
        $triangleArea = $areaObj -> triArea();

        echo $rectArea , $triangleArea;
    }

?>
</body>
</html>