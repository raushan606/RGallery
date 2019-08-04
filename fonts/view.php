
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
<html>
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>RGallery</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.css">
    <link rel="stylesheet" href="thumbnail-gallery.css">
    <link rel="icon" href="physics.png">

</head>
<body>
    <header class="masthead mb-auto">

        <div class="inner">
        	<?php  if (isset($_SESSION['username'])) : ?>
          <h4 class="masthead-brand">Welcome <strong><?php echo $_SESSION['username']; ?></strong> <a href="login.php?logout='1'"><button type="button" class="btn btn-outline-dark btn-sm">Logout</button></a></h4>
          <?php endif ?>
          <nav class="nav nav-masthead justify-content-center">
            
           
           
          </nav>

         
        </div> 
      </header>
<div class="container gallery-container">

    <h1>RGallery</h1>

    
    
    <div class="tz-gallery">

        <div class="row">

            
            <?php 
                        $conn = mysqli_connect("localhost","root","","registration");
                        
                        $query = "SELECT *FROM UserFiles";
                        
                        $result = mysqli_query($conn, $query);
                        
                        if(mysqli_num_rows($result) > 0)
                        {
                            while($row = mysqli_fetch_assoc($result))
                            {
                                $url = $row["FilePath"]."/".$row["FileName"];
                    ?>
                                
                    <div class="col-sm-6 col-md-4">
                        <div class="thumbnail">
                            <a href="<?php echo $url; ?>"><img src="<?php echo $url; ?>" class="images" /></a>
                        </div>
                    </div>

                    <?php
                            }
                        }
                        else
                        {
                    ?>
                        <p>There are no images uploaded to display.</p>
                    <?php
                        }
                    ?>
         <!--    <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/bridge.jpg">
                        <img src="images/bridge.jpg" alt="Bridge">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/tunnel.jpg">
                        <img src="images/tunnel.jpg" alt="Tunnel">
                    </a>
                    <div class="caption">
                        <h3> label</h3>
                        
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/coast.jpg">
                        <img src="images/coast.jpg" alt="Coast">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/rails.jpg">
                        <img src="images/rails.jpg" alt="Rails">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="thumbnail">
                    <a class="lightbox" href="images/traffic.jpg">
                        <img src="images/traffic.jpg" alt="Traffic">
                    </a>
                    <div class="caption">
                        <h3>Thumbnail label</h3>
                    </div>
                </div>
            </div> -->
        </div>

    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.8.1/baguetteBox.min.js"></script>
<script>
    baguetteBox.run('.tz-gallery');
</script>
</body>
</html>