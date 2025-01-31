<?php
$age=10;
// if($age>=18)  echo"You can vote. <br>";
// else echo"Sorry :( <br>";
$score=100;
switch($score) {
    case 50:
        echo"Virat has scored half century<br>";
        break;

    case 100:
        echo"Virat has scored a century<br>";
        break;
    
    case 200:
        echo"Virat has scored a double century<br>";
        break;

    default:
        echo"Virat is not out<br>";
    
}
?>