<?php


$host = "localhost";
$db = "phptutorial";
$username = "root";
$password = "";

// $con = mysqli_connect($host, $dbUser, $dbPass, $dbName);

// if ($con) {
//     echo "hicih" . $con;
// } else {
//     die('database con failed');
// }


try {
    $connect = new PDO("mysql:host=$host;dbname=$db;", $username, $password);
} catch (PDOException $error) {
    echo "Error is connect in line " . $error->getLine();
}
