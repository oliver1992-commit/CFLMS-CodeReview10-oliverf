
<?php

$serverHost = "localhost";
$userName = "root";
$password = "";
$dataBase = "cr10_oliver_biglibrary";


$conn = mysqli_connect($serverHost, $userName, $password, $dataBase);

if(!$conn)
{   
    die("The connection wasen't seccessgul " . mysqli_connect_error());
}



?>
