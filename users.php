<?php include 'navbar3.php' ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        table{
            margin: auto;
            width: 55%;
            background-color:black; 
        }
        .green{
            color:green;
        }
        td{
            margin:10px;
        }
        tr:hover{
   
            background-color: blue;
            color:white;
            background:grey;
            cursor: pointer;
        }
        th{
            background:grey;
        }
        td{
            background:lightgrey;
        }
    </style>
</head>
<body>
</div>


     
<?php
    $sql = "SELECT * FROM users";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    if($res== TRUE){
        $count = mysqli_num_rows($res);
        ?>
        <div class="">
        <h2 align="center" style="margin:30px">Registered Users </h2>
        
        <table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Username</th>
        <th>Mobile</th>
        <th>Price</th>
        <th>Email</th>
        
        </tr>

        
        </table>
        <?php
        if($count >0){
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['id'];
                $name = $rows['name'];
                $username= $rows['username'];
                $mobile = $rows['mobile'];
                $email = $rows['email'];
                

                ?>
    <table>
      
    <tr align="center">
        <td><?php echo $id ?></th>
        <td><?php echo $name ?></th>
        <td><?php echo $username ?></th>
        <td><?php echo $mobile ?></th>
        <td><?php echo $email ?></th>
         

        </tr>
       
        
        </table>   
<?php

            }  
        }
        else{
                //we dont have data in db
        }
    }
  
?>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>