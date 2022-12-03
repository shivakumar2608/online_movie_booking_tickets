<?php 

// include "config.php";
include "navbar3.php";
?>

<?php

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $cover_img = $_POST['cover_img'];
    $description = $_POST['description'];
    $category = $_POST['category'];
    $duration = $_POST['Duration'];
    $date_showing = $_POST['date_showing'];
    $end_showing = $_POST['end_showing'];
    $trailer_yt_link = $_POST['trailer_yt_link'];
    $duplicate = mysqli_query($conn, "SELECT * FROM movies WHERE title = '$title'");

    if(mysqli_num_rows($duplicate)>0){
      echo " <alert> Movie already exist </alert>";
    }
    else{
        $query = "INSERT INTO movies VALUES( '', '$title','$cover_img',  '$description' , '$category' ,'$duration', '$date_showing', '$end_showing', '$trailer_yt_link')";
        mysqli_query($conn, $query);
        
        echo " <alert> Movie uploaded</alert>";
      }
      
}


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
  <link rel="stylesheet" href="css/login.css">
</head>
<body>
  <main>
    <div class="container">
      <div class="row">
        <div class="col-sm-6 login-section-wrapper">
          <div class="login-wrapper m-0">
            <h1 class="login-title">Add-Movie:</h1>

            <form action="add-movies.php" method = "post">

            <div class="form-group mb-4">
                <label for="title">Movie-Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Enter movie title:">
              </div>
            <div class="form-group mb-4">
                <label for="cover_img">cover-img</label>
                <input type="text" name="cover_img" id="cover_img" class="form-control">
              </div>

              <div class="form-group mb-4">
                <label for="description">Description </label>
                <textarea  type="text" col= "12" name="description" id="description" class="form-control" placeholder="Describe?">  </textarea>
              </div>
              <div class="form-group mb-4">
                <label for="category" name = "category">Category </label>
                <input type="text" name="category" id="category" class="form-control" placeholder="Category">
              </div>
             
              <div class="form-group mb-4">
                <label for="Duration">Duration</label>
                <input type="number" name="Duration" id="Duration" class="form-control" placeholder="Movie Duration?">
              </div>
              <div class="form-group mb-4">
                <label for="date_showing">Date Showing</label>
                <input type="date" name="date_showing" id="date_showing" class="form-control" placeholder="Enter start date of showing">
              </div>
              <div class="form-group mb-4">
                <label for="end_showing">End Showing</label>
                <input type="date" name="end_showing" id="end_showing" class="form-control" placeholder="Enter end date of showing">
              </div>
              <div class="form-group mb-4">
                <label for="trailer_yt_link">Trailer-link</label>
                <input type="text" name="trailer_yt_link" id="trailer_yt_link" class="form-control" placeholder="Enter trailer link">
              </div>
              
              <button type="submit" name="submit" id="submit" class="btn btn-block login-btn" value="submit">Add Movie</button>
            </form>
       
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/add-movies.jpg"  alt="login image" class="login-img">
          
        </div>
      </div>
    </div>
  </main>
  <?php  include "footer.php" ?>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>