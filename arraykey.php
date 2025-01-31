<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Country Capital</title>
</head>
<body>
    <form action="arraykey.php" method="post">
        <label>Enter the country name</label><br>
        <input type="text" name="country"><br><br>
        <input type="submit"><br>
    </form>
</body>
</html> -->
<?php
    $capitals= array("India"=>"New Delhi",
                    "USA"=>"Washington D.C.",
                    "China"=>"Beijing",
                    "Japan"=>"Tokyo",
                    "Iraq"=>"Baghdad",
                    "Iran"=>"Tehran",
                    "Srilanka"=>"Columbo",
                    "Pakistan"=>"Islamabad",
                    "Nepal"=>"Kathmandu",
                    "Bangladesh"=>"Dhaka");
    // $capital=$capitals[$_POST["country"]];
    // $c=$_POST["country"];
    // echo "The capital of {$c} is {$capital}<br>";
    $keys=array_keys($capitals);
    $values=array_values($capitals);
    for($i=0;$i<count($capitals);$i++) {
        echo "key=".$keys[$i].","."Value=".$values[$i];
        echo "<br>";
    }
?>