<!--PHP FOR CONTACT-->
<?php
include "nav.php";
include "connection.php";
if(isset($_POST['go'])){
$name=	$_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$datainsert = "INSERT INTO contact_us (NAME,Email,MESSAGE) VALUES ('$name','$email','$message')";
$execute = mysqli_query($connection, $datainsert);
if($execute){
echo "<script>alert('CONTACTED SUCCESSFULLY')</script>";	
}
else{
	echo "<script>alert('ERROR OCCOURED')</script>";
}
}
  ?>


<!--PHP FOR FEEDBACK-->
<?php
if(isset($_POST['gooo'])){
$name=	$_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$datainsert = "INSERT INTO feedback (NAME,Email,MESSAGE) VALUES ('$name','$email','$message')";
$execute = mysqli_query($connection, $datainsert);
if($execute){
echo "<script>alert('FEEDBACK SENT SUCCESSFULLY')</script>";	
}
else{
	echo "<script>alert('ERROR OCCOURED')</script>";
}
}
  ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>MY Creations</title>
  <meta charset="UTF-8">
        <meta property="og:image" content="https://mycreationswithaditya.000webhostapp.com/img/mc.png">
        <meta name="description" content="this is the my creations created by aditya you can write your own thoughts here or can read the exciting things">
        <meta name="keywords" content="mycreations, My Creations, mycreationswithaditya, My Creations With Aditya, aditya barve, Aditya Barve">
        <meta name="author" content="Aditya Barve">
   
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="Distribution" content="Global"/>
   <!-- <meta name="Resource-Type" content="Document"/>-->


    <!-- mobile meta (hooray!) -->
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--LINKING BS & JS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    
    <!--LINKING EXTERNAL  SHEET-->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    
    
    
   <link rel="apple-touch-icon" sizes="57x57" href="img/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="img/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="img/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="img/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="img/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="img/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="img/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="img/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="img/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="img/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
<link rel="manifest" href="img/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
  <link rel="sheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">   
  
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-5238079849270984",
    enable_page_level_ads: true
  });
</script>
</head>




<body class="body">
<br>

<!----><center>        
    <div class="container updates jumbotron" id="posts"  style="margin-left:2%;margin-right:2%;">
<div class="container">
  
  
   <h1>READ POSTS</h1>

    <div class="alert alert-warning">
    <strong>Warning!</strong> All contents in the website are subjected to have copyrights.
  </div>
        
 <?php    
    
    
      $querry1 = "SELECT * FROM writee";
        $querry2 = mysqli_query($connection,$querry1);
        $i = 0;
        while($querry3 = mysqli_fetch_assoc($querry2)){
            $i++;
            $id = $querry3['ID'];
            $name = $querry3['NAME'];
            $title = $querry3['TITLE'];
            $sbtitle = $querry3['SUBTITLE'];
            $content = $querry3['CONTENT'];
             $link = $querry3['LINK'];
              $ld = $querry3['LINKDESCRIPTION'];
            $j=0;
?>   
                    

        
      <br><br>
             

              <div id="<?php echo 'accordion'.$i; ?>" >
    <div class="card" style="font-family:Times New Roman, Times, serif;font-size:18px;">
      <div class="card-header"> 
        
           <h4><a href="#<?php echo 'accordion'.$i; ?>" style="text-decoration: none;color:#333333"><?php echo $title; ?> <h5>-<?php echo $sbtitle; ?></h5></a></h4>
        <a class="card-link" data-toggle="collapse" href="#<?php echo 'collapseOne'.$i; ?>"> 
        <h6 style="color:#F76C6C ">Read or Close</h6>
        </a>
      </div>
      <div id="<?php echo 'collapseOne'.$i; ?>" class="collapse " data-parent="#<?php echo 'accordion'.$i; ?>">
        <div class="card-body">
          <?php    
    
    $j++;
   
?>   
    
        
      <br><br>
    
          <h1 id = "<?php echo $id; ?>" style="color:#333333; font-size: 24px"><?php echo $title; ?></h1>
    
             <h3  id = "<?php echo $sbtitle; ?>" style="color:#333333; font-size: 20px"><?php echo "-".$sbtitle; ?></h3>
             <?php
            echo "<br><br><p ='white-space: pre-wrap;'><h4 style='white-space: pre-wrap; font-size:18px'><i>$content</i></h4></p>";
              echo "<br><br><h5><i><a href='$link'>$link</a></i></h5>";
               echo "<br><br><h5><i>$ld</i></h5>";
            echo "<br><br><h4><i><b>Posted By: $name</b></i></h4><br><br>";
            
           
            
             echo "<br><br><h4><i><b>--------------------------</b></i></h4><br><br><br><br>";
        

    ?>
    
    
        </div>
      </div>
    </div>
            </div>

       
     
      <?php
         }
 
    ?> 
    </div>
  </div>    
