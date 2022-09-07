<?php
$con = new mysqli('localhost','root','Wamp@root1','crudoperation');

if(!$con){
     die(mysqli_error($con));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        #text{
            font-weight:bold;
            font-size:25px;
        }
        .but{
            text-align:right;
            vertical-align: baseline;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

</head>
<body class="bg-dark">
    <div class="container bg-white my-5 p-4">
    <div class="one">
    <table class="table table-striped">
  <thead>
    <tr>
        <td colspan="2"     >
            <p id="text">Manage Users</p> 
        </td>
        <td colspan="3" class="but"><a href="user.php"><button type="button" class="btn btn-dark"><i class="fa-solid fa-circle-plus"></i>Add New User</button></a></td>

        
    </tr>
    <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Action</th>
            </tr>
  </thead>
  <?php
                $sql="Select * from `crudtable`";
                $result = mysqli_query($con,$sql);

                if($result){
                  while($row=mysqli_fetch_assoc($result)){
                    $id=$row['ID'];
                    $fname=$row['FirstName'];
                    $lname=$row['LastName'];
                    $email=$row['Email'];
                    $mobile=$row['Mobile'];
                    

                    echo '
                    <tr>
                <td>'.$id.'</td>
                <td>'.$fname.' '.$lname.'</td>
                <td>'.$email.'</td>
                <td>'.$mobile.'</td>
                <td>
                    <a href="update.php?updateid='.$id.'"><i class="fa-solid fa-pen" style="color:#fcec0a"></i></a>
                    <a href="delete.php?deletedid='.$id.'" onclick="myalert()"><i class="fa-solid fa-trash" style="color:red"></i></a>
                </td>
                
            </tr>
                    ';
                  }
                }
                ?>
  
</table>
    </div>
    </div>
    <script>
    function myalert(){
        if(confirm("Do You Really Want To Delete?") == true){
            alert("Data deleted");
        }
    }
</script>
         
</body>
</html>