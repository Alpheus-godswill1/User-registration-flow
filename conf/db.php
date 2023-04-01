<?php
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$db_name = 'userregistration';


$connect = mysqli_connect($db_host, $db_user, $db_password,$db_name);

if(!$connect){
    die('There is an error check db'.mysqli_error($connect));
}



?> 