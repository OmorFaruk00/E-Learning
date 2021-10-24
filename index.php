

<!DOCTYPE html>
<html lang="en">
<head>
  <title>E-Learning</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Custom CSS -->
  <link rel="stylesheet" href="CSS/style.css">
  <!-- Bootstrap CDN -->
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>
<body>

  <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand" href="index.php">E-Learning</a>
      <span class="navbar-text">Learn and Emplement</span>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav custom_navbar ml-auto">
          <li class="nav-item custom_nav_item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item custom_nav_item">
            <a class="nav-link" href="#">Courses</a>
          </li>
          <li class="nav-item custom_nav_item">
            <a class="nav-link" href="#">Payment</a>
          </li>
          <?php 
          session_start();
          if(isset($_SESSION['login'])){
            echo '<li class="nav-item custom_nav_item">
            <a class="nav-link " href="#">Profile</a>
            </li>
            <li class="nav-item custom_nav_item">
            <a class="nav-link" href="User/logout.php">Logout</a>
            </li>';
          }else{
            echo '<li class="nav-item custom_nav_item">
            <a class="nav-link " href="#" data-toggle="modal" data-target="#loginModal">Login</a>
            </li>
            <li class="nav-item custom_nav_item">
            <a class="nav-link " href="#" data-toggle="modal" data-target="#exampleModal">Signup</a>
            </li>';
          }
          ?>
          
          
          <li class="nav-item custom_nav_item">
            <a class="nav-link " href="#">Feedback</a>
          </li>
          <li class="nav-item custom_nav_item">
            <a class="nav-link " href="#">Contacts</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Start Video background -->
  <header>   
    <div class="vid_parent">
      <video autoplay loop muted>
        <source src="video/bgvideo.mp4">
        </video>
        <div class="vid_overlay "></div>
      </div>
      <div class="vid_contant text-center">
        <h1 class="my_contant">Welcome to E-Learning</h1>
        <small class="my_contant">Learn and implement</small><br>
        <a href="" class="btn btn-danger mt-3">Get Started</a>
      </div>      
    </header>
    <!-- End Video background -->
    <!-- Start Text Banner -->
    <div class="container-fluid bg-danger txt-banner">
      <div class="row bottom-banner">
        <div class=" col-md-3 col-lg-3">
          <h5><i class="fas fa-book-open mr-3">50+ Online Courses</i></h5>
        </div>
        <div class=" col-md-3 col-lg-3">
          <h5><i class="fas fa-users mr-3">Expert Instructors</i></h5>
        </div>
        <div class=" col-md-3 col-lg-3">
          <h5><i class="fas fa-keyboard mr-3">Lifetime Access</i></h5>
        </div>
        <div class=" col-md-3 col-lg-3">
          <h5><i class="fab fa-tumblr mr-3">Meney Back guarantee</i></h5>
        </div>    
      </div>
    </div>
    <!-- End Text Banner -->

    <!-- Start Registration form -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content ">
          <div class="modal-header">
            <h5 class="modal-title " id="exampleModalLabel">Registration </h5>   
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>         
          </div>
          <div class="modal-body">
            <form action="" method="post" id="register_sign_up">
              <div class="form-group">
                <i class="fas fa-users mr-2"></i><label for="">Name</label>
                <input type="text" name="name" id="name" class="form-control" required placeholder="Enter Name" >            
              </div>
              <div class="form-group">
                <i class="fas fa-envelope mr-2"></i><label for="">Email</label>
                <input type="email" name="email" id="email" class="form-control" required  placeholder="Enter email" >            
              </div>
              <div class="form-group">
                <i class="fas fa-key mr-2"></i><label for="">Password</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Password"  required>            
              </div>
              <div>
                <input type="hidden" name="role" id="role" value="student">
              </div>
              <input type="submit" class="btn btn-primary" id="signin"  name="submit" value="Submit"></input>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
              <div id="signin_alert"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <!-- End Registration form -->
    <!-- Start Login Form -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog  modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Login</h5>          
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form action="" method="post" id="loginUser">            
              <div class="form-group">
                <i class="fas fa-envelope mr-2"></i><label for="">Email</label>
                <input type="email" name="email" id="useremail" class="form-control" placeholder="Enter email">            
              </div>
              <div class="form-group">
                <i class="fas fa-key mr-2"></i><label for="">Password</label>
                <input type="pasword" name="password" id="userpassword" class="form-control" placeholder="Enter Password">            
              </div>                      
            </form>
            <div class="modal-footer">
              <div id="login_alert"></div>
              <button type="button" class="btn btn-primary mr-2" id="login">LogIn</button>
              <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button> 
            </div>
          </div>

        </div>
      </div>
    </div>

    <!-- End Login Form -->

    <script src="JS/ajax_script.js"></script>

  </body>
  </html>