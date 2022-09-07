<?php
    include 'connect.php';

    if(isset($_GET['deletedid'])){
        $id=$_GET['deletedid'];

        $sql="delete from `crudtable` where id=$id";
        $result=mysqli_query($con,$sql);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }
    }
    ?>