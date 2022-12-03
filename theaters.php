<?php include 'navbar3.php' ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Theater</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        table{
            margin: auto;
            width: 55%;
            background-color:black; 
            table-layout: fixed;
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
    $sql = "SELECT * FROM theaters";
    $res = mysqli_query($conn, $sql);
    $num = 1;
    if($res== TRUE){
        $count = mysqli_num_rows($res);
        ?>
        <div class="">
        <h2 align="center" style="margin:30px">Theaters </h2>
        
        <table>
    <tr>
        <th>S.no</th>
        <th>Theater Name</th>
        <th>Location</th>
        <th>Type</th>
        <th>Price</th>
        <th>Book Status</th>
        
        </tr>

        
        </table>
        <?php
        if($count >0){
            while($rows = mysqli_fetch_assoc($res)){
                $id = $rows['theaters_id'];
                $theaters_name = $rows['theaters_name'];
                $location= $rows['location'];
                $type = $rows['type'];
                $price = $rows['price'];
                $bookstatus = $rows['bookstatus'];

                ?>
    <table>
      
    <tr >
        <td ><?php echo $id ?></th>
        <td><?php echo $theaters_name ?></th>
        <td><?php echo $location ?></th>
        <td><?php echo $type ?></th>
        <td><?php echo $price ?></th>
         <td class="green"> <a href="seatbooking.php"> <?php echo $bookstatus ?> </a></td> 

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