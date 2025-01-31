<?php
    $total=array(
        array("Abhay",7.9,"pass"),
        array("Aditya",4.9,"pass"),
        array("Mayank",7.4,"pass"),
    );
    for ($row = 0; $row < 3; $row++) {  
        for ($col = 0; $col < 3; $col++) {  
          echo $total[$row][$col]."  ";  
        }  
        echo "<br/>";  
    }
?>