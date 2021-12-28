<?php
session_start();
include "db.php";
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$password = $_POST['pswd'];
$query = "INSERT INTO users (fname,lname,email,password) VALUES ('$fname','$lname','$email','$password')";
echo $query;
$db->query($query);
header("Location: login.php");
