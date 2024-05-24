<?php 

class FindServerMethod{
     public function Calculate(){
          if ($_SERVER['REQUEST_METHOD'] == "POST") {

               $plainText = file_get_contents("php://input");
               $textToArray = json_decode($plainText, true);

               $sum = $textToArray['num1'] + $textToArray['num2'];
               $sub = $textToArray['num1'] - $textToArray['num2'];
               $mul = $textToArray['num1'] * $textToArray['num2'];
               $div = $textToArray['num1'] / $textToArray['num2'];

               $sum = $sum * $textToArray['num3'];
               $sub = $sub * $textToArray['num3'];
               $mul = $mul * $textToArray['num3'];
               $div = $div * $textToArray['num3'];

               echo  "Summation Is - " . $sum . "<br>";
               echo  "Subtraction Is - " . $sub . "<br>";
               echo  "Multiply Is - " . $mul . "<br>";
               echo  "Divison Is - " . $div . "<br>";
          }
     }
}

$obj = new FindServerMethod();
$obj->Calculate();


?>