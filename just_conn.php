<?php
/* just the connection with the database */
$dbhost = 'localhost:3305';
$dbname= 'world.city';
$username= 'root';
$password= 'admin';

$conn = new PDO("mysql:host=$dbhost,dbname=$dbname",$username,$password);

/* To Get The Code in Display */
$sql = "SELECT * from world.city";
$users = $conn ->query($sql);
foreach($users as $user){
    echo "<li>".$user['ID']." - ";
    echo $user['Name']." - ";
    echo $user['CountryCode']." - ";
    echo $user['District']." - ";
    echo $user['Population']."</li>";}

?>

