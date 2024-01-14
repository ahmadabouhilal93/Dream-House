<?php
session_start();
include 'config.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
  $username=$_POST['username'];
  $password=$_POST['password'];
if($username!=""&& $password!=""){
$statement="SELECT * FROM `users` WHERE username='$username'and password='$password'";
$result=$conn->query($statement);
if($result->num_rows==1){
 $row=$result->fetch_array(MYSQLI_ASSOC);
$_SESSION['auth']=$row;
header("Location: https://dreamhousewwd.000webhostapp.com/addproperty.php");
}
}
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>WWD</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">




  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">



  <!-- Main Stylesheet File -->
  <link href="css/Log.css" rel="stylesheet">

</head>



<body  >

<div class="login-page">
  <div class="form">
    <form method="POST"  class="register-form">
      <input type="text" placeholder="name"/>
      <input type="password" placeholder="password"/>
      <input type="text" placeholder="email address"/>
      <button>create</button>
      <p class="message">Already registered? <a href="index.html">Sign In</a> </p>

    </form>
    <form action=<?php echo $_SERVER['PHP_SELF']; ?> method="POST"  class="login-form">
      <input name="username" type="text" placeholder="username"/>
      <input name="password" type="password" placeholder="password"/>
    <input type="submit">
      <p class="message">Not registered? <a href="#">Create new account</a></p>
    </form>
  </div>
</div>
</body>
</html>
