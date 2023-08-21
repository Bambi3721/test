<?php
$connecct = mysqli_connect('127.0.0.1', 'root@localhost', 'Ily,ecs1!', 'testing');

if(!$connect){
    die("Connection failed: " . mysqli_connect_error());
}
?>