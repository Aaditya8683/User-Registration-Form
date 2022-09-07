<?php
$con = new mysqli('localhost','root','Wamp@root1','crudoperation');

if(!$con){
     die(mysqli_error($con));
}
?>