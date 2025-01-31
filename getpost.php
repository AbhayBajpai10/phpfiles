<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Website</title>
</head>
<body>
    <form action="getpost.php" method="post">
    <!-- <label>Enter user name: </label><br>
    <input type="text" name="username"><br>
    <label>Enter password: </label><br>
    <input type="password" name="password"><br> -->
    <label>Enter the food you want to order to eat: </label><br>
    <input type="text" name="food"><br>
    <label>Enter Price: </label><br>
    <input type="text" name="price"><br>
    <label>Enter Quantity to order: </label><br>
    <input type="text" name="quantity"><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
// echo"{$_POST["username"]} <br>";
// echo"{$_POST["password"]} <br>";
    $item=$_POST["food"];
    $price=$_POST["price"];
    $quantity=$_POST["quantity"];
    $total=$price * $quantity;
    echo"You have ordered {$quantity}  {$item}s <br>";
    echo"You total is: {$total} Rs."

?>