<?php
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "aws";
$dbport = 3306;
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname, $dbport);

if($conn -> error){
	echo "Connection error";   
}else{
    //echo "Connesso al database con successo";
}
?>