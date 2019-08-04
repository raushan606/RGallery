
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
  if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['username']);
    header("location: login.php");
  }
?>




<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>RGallery</title>    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Permanent+Marker&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kalam&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="home.css" rel="stylesheet">
    <link rel="icon" href="physics.png">
  </head>

  <body class="text-center">
    
    <div class="cover-container d-flex h-100 p-3 mx-auto flex-column">
    	<!-- <div class="content"> -->
    <!-- logged in user information -->
    <!-- <?php  if (isset($_SESSION['username'])) : ?>
      <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong> <br><a href="login.php?logout='1'" class="btn btn-outline-danger btn-sm">Logout</a></p>
    <?php endif ?>
</div> -->

      <header class="masthead mb-auto">

        <div class="inner">
        	<?php  if (isset($_SESSION['username'])) : ?>
          <h4 class="masthead-brand">Welcome <strong><?php echo $_SESSION['username']; ?></strong></h4>
          <nav class="nav nav-masthead justify-content-center">
            
           <a href="login.php?logout='1'" class="btn btn-outline-dark btn-sm">Logout</a>
           <?php endif ?>
          </nav>

         
        </div> 
      </header>

      <main role="main" class="inner cover">
        <h1 class="cover-heading" style="font-family: 'Permanent Marker', cursive; font-weight: bolder; color: rgba(14, 21, 90, 0.8); font-size: 60px;">RGallery</h1>
        <p class="lead" style="font-family: 'Kalam', cursive; color: rgb(114, 22, 90);">RGallery is a collection of beautiful pictures.</p>
        <p class="lead">
          <a href="view.php" class="btn btn-outline-primary btn-lg btn-block">View</a>
          <a href="uploadPage.php" class="btn btn-outline-success btn-lg btn-block">Upload</a>
        </p>
      </main>

      <footer class="mastfoot mt-auto">
        <div class="inner">
          <p><a href="https://raushan606.github.io/" target="_blank" style="color: black;" >Raushan Kumar</a><br>
          <span style="color: black;">&copy; 2019-2020</span></p>
          
        </div>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    
  </body>
</html>
