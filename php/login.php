<?php
require "./import/connect.php";
session_start();

$email = strtolower($_POST['email']);
$password = md5($_POST['password']);
if(isset($_SESSION['logged']) AND $_SESSION['logged'] === true){
	header("Location: ../");
	return;
}
if(isset($email) && isset($password)){
	$sql = "SELECT * FROM users
			WHERE email = '$email' AND password = '$password'";
	$res = $conn -> query($sql);
	
	if($res -> num_rows > 0){
		$row = $res->fetch_assoc();
		$_SESSION['logged'] = true;
		$_SESSION['userId'] = $row["id"];
		$_SESSION['email'] = $email;
		$_SESSION['nome'] = $row['nome']." ".$row['cognome'];
		header("Location: ../user.php");
	}else{
		header("location: ../");
	}
}else{
	header("location: ../");
}
$conn->close();
?>