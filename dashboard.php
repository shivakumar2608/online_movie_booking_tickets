<?php require ('navbar3.php') ?>


<?php
if(!empty($_SESSION["admin_id"])){
  $admin_id = $_SESSION["admin_id"];
  $result = mysqli_query($conn, "SELECT * FROM admin WHERE admin_id = $admin_id");
  $row = mysqli_fetch_assoc($result);
  
}
else{
  if(!empty($_SESSION["id"])){
    
    echo "<script> alert('You Donot have Access Login through Admin Panel') </script>";
    header('Location: index.php');
}
else{
  header('Location: adminlogin.php');
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin panel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/dashboard.css">
</head>
<body >
  <div style="border: 2px solid black;margin-top:40px" class="container3">
    <h1 style="color: white; text-align:center">Dashboard </h1>
    
    <h1 style="color: white; text-align:center">Welcome <?php echo $row['name'] ?> </h1>
<br>
<br>
    <a class=" btn btn-outline-light btn-primary m-2" href="add-movies.php">Add movies</a>
    <a class=" btn btn-outline-light btn-warning m-2" href="view_movies.php">Show movies</a>
    <br>
    
    <a class=" btn btn-outline-light btn-primary me-2" href="add_theaters.php"> Add Theaters</a>
    <a class=" btn btn-outline-light btn-warning me-2" href="theaters.php"> Show Theaters</a>
    
<br>
<br>
    <a class=" btn btn-outline-light btn-lg btn-primary " href="users.php">Show users</a>
    
    </div>

    <?php  include "footer.php" ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</body>
</html>