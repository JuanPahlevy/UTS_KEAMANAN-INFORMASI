<?php
$mysqli = mysqli_connect("localhost", "root", "", "keamananinformasi");
if ($mysqli){
    echo "" . mysqli_connect_error();
}

$name = "Juan";
$password = "";

$name = $mysqli->real_escape_string($name);
$password = $mysqli->real_escape_string($password);

$sql = "SELECT * FROM user WHERE name='$name' AND password='$password'";

if ($result = $mysqli->query($sql)){
    print_r($result->fetch_object());
}