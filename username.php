<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form action="username.php" method="get">
    <label>Enter your name: </label><br>
    <input type="text" name="username"><br>
    <label>Enter age: </label><br>
    <input type="text" name="age"><br><br>
    <input type="submit" name="submit">
    </form>
</body>
</html>


<?php
$age = $_GET["age"];
echo"{$_GET["username"]} <br>";
if($age<18) echo"Sorry, You are not eligible to vote";
else echo"You are eligible to vote";
&_yub;
?>