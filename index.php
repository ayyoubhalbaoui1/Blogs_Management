<!doctype html>
<html lang="en">
<?php
 session_start();
    require_once('./config/dbconfig.php'); 
    $db = new operations();
    $result=$db->view_record();
   
  
 ?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Home</title>

  <!-- <link rel="canonical" href="https://getbootstrap.com/docs/4.4/examples/carousel/"> -->

  <!-- Bootstrap core CSS -->
  <!-- <link href="/docs/4.4/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous"> -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />

  <!-- Favicons -->
  <link rel="stylesheet" href="styles/home.css">
  <link rel="stylesheet" href="styles/style.css">
</head>

<body>
  <header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top ">
      <a class="navbar-brand" href="#">Blog Life</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
          	<?php
          	// require_once('./config/dbconfig.php');
          
         
          	if (isset($_SESSION['user'])) {
          		echo '<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>';

          	}
            ?>
          </li>
        </ul>
        <div class="form-inline mt-2 mt-md-0">
          <div class="row100 d-flex">
            <div class="mr-2">
                <a class="btn btn-outline-primary" style="color:white;border:1px solid white" href="login.php" role="button">Login</a>
           
            </div>
            <div>
              <a class="btn btn-outline-primary" style="color:white;border:1px solid white" href="login.php" role="button">SignUp</a>
            </div>
          </div>
        </div>

      </div>
      </div>
    </nav>
  </header>
<!-- Page wrapper -->
<div class="page-wrapper">

<!-- Posts Slider -->
<div class="posts-slider">
  <h1 class="slider-title">Trending Posts</h1>
  <i class="fa fa-chevron-right next"></i>
  <i class="fa fa-chevron-left prev"></i>

  <div class="posts-wrapper">
    <div class="post">
      <div class="inner-post">
        <img src="images/image_7.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
        <div class="post-info">
          <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
            <div>
              <i class="fa fa-user-o"></i> Ayyoub HALBAOUI
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2020
            </div>
        </div>
      </div>
    </div>
    <div class="post">
      <div class="inner-post">
        <img src="images/image_6.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
        <div class="post-info">
          <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
            <div>
              <i class="fa fa-user-o"></i> Ayyoub HALBAOUI
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2020
            </div>
        </div>
      </div>
    </div>
    <div class="post">
      <div class="inner-post">
        <img src="images/image_5.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
        <div class="post-info">
          <h4><a href="single.php">One day your life will flash before your eyes</a></h3>
            <div>
              <i class="fa fa-user-o"></i> Ayyoub HALBAOUI
              &nbsp;
              <i class="fa fa-calendar"></i> Jan 18, 2020
            </div>
        </div>
      </div>
    </div>
    <div class="post">
      <div class="inner-post">
        <img src="images/image_4.png" alt="" style="height: 200px; width: 100%; border-top-left-radius: 5px; border-top-right-radius: 5px;">
        <div class="post-info">
          <h4><a href="single.php">One day your life will flash before your eyes</a></h4>
          <div>
            <i class="fa fa-user-o"></i> Ayyoub HALBAOUI  
            &nbsp;
            <i class="fa fa-calendar"></i> Jan 18, 2020
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- // Posts Slider -->

  <!-- Three columns of text below the carousel -->
  <section class="section1">
    <div class="container-fluid">
      <h5>ALL PUBLICATION</h5>
     
  <section class="section1">
        <div class="container-fluid">
            <div class="container">
                <div class="row">



                 
                           
                           <?php
          
                             if(!empty($result)) { 
                                    foreach($result as $row) {
                                          
                                ?>
 
           
            



                    <div class="col-sm-4">
                        <div class="card">
                            <div class="icone">
                                <a href="#"><i class="far fa-trash-alt"></i></a>
                            </div>
                            <div class="post-image">
                                <img src="imgs/<?php echo $row['image'] ?>" class="img-responce" width="100%" height="100%">
                            </div>
                            <div class="news-content">
                                <span class="category"><?php echo $row['category'] ?></span>
                                <div class="post-meta">
                                    <span class="author">
                                        <a href="#">
                                            <i class="fa fa-user" style="color:black" aria-hidden="true"></i>
                                        </a>
                                    </span>
                                    <span class="timer">
                                        <a href="#">
                                            <i class="fa fa-clock" aria-hidden="true"></i><?php echo $row['dates'] ?>
                                        </a>
                                    </span>
                                    
                                    <div class="clearfix"></div>
                                </div>
                                <h2 class="post-header"><?php echo $row['title'] ?></h2>
                                <p><?php echo $row['description'] ?></p>
                            </div>
                        </div>
                    </div>
                        <?php
          
                             }
                           }
                                          
                                ?>
 
                 
                </div>
            </div>
        </div>
    </section>


  </div>
 </section>
 <!-- FOOTER -->
 <!-- <div class="mt-5 pt-5 pb-5 footer">
<div class="container">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>Heading</h2>
      <p class="pr-5 text-white-50">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam ac ante mollis quam tristique convallis </p>
      <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
    </div>
    <div class="col-lg-3 col-xs-12 links">
      <h4 class="mt-lg-0 mt-sm-3">Links</h4>
        <ul class="m-0 p-0">
          <li>- <a href="#">Lorem ipsum</a></li>
          <li>- <a href="#">Nam mauris velit</a></li>
          <li>- <a href="#">Etiam vitae mauris</a></li>
          <li>- <a href="#">Fusce scelerisque</a></li>
          <li>- <a href="#">Sed faucibus</a></li>
          <li>- <a href="#">Mauris efficitur nulla</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">Location</h4>
      <p>22, Lorem ipsum dolor, consectetur adipiscing</p>
      <p class="mb-0"><i class="fa fa-phone mr-3"></i>(541) 754-3010</p>
      <p><i class="fa fa-envelope-o mr-3"></i>info@hsdf.com</p>
    </div>
  </div>
  <div class="row mt-5">
    <div class="col copyright">
      <p class=""><small class="text-white-50">© 2020. All Rights Reserved.</small></p>
    </div>
  </div>
</div>
</div> -->
  <!-- // FOOTER -->
  

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  <script>
    window.jQuery || document.write('<script src="/docs/4.4/assets/js/vendor/jquery.slim.min.js"><\/script>')

  </script>
  <script src="/docs/4.4/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-6khuMg9gaYr5AxOqhkVIODVIvm9ynTT5J4V1cfthmT+emCG6yVmEZsRHdxlotUnm" crossorigin="anonymous">
  </script>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
  </script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
    integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
  </script>
   <!-- JQuery -->
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<!-- Slick JS -->
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script src="scripts.js"></script>
</body>

</html>
