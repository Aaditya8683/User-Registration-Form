<?php
    include 'connect.php';
    $id = $_GET['updateid'];
    $sql="select * from `crudtable` where id=$id";
    $result=mysqli_query($con,$sql);
    $row = mysqli_fetch_assoc($result);
    $fname=$row['FirstName'];
    $lname=$row['LastName'];
    $phone=$row['Mobile'];
    $email=$row['Email'];
    $address=$row['Address'];

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $sql = "update `crudtable` set FirstName='$fname', LastName='$lname', Mobile='$phone', Email='$email', address='$address' where id=$id";

        $result = mysqli_query($con,$sql);

        if($result){
            header('location:display.php');
        }else{
            die(mysqli_error($con));
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .container{
            width:40%;
        }
    </style>
</head>
<body class="bg-dark">
    
    <div class="container bg-white">
    </div>
    <div class="container bg-white my-5 p-5">
    <form class="row g-3" method="post">
        <div class="col-md-4">
            <hr>
        </div>
    <div class="col-md-4 text-center">   
        <h2>Update</h2>
    </div>
    <div class="col-md-4">
            <hr>
        </div>
                
    <div class="col-md-6">
    <input type="text" name="fname" class="form-control" value="<?php echo $fname ?>">
  </div>
                
               
  <div class="col-md-6">
    <input type="text" name="lname" class="form-control" value="<?php echo $lname ?>">
  </div>
            
                
  <div class="col-md-12">
    <input type="tel" name="phone" class="form-control" value="<?php echo $phone ?>">
  </div>
                
  <div class="col-md-12">
    <input type="email" name="email" class="form-control" value="<?php echo $email ?>">
  </div>

  <div class="col-md-12">
    <textarea name="address" class="form-control"><?php echo $email ?></textarea>
  </div>
                

    <div class="col-12">
        <button class="btn btn-dark form-control" type="submit" onclick="myalert()" name="submit">Submit</button>
    </div>

</form>

<script>
    function myalert(){
        alert("Data Updated Successfully
        ");
        }
</script>
</body>
</html>