<!---->


    
    
    <br><br>
    
    <!--ABOUT-->
    <div class="container about jumbotron" id="about">
 
        <div class="container-fluid">
  <h1 style="text-align:center;  color:#333333; font-size:28px">ABOUT</h1>
  
  <div class="container-fluid">
    
      <!--<img src="img/mc.png" class=" img-thumbnail" alt="MY CREATIONS LOGO" height="200px" width="200px" ="margin-left:5%;">
      -->
        <h1 style="text-align:center; color:#333333; font-size:24px">My Creations</h1><br> <br>
      
    
      
    <h3 style="text-align:center; color:#333333; font-size:20px">my creations has been started by me, to make my content or the writings to reach to public. <br>so please support me and you can post your thoughts too here at this platform and make it grow<br>here are some of links to join us on youtube and follow me on instagram</h3>
    <br><br>
    <div class="container">
        
 <a href="https://www.youtube.com/channel/UCsPRpVjm15ZG1kHSpFCG4Ww" style="text-decoration:none;color:#333333; float:left;"> youtube</a>
       
<a href="https://www.instagram.com/adityabarve28/?hl=en" style="text-decoration:none;color:#333333; float:right;">
Instagram</a>
    </div>
  
</div>
        
        </div>     
    
   
    
    </div>
    <br> <br> <br> <br>
    
    
    <!--CONTACT-->
    
<div class="container contact jumbotron" id="contact">
  <h2>Contact</h2>
 
  <form method="POST" action="">
    <div class="form-group">
      <!--<label for="usr">Name:</label>-->
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <!--<label for="pwd">Password:</label>-->
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
          <div class="form-group">
      <!--<label for="pwd">Password:</label>-->
              <textarea class="form-control" name="message" placeholder="Enter Message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="go">Submit</button>
  </form>
    </div>
<br><br>
    
    <!--WRITE-->

    
    
  
<br>
<div class="container feedback jumbotron" id="feedback">
  <h2>Feedback</h2>
 
  <form method="POST" action="">
    <div class="form-group">
      <!--<label for="usr">Name:</label>-->
      <input type="text" class="form-control" name="name" placeholder="Enter Name">
    </div>
    <div class="form-group">
      <!--<label for="pwd">Password:</label>-->
      <input type="email" class="form-control" name="email" placeholder="Enter Email">
    </div>
          <div class="form-group">
      <!--<label for="pwd">Password:</label>-->
              <textarea class="form-control" name="message" placeholder="Enter Message" rows="4"></textarea>
    </div>
    <button type="submit" class="btn btn-primary" name="gooo">Submit</button>
  </form>
    </div>
<br><br>

      <!-- Footer -->
<footer class="page-footer font-small blue pt-4 id="navlink"" id="footer">

  <!-- Footer Links -->
  <div class="container-fluid text-center text-md-left">

    <!-- Grid row -->
    <div class="row">

      <!-- Grid column -->
      <div class="col-md-6 mt-md-0 mt-3">

        <!-- Content -->
        <h5 class="text-uppercase" id="navlink">CONTACT : 9137818209</h5>
        <p id="navlink">OR MAIL US AT : adityabarve111@gmail.com</p>

      </div>
      <!-- Grid column -->

      <hr class="clearfix w-100 d-md-none pb-3">

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

        <!-- Links -->
           

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 mb-md-0 mb-3">

      
        <ul class="list-und" style="list-style:none;">
         
          <li>
            <a href="#nav" id="navlink">Back to top of page</a>
          </li>
        </ul>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->
    <?php  
 /*error_reporting(0); 
session_start(); 
   
if(isset($_SESSION['views'])) 
    $_SESSION['views'] = $_SESSION['views']+1; 
else
    $_SESSION['views']=1; 
      
echo"<h5 ='color:#fff'>views on the website = ".$_SESSION['views']."</h5>"; 
  */
?>
  </div>
  <!-- Footer Links -->

  <!-- Copyright -->
  <div class="footer-copyright text-center py-3" id="navlink">
    <br>Created by : Aditya Barve
  </div>
  <!-- Copyright -->

</footer>  
 <script src="./removebanner.js">

 </script>
</center>
</body>
</html>