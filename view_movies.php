<?php

include 'navbar2.php';


?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Login Template</title>
  <link href="https://fonts.googleapis.com/css?family=Karla:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.materialdesignicons.com/4.8.95/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  
<div class="container1">
<?php
        $sql = "SELECT * FROM movies";
        $res = mysqli_query($conn, $sql);
        $num = 1;
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            ?>
            <div class="container-movies">
            <h2>Recommended Movies</h2>
            <?php
            if($count >0){
                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows['id'];
                    $title = $rows['title'];
                    $img = $rows['cover_img'];
                    $description = $rows['description'];
                    $duration = $rows['duration'];
                    $trailer_yt_link = $rows['trailer_yt_link'];

                    ?>
                    <div class="movie"  id="movie">
                   <h3><?php echo $title ?></h3>
                   <a href=" seatbooking.php?movie_id= <?php echo $rows['id'] ?> " > <img class="image" id= "image" src=" <?php echo $img ?> " alt="" srcset=""> </a>
                   
                   <p> Duration: <?php echo $duration ?>hrs</p>
                   <p> <?php echo $description ?></p>
                   
                   </div>
   
    <?php

                }  
            }
            else{
                    //we dont have data in db
            }
        }
      
    ?>


</div>

  
<div class="container1">
<?php
        $sql = "SELECT * FROM movies";
        $res = mysqli_query($conn, $sql);
        $num = 1;
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            ?>
            <div class="container-movies">
            <h2>Comedy Movies</h2>
            <?php
            if($count >0){
                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows['id'];
                    $title = $rows['title'];
                    $img = $rows['cover_img'];
                    $description = $rows['description'];
                    $duration = $rows['duration'];
                    $trailer_yt_link = $rows['trailer_yt_link'];

                    ?>
                    <div class="movie"  id="movie">
                   <h3><?php echo $title ?></h3>
                   <a href=" seatbooking.php?movie_id= <?php echo $rows['id'] ?> " > <img class="image" id= "image" src=" <?php echo $img ?> " alt="" srcset=""> </a>
                   
                   <p> Duration: <?php echo $duration ?>hrs</p>
                   <p> <?php echo $description ?></p>
                   
                   </div>
   
    <?php

                }  
            }
            else{
                    //we dont have data in db
            }
        }
      
    ?>


</div>

  
<div class="container1">
<?php
        $sql = "SELECT * FROM movies";
        $res = mysqli_query($conn, $sql);
        $num = 1;
        if($res== TRUE){
            $count = mysqli_num_rows($res);
            ?>
            <div class="container-movies">
            <h2>Thriller Movies</h2>
            <?php
            if($count >0){
                while($rows = mysqli_fetch_assoc($res)){
                    $id = $rows['id'];
                    $title = $rows['title'];
                    $img = $rows['cover_img'];
                    $description = $rows['description'];
                    $duration = $rows['duration'];
                    $trailer_yt_link = $rows['trailer_yt_link'];

                    ?>
                    <div class="movie"  id="movie">
                   <h3><?php echo $title ?></h3>
                   <a href=" seatbooking.php?movie_id= <?php echo $rows['id'] ?> " > <img class="image" id= "image" src=" <?php echo $img ?> " alt="" srcset=""> </a>
                   
                   <p> Duration: <?php echo $duration ?>hrs</p>
                   <p> <?php echo $description ?></p>
                   
                   </div>
   
    <?php

                }  
            }
            else{
                    //we dont have data in db
            }
        }
      
    ?>


</div>

<?php include'footer.php' ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>