<?php 

ob_start();

session_start();

defined("DB_HOST") ? null : define("DB_HOST", "localhost");

defined("DB_USER") ? null : define("DB_USER", "interkrh_user1");

defined("DB_PASS") ? null : define("DB_PASS", "Cryptowallet123");

defined("DB_NAME") ? null : define("DB_NAME", "interkrh_cryptowallet");

$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
// if(!$connection){
//     echo "Not connected";
// }else{
//     echo "Connected";
// }

// $servername = "localhost";
// $username = "interkrh_user1";
// $password = "Cryptowallet123";

// // Create connection
// $conn = mysqli_connect($servername, $username, $password);

// // Check connection
// if (!$conn) {
//   die("Connection failed: " . mysqli_connect_error());
// }
// echo "Connected successfully";

require_once("functions.php");





?>