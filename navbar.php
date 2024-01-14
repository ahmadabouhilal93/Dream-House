<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>

<nav class="navbar navbar-default navbar-expand-lg  navbar-reduce">
    <div class="container">
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault" aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
        <a class="navbar-brand text-brand" href="index.html">Dream<span class="color-b">House</span></a>
      <div class="navbar-collapse collapse justify-content-center" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link active" href="index.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="Search.php">Find a house</a>
          </li>

          <li class='nav-item'>
             <a class='nav-link' href='addproperty.php'>Add a house</a>
           </li>


            <li class="nav-item">
            <a class="nav-link" href="customers.php">Reviews</a>
            </li>

      
          
          <li class="nav-item">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>


        </ul>
 <?php
 if(isset($_SESSION['auth'])){
     $authinfo=$_SESSION['auth'];
    print"<ul class='navbar-nav ml-auto'>
    <li class='nav-item dropdown'>
   
          <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='navbarDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
          {$authinfo['username']}
          </a>
          <div class='dropdown-menu' aria-labelledby='navbarDropdown'>
            <a class='dropdown-item' href='logout.php'>Log out</a>
            <a class='dropdown-item' href='#'>Another action</a>
          </div>
        </li>
          </ul>
          ";
 }
 
  
 ?>
      
     
      </div>
  </nav>
