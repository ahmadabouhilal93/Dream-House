



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


</head>


    <!-- i have no clue whats happining here -->



<body>
    <!-- Nav bar -->
<?php include 'navbar.php' ?>
  <!--/ Nav End /-->



<form target="_blank"method="GET" action="results.php">
  <div class="super">
  <div class="main">
    <br>
     <h3  class="title-d text-center color-b">Find your drem house now!</h3>
          <div>
            <div class="form-group">
              <label for="Type">Type</label>
              <select name="sale" class="form-control form-control-lg form-control-a">
                <option selected value="all">All Type</option>
                <option value="rent">For Rent</option>
                <option value="sale">For Sale</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <label for="city">City</label>
              <select name="city" class="form-control form-control-lg form-control-a" id="city">
                <option selected value="all">All City</option>
                <option value="Damascus">Damascus</option>
                <option value="Homs">Homs</option>
                <option value="Hama">Hama</option>
                <option value="Dara'a">Dara'a</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <label for="bedrooms">Bedrooms</label>
              <select name="bedrooms" class="form-control form-control-lg form-control-a" id="bedrooms">
                <option selected value="any">Any</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <label  for="bathrooms">Bathrooms</label>
              <select name="bathrooms" class="form-control form-control-lg form-control-a" id="bathrooms">
                <option value="all">Any</option>
                <option value="1">01</option>
                <option value="2">02</option>
                <option value="3">03</option>
              </select>
            </div>
          </div>
          <div>
            <div class="form-group">
              <label for="price">Min Price</label>
              <select name="price" class="form-control form-control-lg form-control-a" id="price">
                <option value="all">Unlimite</option>
                <option value="50000">$50,000</option>
                <option value="100000">$100,000</option>
                <option value="150000">$150,000</option>
                <option value="200000">$200,000</option>
              </select>
            </div>
          </div>
          <div class=" d-flex justify-content-center align-items-center">
            <button type="submit" class="btn btn-b">GO</button>
            </a>
          </div>
        </div>
      
    </div>
  </div>
  </div>
  </div>
  </form>
  <!--/ Form Search End /-->

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