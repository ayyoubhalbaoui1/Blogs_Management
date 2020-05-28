<!doctype html>


  <?php
  session_start();

           require_once('./config/dbconfig.php'); 
    $db = new operations();
    $ID= $_SESSION['id'];
     $db->set_viewbyid($ID);
    
    $result = $db->get_viewbyid();
   
          
            if (isset($_SESSION['user'])) {
             
           
              ?>
<html lang="en">



<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Jekyll v3.8.6">
  <title>Myprofile</title>
   <script src="https://kit.fontawesome.com/f87defdbca.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

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
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
          
          		<a class="nav-link" href="profile.php">Profile <span class="sr-only">(current)</span></a>

          
          </li>
        </ul>
        <div class="form-inline mt-2 mt-md-0">
          <div class="row100 d-flex">
            <div class="mr-2">
            <a class="btn btn-outline-primary" style="color:white;border:2px solid white" href="logout.php" role="button">Logout</a>
           
            </div>
           
          </div>
        </div>

      </div>
      </div>
    </nav>
  </header>
       




    <section class="section">
        <div class="container-fluid">
            <div class="container">
                <div class="formBox">
                                        
                    <form action="add.php" method="POST" >
                        <div class="row1">
                            <div class="col-xl-12">
                      

                                <h1>Create Publication</h1>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">

 
                                        <input type="file" name="image" class="input">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Title</div>
                                        <input type="text" name="title" class="input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Category</div>
                                        <input type="text" name="category" class="input">
                                    </div>
                                </div>
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText"></div>
                                        <input type="date" name="dates" class="input">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <div class="inputText">Description</div>
                                        <textarea class="input" name="description"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row1">
                                <div class="col-xl-6">
                                    <div class="inputBox">
                                        <input type="submit" value="Create Blog +"  name="btn_save"   class="butt">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

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
                                <a href="#"><i class="fa fa-home" style="color:black"></i></a>
                                <a href="# ?>"><i class="fa fa-search" style="color:black"></i></a>
                                <a href="del.php?D_ID=<?php echo $row['pub_id'] ?>"><i class="far fa fa-trash" style="color:black"></i></a>

                                <a href="edit.php?D_ID=<?php echo $row['pub_id'] ?>"><i class="fa fa-edit" style="color:black"></i></i></a>
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
                                            <i class="fa fa-clock" style="color:black" aria-hidden="true"></i><?php echo $row['dates'] ?>
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
        <?php
          }else{

            header('Location:login.php');
            exit();
          }


        ?>
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
      <p class=""><small class="text-white-50">© 2019. All Rights Reserved.</small></p>
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

    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
    <script type="text/javascript">
        $("input").focus(function () {
            $(this).parent().addClass("focus")
        })

    </script>
</body>

</html>
