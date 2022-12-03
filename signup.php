<?php include ('navbar.php') ?>
<?php include ('config.php') ?>

<?php 
  if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $username = $_POST['username'];
    $mobile = $_POST['mobile'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];
    $duplicate = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username' OR email = '$email' ");
    if(mysqli_num_rows($duplicate)>0){
      echo "User name/email already taken";
    }
    else{
      if($password == $password2){
        $query = "INSERT INTO users VALUES( '', '$name','$username',  '$mobile' ,'$email', '$password')";
        mysqli_query($conn, $query);
        header('location: login.php');
        echo "User created";
      }
      else{
        echo "Password Does not match!";
      }
    }
  }
?>

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
            <h1 class="login-title">Register</h1>
            <form action="signup.php" method = "post">

            <div class="form-group mb-4">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" placeholder="Enter your name">
              </div>
            <div class="form-group mb-4">
                <label for="name">Username</label>
                <input type="text" name="username" id="username" class="form-control" placeholder="Enter your Username">
              </div>

              <div class="form-group mb-4">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" class="form-control" placeholder="email@example.com">
              </div>
             
              <div class="form-group mb-4">
                <label for="mobile">Mobile</label>
                <input type="number" name="mobile" id="password" class="form-control" placeholder="enter your mobile number">
              </div>
              <div class="form-group mb-4">
                <label for="password">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="enter your passsword">
              </div>
              <div class="form-group mb-4">
                <label for="password2">Confirm Password</label>
                <input type="password2" name="password2" id="password2" class="form-control" placeholder="enter your passsword">
              </div>
              
              <button type="submit" name="submit" id="submit" class="btn btn-block login-btn" value="submit">Register</button>
            </form>
       
          </div>
        </div>
        <div class="col-sm-6 px-0 d-none d-sm-block">
          <img src="images/login.jpg" alt="login image" class="login-img">
          
        </div>
      </div>
    </div>
  </main>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>
</html>