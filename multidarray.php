<?php
$result=array(
    array(
        "name"=>"manoj",
        "cgpa"=>8.5,
        "status"=>"pass",
    ),
    array(
        "name"=>"yz",
        "cgpa"=>8.5,
        "status"=>"pass",
    ),
    array(
        "name"=>"majbwj",
        "cgpa"=>8.5,
        "status"=>"pass",
    )
);
echo "hello world";
echo $result[0]["name"]."--cgpa is: ".$result[0]["cgpa"]. "---status: ".$result[0]["status"]."<br>";
echo $result[1]["name"]."--cgpa is: ".$result[1]["cgpa"]. "---status: ".$result[1]["status"]."<br>";
echo $result[2]["name"]."--cgpa is: ".$result[2]["cgpa"]. "---status: ".$result[2]["status"]."<br>";
?>