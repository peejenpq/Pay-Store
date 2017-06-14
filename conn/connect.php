<?php
$host =  'localhost';
$user = 'root';
$pass = '';
$dbname = "Project";
$link = mysqli_connect($host,$user,$pass) or die("Can't connect DB");
mysqli_select_db($link,$dbname) or die("Can't select DB");
mysqli_query($link,"set names utf8");

?>