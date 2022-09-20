<?php
$user=$_POST ["user"];
$password=$_POST ["password"];

$ckuser="admin";
$ckpass=1234;

if ($user == $ckuser && $password==$ckpass){
    header("location:https://www.freecodecamp.org/learn");}
     else {
        header("location:error.html");
     }
?>