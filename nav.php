<?php
session_start();
include "connection.php";
?>
<!DOCTYPE html>
<head>
  <link rel="stylesheet" href="css/style.css">
   <!--LINKING BS & JS-->
   <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <script src="jquery/jqery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="bootstrap/js/bootstrap.min.js"></script>
    
</head>
<body>
<!-- ------------------------------------------------------------------------------------------------------------------ -->
<nav class="navbar navbar-expand-md sticky-top" id="nav">
  <a class="navbar-brand" href="index1.1.php" style="color: #F4D35E ">My Creations</a>
  <button class="navbar-toggler" style="background-color: #F4D35E; color:F76C6C;" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon" style="color: #F76C6C "></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" id="navlink" href="#posts">List Of Post's</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="navlink" href="#about">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="navlink" href="#contact">Contact</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" id="navlink" href="#feedback">Feedback</a>
          </li>
      </ul>    
            <div class="btnn"  style="background-color:transparent;border: none;">
                <div class="container">
                  <?php
                  if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
                      ?>
                <!------------------------------------------------------------------------------------------------->
                  <div class="btn-group" >
                      <button type="button" class="btn btn-primary btn" style="float:right;"><?php echo $_SESSION["uname"];?></button>
                      <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split btn" data-toggle="dropdown" style="float:right;">
                        <span class="caret" style="float:right;"></span>
                      </button>
                      <div class="dropdown-menu" style="float:right;">
                        <a class="dropdown-item" href="mywork.php#write" style="float:right;">Post Your content</a>
                        <a class="dropdown-item" href="del.php" style="float:right;">Delete Your content</a>
                        <a class="dropdown-item" href="edit.php" style="float:right;">Edit Your content</a>
                        <a class="dropdown-item" href="logout.php" style="float:right;">Logout</a> 
                      </div>
                  </div>
  <!--************************************************************************************************-->
<?php

}
     else{      
           ?>
 <!-- <h2>Split Buttons</h2>-->
                  <div class="btn-group" >
                    <button type="button" class="btn btn-primary btn" id="navlink" style="background-color:rgba(94, 116, 165, 0.4);border: none;">Other</button>
                    <button type="button" class="btn btn-primary dropdown-toggle dropdown-toggle-split" id="navlink" data-toggle="dropdown" style="background-color:rgba(94, 116, 165, 0.4);border: none;">
                      <span class="caret" id="navlink" style="background-color:rgba(94, 116, 165, 0.4);"></span>
                    </button>
                    <div class="dropdown-menu" id="navlink" style="background-color:rgba(94, 116, 165, 0.4);">
                          <a class="dropdown-item" id="navlink" href="search.php" style="background-color:rgba(94, 116, 165, 0.4);">Search Post's</a>
                          <a class="dropdown-item" id="navlink" href="#posts" style="background-color:rgba(94, 116, 165, 0.4);">Post's</a>
                          <a class="dropdown-item" id="navlink" href="mywork.php#write" style="background-color:rgba(94, 116, 165, 0.4);">Post Your content</a>
                          <a class="dropdown-item" id="navlink" href="login.php" style="background-color:rgba(94, 116, 165, 0.4);">Login</a> 
                          <a class="dropdown-item" id="navlink" href="signup.php" style="background-color:rgba(94, 116, 165, 0.4);">SignUp</a>
                      </div>
              </div>
  <?php } ?>
              </div>
            </div>
     </div>
</nav><br>
<br>
     </body>
     </html>