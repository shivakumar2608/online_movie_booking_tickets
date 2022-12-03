<?php 

// include "config.php";
include "navbar3.php";
?>

<?php

if(isset($_POST['submit'])){
    $theaters_name = $_POST['theaters_name'];
    $location = $_POST['location'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $bookingstatus = $_POST['bookingstatus'];
    
    $duplicate = mysqli_query($conn, "SELECT * FROM theaters WHERE theaters_name = '$theaters_name'");

    if(mysqli_num_rows($duplicate)>0){
      echo " <alert> Movie already exist </alert>";
    }
    else{
        $query = "INSERT INTO movies VALUES( '', '$theaters_name','$location',  '$type' , '$price' ,'$bookingstatus')";
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
            <h1 class="login-title">Add-Theaters:</h1>

            <form action="add_theaters.php" method = "post">

            <div class="form-group mb-4">
                <label for="title">Theaters Name</label>
                <input type="text" name="theaters_name" id="title" class="form-control" placeholder="Enter movie title:">
              </div>
            <div class="form-group mb-4">
                <label for="cover_img">Location</label>
                <input type="text" name="location" placeholder="Enter location:" id="location" class="form-control">
              </div>

              <div class="form-group mb-4">
                <label for="type" name = "type">Type </label>
                <input type="text" name="type" id="type" class="form-control" placeholder="Category:">
              </div>
             
              <div class="form-group mb-4">
                <label for="price">Price</label>
                <input type="number" name="price" id="price" class="form-control" placeholder="Theater Price:">
              </div>
              <div class="form-group mb-4">
                <label for="bookingstatus">Booking Status</label>
                <input type="text" name="bookingstatus" id="price" class="form-control" >
              </div>
              
              <button type="submit" name="submit" id="submit" class="btn btn-block login-btn" value="submit">Add Theater</button>
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