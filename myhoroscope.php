<?php
include "classes.php";



$myPerson = new Person($_POST["fName"], $_POST["lName"], $_POST["bDate"]);
setcookie("user", serialize($myPerson), time() + 120);

if(isset($_COOKIE["user"])) {
    

 } 



$myPerson -> printName();
echo "</br>";
$myPerson -> checkHoroscope();

echo "</br>";
echo $_COOKIE["user"];

?>