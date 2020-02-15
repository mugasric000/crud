<?php
$servername = "10.8.30.49";
$username = "rwmugasa355wi20";
$password = "rwmugasadbwi20vtd";
$db = "rwmugasa355wi20";

try {
    $pdo = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 //echo "Connected successfully";
    }
catch(PDOException $e)
    {
   echo "Connection failed: " . $e->getMessage();
    }
?>














