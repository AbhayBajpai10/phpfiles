<?php   
$a=25;
$b=5;
$c=$a+$b;
$d=$a-$b;
$e=$a*$b;
$f=$a/$b;
$g=$a%$b;
$h=$a**$b;
    echo"The value of a is {$a}<br>";
    echo"The value of  b is {$b}<br><br>";
    if($a+$b > 20)
    echo"The sum of value greater then 20<br>";
    if($a-$b >0)
    echo"The value of a-b is greater then 0<br>";
    if($a*$b >10)
    echo"The multiplication is greater then 10<br>";
    if($a % 5==0)
    echo"a is divisible by 5<br>";
    if($a%$b==0)
    echo"a is divisible by b<br>";
    echo"The value of a**b is {$h}<br><br>";
    

    // echo"The updated value of a after += is ".($a+=$b)."<br>";
    // echo"The updated value of a after -= is ".($a-=$b)."<br>";
    // echo"The updated value of a after *= is ".($a*=$b)."<br>";
    // echo"The updated value of a after /= is ".($a/=$b)."<br>";
    // echo"The updated value of a after %= is ".($a%=$b)."<br><br>";

    $x=15;
    echo"The initial value of x is ".($x)."<br>";
    echo"The updated value of x after ++x is ".(++$x)."<br>";
    echo"The updated value of x after x++ is ".($x++)."<br>";
    echo"The updated value of x after --x is ".(--$x)."<br>";
    echo"The updated value of x after x-- is ".($x--)."<br><br>";

    $a=10;
    $b=30;
    echo"x and b = ".($a and $b)."<br>";
    echo"x or b = ".($a or $b)."<br>";
    echo"x xor b = ".($a xor $b)."<br>";
    echo"x && b = ".($a && $b)."<br>";
?>