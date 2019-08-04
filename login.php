<?php include('server.php') ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="physics.png">
    
    <script src="https://apis.google.com/js/platform.js" async defer></script>



   
    <title>RGallery | Login</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- CSS -->
    <link href="login.css" rel="stylesheet">
  </head>

  <body class="text-center">

      

    <form class="form-signin" id="myDIV" method="post" action="login.php">
      
      <img class="mb-4" src="physics.png" alt="" width="79" height="79">
      <h1 class="h3 mb-3 font-weight-normal" id="glow">Please Login</h1>
      <?php include('errors.php'); ?>
      <label for="inputEmail" class="sr-only">User Name</label>
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User Name" required autofocus>
      <br>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="password" id="inputPassword" name="password" class="form-control" placeholder="Password" required>
      <br>
      <button class="btn btn-lg btn-primary btn-block" type="submit" name="login_user">Login</button>
     
      <p><span style="color: white;">Not yet a member?</span> <a href="signup.php">Sign up</a>
      </p>

      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    
    </form>
    

  </body>
</html>
