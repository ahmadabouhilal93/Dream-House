<?php
include 'config.php';
session_start();
if($_SERVER['REQUEST_METHOD']=='POST'){
$targetdir='img/';
$location=$_POST['location'];
$area=$_POST['area'];
$price=$_POST['price'];
$bedrooms=$_POST['bedrooms'];
$garage=$_POST['garage'];
$bathrooms=$_POST['bathrooms'];
$sale=$_POST['sale'];
$desc=$_POST['description'];
$rooms=$bedrooms+$bathrooms;
$autho=$_SESSION['auth'];
$query="INSERT INTO `realestate` (`id`, `area`, `rooms`, `floor`, `price`, `description`, `location`, `bedrooms`, `bathrooms`, `garage`, `owner`, `sold`, `sale`) VALUES (NULL, '{$area}', '{$rooms}', '0', '{$price}', '{$desc}', '{$location}', '{$bedrooms}', '{$bathrooms}', '{$garage}', '{$autho['id']}', '0', '1')";
if($conn->query($query)){
 $lastid=$conn->insert_id;
 foreach($_FILES['files']['name'] as $key=>$value){
  $filename=basename($_FILES['files']['name'][$key]);
  $targetfilepath=$targetdir.$filename;
  if(move_uploaded_file($_FILES['files']['tmp_name'][$key],$targetfilepath)){
    $insertquery="INSERT INTO `images` (`id`, `path`, `realestate`) VALUES (NULL, '{$targetfilepath}', '{$lastid}')";
    $conn->query($insertquery);
     
  }
}
};

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Add a house</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/add.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <style>

  label{
    display: block;
  }
  </style>

</head>




<body>
    <!-- Nav bar -->
    <?php 

include 'navbar.php';




 ?>
  <!--/ Nav End /-->
<!-- Add start-->
<?php 
if(isset($_SESSION['auth'])){
print"<br><section class='my-from'>
<div class='contain'>
<header class='text-center' style='color:rgba(0,123,255,.5)'>Fill the details in</header>
<div class='progress-container'>
<div id='progressbar' class='progress2'></div>
<div  class='circle active'>
  1
</div>
<div class='circle'>
  2
</div>
<div class='circle'>
  3
</div>
</div>
<form enctype='multipart/form-data' id='form2' action='{$_SERVER['PHP_SELF']}' method='POST'>
<div class='page active'>
<div class='title'></div>
<div class='input-group'>
<label for='location'>
Location
</label>
<select name='location'>
<option selected value='Damascus'>Damascus</option>
<option value='Daraa'>Daraa</option>
<option value='Aleppo'>Aleppo</option>
</select>
</div>
<div class='input-group'>
<label for='area'>
Area
</label>
<input id='inputarea' name='area' type='text' placeholder='Enter the area in m2'>
<label id='area' for='area'>
</label>
</div>
<div class='input-group'>
<label for='price'>
Price
</label>
<input id='inputprice' name='price' type='text' placeholder='Enter the price in $'>
<label  id='pricewarning' for='price'></label>
</div>
<div class='input-group'>
<button id='next' class='btn btn-next' type='button'>Next</button>
</div>
</div>
<div class='page'>
<div class='title'>Rooms</div>
<div class='input-group'>
<label for='bedrooms'>
Bedrooms
</label>
<input value='1' name='bedrooms' type='number' min='1' max='10'>
</div>
<div class='input-group'>
<label for='garage'>
garage
</label>
<input value='1' name='garage' type='number' min='1' max='10'>
</div>
<div class='input-group'>
<label for='bathrooms'>
bathrooms
</label>
<input value='1' name='bathrooms' type='number' min='1' max='10'>
</div>
<div class='input-group double'>
<button class='btn btn-prev' type='button'>Previous</button>
<button class='btn btn-next' type='button'>Next</button>

</div>
</div>

<div class='page'>
<div class='title'>More info</div>
<div class='input-group'>
<label for='sale'>
Sale or rent
</label>";
print "<select name='sale'>
<option value='sale' selected> 
Sale
</option>
<option value='rent'>
Rent
</option>
</select>";
print"</div>
<div class='input-group'>
<label for='fofo'>
Upload 4 photos
</label>
<input id='images' type='file' name='files[]' multiple >
<label id='imagewarning' for='files[]'></label>
</div>
<div class='input-group'>
<label style='display: block;' for='description'>
Description
</label>
<textarea name='description' id='description' rows='5' cols='35'>

</textarea>
</div>
<div class='input-group double'>
<button class='btn btn-prev' type='button'>Previous</button>
<button id='soso' class='btn btn-next' type='submit'>Submit</button>

</div>
</div>
</form>
</div>
</section>";
}
else{
  print "<div class='text-center alert alert-danger' role='alert'>
  You are not authorized to view this page you have to <a href='login.php'>Sign in </a> first
</div>";
}

;
?>
<!-- Add end-->
<!--/ footer /-->
<section class="section-footer">
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-4">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">To communicate</h3>
            </div>
            <div class="w-body-a">
              <p class="w-text-a color-text-a">
                We are happy to stay in touch... 
                <br> If you have any questions, please feel free to contact us
              </p>
            </div>
            <div class="w-footer-a">
              <ul class="list-unstyled">
                <li class="color-a">
                  <span class="color-text-a">Phone:</span> +963996101213</li>
                <li class="color-a">
                  <span class="color-text-a">Email:</span> ahmadabouhilal93@gmail.com</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">About us</h3>
            </div>
            <div class="w-body-a">
              <div class="w-body-a">
                <ul class="list-unstyled">
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Site Map</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Legal</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Agent Admin</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Careers</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Affiliate</a>
                  </li>
                  <li class="item-list-a">
                    <i class="fa fa-angle-right"></i> <a href="#">Privacy Policy</a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 col-md-4 section-md-t3">
          <div class="widget-a">
            <div class="w-header-a">
              <h3 class="w-title-a text-brand">All over the world</h3>
            </div>
            <div class="w-body-a">
              <ul class="list-unstyled">
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">UAE</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Egypt</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Germany</a>
                </li>
                <li class="item-list-a">
                  <i class="fa fa-angle-right"></i> <a href="#">Qatar</a>
                </li>
  
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
         
          <div class="socials-a">
            <ul class="list-inline">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-facebook" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-twitter" aria-hidden="true"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="#">
                  <i class="fa fa-instagram" aria-hidden="true"></i>
                </a>
              </li>
             
            </ul>
          </div>
          <div class="copyright-footer">
            <p class="copyright color-text-a">
              &copy; Copyright
            </p>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!--/ Footer End /-->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/scrollreveal/scrollreveal.min.js"></script>
  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>
   
  <!-- Template Main Javascript File -->
  <script src="js/register.js"></script>
  <script src="js/main.js"></script>


</body>
</html>
