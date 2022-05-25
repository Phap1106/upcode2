<?php

$name = $_POST['name'];
$birthday = $_POST['birthday'];
$gender = $_POST['gender'];
$address = $_POST['address'];
$number_phone = $_POST['number_phone'];
$email = $_POST['email'];
$password = $_POST['password'];

require '../connect.php';
$sql = "insert into admin(name, birthday , gender, address, number_phone, email,password)
values(' $name','$birthday','$gender','$address','$number_phone' ,'$email','$password')";


mysqli_query($connect, $sql);
mysqli_close($connect);