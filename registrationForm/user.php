<?php
    include 'connect.php';

    if(isset($_POST['submit'])){
        $fname=$_POST['fname'];
        $lname=$_POST['lname'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $address=$_POST['address'];

        $sql = "insert into `crudtable`(firstname,lastname,mobile,email,address)
        values('$fname','$lname','$phone','$email','$address')";

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
    <div class="container bg-white my-5 p-5">
    <form class="row g-3" method="post">
        <div class="col-md-4">
            <hr>
        </div>
    <div class="col-md-4 text-center">   
        <h2>Fill Data</h2>
    </div>
    <div class="col-md-4">
            <hr>
        </div>
                
    <div class="col-md-6">
    <input type="text" name="fname" class="form-control" id="validationDefault01" placeholder="First Name" required>
  </div>
                
               
  <div class="col-md-6">
    <input type="text" name="lname" class="form-control" id="validationDefault02" placeholder="Last Name" required>
  </div>
            
                
  <div class="col-md-12">
    <input type="tel" name="phone" class="form-control" id="validationDefault03" placeholder="Enter your Mobile Number" required>
  </div>
                
  <div class="col-md-12">
    <input type="email" name="email" class="form-control" id="validationDefault03" placeholder="Enter your Email id" required>
  </div>

  <div class="col-md-12">
    <textarea name="address" class="form-control" placeholder="Enter your Address"></textarea>
  </div>
                

    <div class="col-12">
        <button class="btn btn-dark form-control" type="submit" name="submit" onclick="myalert()">Submit</button>
    </div>

</form>
<script>
    function myalert(){
        alert ("Data Inserted Successfully");
    }
</script>

</div>
<div class="text-white text-center">
    <span>View The List Of Existing Users <a href="display.php" class="text-white">View</a></span>
</div>
</body>
</html>