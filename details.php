
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Details</title>
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
  <link href="css/style.css" rel="stylesheet">
<style>
.section-footer{
    margin-top: 0;
}
.center{
    height: 25rem;
    width: 100%;
    position: relative;
    
}
.center img{
    width: 100%;
    border-radius: 0.5rem;
    height: 100%;
    opacity: 0;
    position: absolute;
    object-fit: cover;
    transition: opacity 0.2s ease-in;
}
.center img.active{
opacity: 1;
z-index: 10000;
}
.info{
    padding: 0.3rem;
}
.gallery{
    padding: 0.3rem;
    height: 100%;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
img{
    max-width: 100%;
}
.thumbnail{
    width: 100%;
    display: grid;
    margin-top: 10px;
    gap: 0.5rem;
    grid-template-columns: repeat(4,1fr);

}
.test{
    background-color: yellow;
    height: 100px;
    cursor: pointer;
    position: relative;
}
.test img{
    position: absolute;
    width: 100%;
    height: 100%;
    object-fit: cover;
    z-index: 11;
}
.active .overlay{
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background-color:rgba(255,255,255,0.6);
    border: 2px solid white;
    z-index: 10000;
    box-shadow:7px 5px 26px 5px rgba(0,0,0,0.61) ;
}
.profile{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
    margin: 30px 0;
}
.profile img {
    width: 5rem;
    height:5rem;
    border-radius: 50%;
}
.description{
    margin-top: 20px;
}
.jk{
  color:rgba(0,123,255,.5);}
</style>

</head>






<body>
      <!-- Nav bar -->
<?php include 'navbar.php'?>


  <!--/ Nav End /-->
</div>
</nav>
<?php
include 'config.php';
if(isset($_GET['id'])){
  $id=$_GET['id'];
  $statment="SELECT `users`.`First name`,`users`.`Last name`,`users`.`image`,`realestate`.`id`,`realestate`.`area`,`realestate`.`rooms`,`realestate`.`description`,`realestate`.`location`,`realestate`.`bedrooms`,`realestate`.`bathrooms`,`realestate`.`sold`,`realestate`.`price`FROM `realestate` INNER JOIN `users` ON `realestate`.`owner`=`users`.`id` AND `realestate`.`id`=$id";
  $result=$conn->query($statment);
  $row=$result->fetch_assoc();
 
  $fotos="SELECT * FROM images WHERE `realestate`=$id";
  $result2=$conn->query($fotos);
  $images=$result2->fetch_all(MYSQLI_ASSOC);

 print"<div class='new'>
<div class='container'>
<div class='row'>
<div class='col-lg-6'>
<div class='gallery'>
<br>

<div class='center'>";
foreach($images as $key=>$value){
  if($key==0){
    print "<img class='active' src='{$value["path"]}'/>";
  }
  else{
    print "<img src='{$value["path"]}'/>";
  }
}
print"</div>
<div class='thumbnail'>";
foreach($images as $key=>$value){
  if($key==0){
 print"<div class='test active'>
<div class='overlay'>

</div>
<img src={$value["path"]}>
</div>";
}else{
print"<div class='test'>
<div class='overlay'>

</div>
<img src='{$value["path"]}'>
</div>";
}
}
print"</div>
</div>
</div>
<div class='col-lg-6'>
<br>
<br>
<br>
<div class='info d-flex flex-column justify-content-center'>
<table class='table table-sm'>
  <thead>
    <tr>
      <th scope='col'>#</th>
      <th scope='col'>Area </th>
      <th scope='col'>Bath</th>
      <th scope='col'>Garage</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope='row'>1</th>
      <td>{$row['area']}</td>
      <td>{$row['bathrooms']}</td>
      <td>1</td>
    </tr>
 
  </tbody>
</table>
<div class='description'>
<h3>Description:</h3>
<p>{$row['description']}</p>
<p class='intro-subtitle intro-price'>
<br>
<a href='customerlog.php'><span class='price-a' style='color:black'>BUY!</span></a>
</p>
</div>
</div>
</div>
</div>
</div>
</div>";

}
else{

echo "No";

}
?>



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
  <script src="js/new.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>

</body>
</html>