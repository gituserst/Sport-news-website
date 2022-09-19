<?php

	include_once 'dbc.php';
	$imev = $_POST['ime'];
	$prezimev = $_POST['prezime'];
	$emailv = $_POST['email'];
	$pwv = $_POST['pw'];

	$sql = "INSERT INTO users (user_ime, user_prezime, user_email, user_pw) 
	VALUES ('$imev','$prezimev','$emailv','$pwv');";
	mysqli_query($conn, $sql);

	header("location: ../index.php?signup=success");
