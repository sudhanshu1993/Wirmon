<?php

$serverName = "localhost";

$userName = "wirmonin_wirmon";
$password = "567@wirmonin";

//$userName = "root";
//$password = "";

try{
    $conn = new PDO("mysql:host=$serverName;dbname=wirmonin_wirmon", $userName, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo "Something Went Wrong With Database Please Refresh page & Try Again";
}

?>
