<?php

$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "skhafthini";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);
?>



$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbname = "botho_university";

$aVar = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbname);
{
echo "data base connected!!!!!!!!";
}

$query="INSERT INTO students VALUES
('".$id."','".$fname."','".$gender."','".$email."','".$email."','".$phone."')";
$query = mysqli_query($aVar,$query)or die('Error,insert query failed');
echo "registration sucessfull"; 








