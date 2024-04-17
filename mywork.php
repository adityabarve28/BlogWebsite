<?php
include "nav.php";
include "connection.php";
// Check if the user is already logged in, if yes then redirect him to welcome page

?>
<html lang="en">
<head>
  <title>Post Content</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>
 <style>
     body{
         background-color: #5E74A5;
         color: #333333;
     }
     *{
	margin: 0;
	padding: 0;
	overflow-x: hidden;
	flex-wrap: wrap;
}
</style>
    <body><br>
<br>
<div class="jumbotron">
    <form action="" method="post">
        <h1 style="overflow-y:hidden;">Welcome <?php echo $_SESSION['uname']?></h1>
         <div class="form-group">
      <input type="text" class="form-control" name="name" value="<?php echo $_SESSION['uname'];?>" disabled />
    </div>
    <div class="form-group">
      <input type="text" class="form-control" name="title" placeholder="Enter Title" required />
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="subtitle" placeholder="Enter Sub Title" />
      </div>
<div class="form-group">
      <textarea type="text" class="form-control" name="content" placeholder="Enter content" cols="5" rows="10" required /></textarea>
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="link" placeholder="Enter link"  />
      </div>
      <div class="form-group">
      <input type="text" class="form-control" name="linkdsc" placeholder="Enter link description"  />
      </div>
    <div class="form-group">
      <input type="submit" class="form-control" name="submit" value="upload" style="background-color:#F76C6C; color: white"/>
    </div>
    </form>
    </div>
    <!-- Footer -->
<footer class="page-footer font-small blue pt-4" id="footer">

<!-- Footer Links -->
<div class="container-fluid text-center text-md-left">

  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-md-6 mt-md-0 mt-3">

      <!-- Content -->
      <h5 class="text-uppercase" id="navlink" style="overflow-y:hidden;">CONTACT : 9137818209</h5>
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
</div>
<!-- Footer Links -->

<!-- Copyright -->
<div class="footer-copyright text-center py-3" id="navlink">
  <br>Created by : Aditya Barve
</div>
<!-- Copyright -->

</footer>  
    </body>
    <script src="removeBanner.js"></script>
</html>
<?php
if(isset($_POST['submit'])){
	if(isset($_POST['title']) && $_POST['title']!= "" && isset($_POST['content']) && $_POST['content']!= ""){
$name = $_SESSION['uname'];
$title = $_POST['title'];
$subtitle = $_POST['subtitle'];
$content = $_POST['content'];
$link = $_POST['link'];
$linkdsc = $_POST['linkdsc'];


$datainsert = "INSERT INTO writee (NAME, TITLE, SUBTITLE, CONTENT, LINK, LINKDESCRIPTION) VALUES('$name', '$title', '$subtitle','$content', '$link', '$linkdsc')";

$execute = mysqli_query($connection, $datainsert);

if($execute){
	echo "<script>window.alert('Content Inserted')</script>"; 
}
else {
	echo "<script>window.alert('Error Occurred')</script>";
}
}
}
else{
	echo "<script>window.alert('All fields required')</script>";
}
// }
// else{
//     ?>
//     <script>
//         window.alert("Please Login");
//         location.replace('login.php');
//     </script>
//     <?php
// }
?>