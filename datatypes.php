<?php   
$a=4;
$b="I love Pizza";
$c=900.500;
$d=true;
$f=[1,2,3,4];

echo"{$b}s";
echo "<br>";
echo"There are {$a} Pizzas";
echo "<br>";
echo"The cost of pizzas are {$c}";
echo "<br>";
if($c>500) {
    $d=true;
}
else {
    $d=false;
}
if($d)
echo"The cost is greater then 500.<br>";
else 
echo"The cost is less then 500.<br>";
echo "<br>";
print_r($f);
echo "<br>";
?>