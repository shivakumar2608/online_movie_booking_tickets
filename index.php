<?php

include('navbar2.php');

?>

<?php
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM  users WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}

else{
header('Location: login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body style="background-color: rgba(235, 242, 253, 0.39);">


<div id="myCarousel" class="carousel slide m-0" data-bs-ride="carousel"> 
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2" class="active" aria-current="true"></button>
      <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3" class=""></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        
        <img class='carousel-imgg' width="100%" height="100%" src="images/carosal_img1.avif" alt="" srcset="">
      </div>
      <div class="carousel-item ">
      <img class='carousel-imgg' width="100%" height="100%" src="https://assets-in.bmscdn.com/promotions/cms/creatives/1669791051507_offerweb.jpg" alt="" srcset="">
      </div>
      <div class="carousel-item">
      <img class='carousel-imgg' width="100%" height="100%" src="https://assets-in.bmscdn.com/promotions/cms/creatives/1669814591087_web.jpg" alt="" srcset="">
      </div>
     
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

<br>
<br>
     
<div class="container1">
  <?php
          $sql = "SELECT * FROM movies";
          $res = mysqli_query($conn, $sql);
          $num = 1;
          if($res== TRUE){
              $count = mysqli_num_rows($res);
              ?>
              <div class="container-movies">
              <h2>Romantic Movies</h2>
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
                     <a href="theaters.php" > <img class="image" id= "image" src=" <?php echo $img ?> " alt="" srcset=""> </a>
                     
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
  
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <br>

    <div class="container1">
      <?php
              $sql = "SELECT * FROM movies";
              $res = mysqli_query($conn, $sql);
              $num = 1;
              if($res== TRUE){
                  $count = mysqli_num_rows($res);
                  ?>
                  <div class="container-movies">
                  <h2>Romantic Movies</h2>
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

      
    <br>
    <br>
    <br>
    <br>
    <br>
    <hr>
    <br>
    <br>
    <br>


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
        <br><br><br>

<?php  include "footer.php" ?>
<br>
<br>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>


</body>
</html>
