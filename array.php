<?php
$cars=array("Volvo","BMW","Toyota","Mazda");
echo"<br>";
// var_dump($cars);
$cars[0]="Bentley";
array_push($cars,"Mercedes");
echo count($cars)."<br>";

$cars=array_reverse($cars);
array_shift($cars);
foreach($cars as $i) {
    echo $i."<br>";
}
?>