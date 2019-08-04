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



   
    <title>RGallery | Signup</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- CSS -->
    <link href="signup.css" rel="stylesheet">
  </head>

  <body class="text-center">

      

    <form class="form-signin" id="myDIV" method="post" action="signup.php">
      
      <img class="mb-4" src="physics.png" alt="" width="79" height="79">
      <h1 class="h3 mb-3 font-weight-normal" id="glow">Please Signup</h1>
      <?php include('errors.php'); ?>
          <!-- USERNAME -->
      <!-- <label for="inputEmail" class="sr-only">User Name</label> -->
      <input type="text" name="username" id="inputEmail" class="form-control" placeholder="User Name" value="<?php echo $username;?>" required autofocus>
      <br>
            <!-- EMAIL -->
      <!-- <label for="inputEmail" class="sr-only">Email</label> -->
      <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email" value="<?php echo $email; ?>" required autofocus>
      <br>
            <!-- PASSWORD -->
      <!-- <label for="inputPassword" class="sr-only">Password</label> -->
      <input type="password" id="inputPassword" name="password_1" class="form-control" placeholder="Password" required>
      <br>
              <!-- CONFIRM PASSWORD -->
      <!-- <label for="inputPassword" class="sr-only">Confirm Password</label> -->
      <input type="password" id="inputPassword" name="password_2" class="form-control" placeholder="Confirm Password" required>
      <br>



      <button class="btn btn-lg btn-primary btn-block" type="submit" name="reg_user">Signup</button>
     
      <p><span style="color: white;">
      Already a member?</span> <a href="login.php">Login</a>
      </p>

      <p class="mt-5 mb-3 text-muted">&copy; 2019-2020</p>
    
    </form>
    

  </body>
</html>
