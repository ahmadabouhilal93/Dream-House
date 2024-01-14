
<?php
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='GET'){
    if(isset($_GET['city'])&& isset($_GET['sale'])&&isset($_GET['bedrooms'])&&isset($_GET['bathrooms'])&&isset($_GET['price'])){
        $city=$_GET['city'];
        $sale=$_GET['sale'];
        $bedrooms=$_GET['bedrooms'];
        $bathrooms=$_GET['bathrooms'];
        $price=$_GET['price'];
        $statement="SELECT * FROM `realestate`";
        if($city=='all'){
            $statement.="";
        }else{
        $statement.=" WHERE location="."'".$city."'";
        }
       if($price=='all'){
           $statement.="";
       }
       else{
           if(!strpos($statement,'WHERE',0)){
            $statement.=" WHERE price >=".$price;
           }
           else{
            $statement.=" AND price >=".$price;
           }
          
       }
       if($bathrooms=='all'){
           $statement.="";
       }
       else{
        if(!strpos($statement,'WHERE',0)){
            $statement.=" WHERE bathrooms=".$bathrooms;
           }else{
        $statement.=" AND bathrooms=".$bathrooms;
           }
       }
       if($bedrooms=="any"){
           $statement.="";
       }
       else{
        if(!strpos($statement,'WHERE',0)){
            $statement.=" WHERE bedrooms=".$bedrooms;
           }else{
        $statement.=" AND bathrooms=".$bedrooms;
           }
       }
       if($sale=="all"){
           $statement.="";
       }
       else if ($sale=='sale'){
            if(!strpos($statement,'WHERE',0)){
            $statement.=" WHERE sale=1";
           }else{
        $statement.=" AND sale=1";
           }
        }
       else{
           if(!strpos($statement,'WHERE',0)){
            $statement.="WHERE sale=0";
           }else{
            $statement.="AND sale=0";
           }
          
       }
       
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Search</title>
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
  <link href="css/new.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
<style>
.hello{
  min-height: 466.656px;
}
</style>

</head>


    <!-- i have no clue whats happining here -->



<body>
    <!-- Nav bar -->
<?php include 'navbar.php' ?>
  <!--/ Nav End /-->





  <!--/ Form Search End /-->

<section id="results" class="property-grid grid mt-4">
    <div class="container">
      <div class="row">
<?php
     if (isset($statement)){
   $result=$conn->query($statement);
if($result->num_rows!=0){
$rows=$result->fetch_all(MYSQLI_ASSOC);

foreach($rows as $row){
$innerstatement="SELECT * FROM `images` WHERE realestate=".$row['id'];
$result2=$conn->query($innerstatement);
$row3=$result2->fetch_all(MYSQLI_NUM);
$src=isset($row3[0][1])?$row3[0][1]:"";

    print " <div class='col-md-4'>
    <div class='card-box-a card-shadow'>
      <div class='img-box-a'>

        <img src='{$src}'alt=''class='img-a hello img-fluid'>
      </div>
      <div class='card-overlay'>
        <div class='card-overlay-a-content'>
          <div class='card-header-a'>
            <h2 class='card-title-a'>
              <a href='#'>
                <br /> {$row['location']}</a>
            </h2>
          </div>
          <div class='card-body-a'>
            <div class='price-box d-flex'>
              <span class='price-a'>price | {$row['price']}</span>
            </div>
            <a href='details.php?id={$row['id']}' class='link-a' style='color:white'>more Info
              <span class='ion-ios-arrow-forward'></span>
            </a>
          </div>
          <div class='card-footer-a'>
            <ul class='card-info d-flex justify-content-around'>
              <li>
                <h4 class='card-info-title'>Area</h4>
                <span>{$row['area']}
                  <sup>2</sup>
                </span>
              </li>
              <li>
                <h4 class='card-info-title'>Beds</h4>
                <span>{$row['bedrooms']}</span>
              </li>
              <li>
                <h4 class='card-info-title'>Baths</h4>
                <span>{$row['bathrooms']}</span>
              </li>
              <li>
                <h4 class='card-info-title'>Garages</h4>
                <span>{$row['garage']}</span>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>";
}
}
else{
  print"<div class='alert alert-danger' role='alert'>
  Sorry there are no results for your search
</div>";
}
}




?>
    </div>
    </div>
  </section>


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


</body>






?>