<?php
session_start();
include_once 'database/config.php';
 if(isset($_POST['sub'])){
     $fullname=$_POST['firstname'];
     $email=$_POST['email'];
     $address=$_POST['address'];
     $city=$_POST['city'];
     $state=$_POST['state'];
     $zip=$_POST['zip'];
     
      if(empty($fullname)||empty($email)||empty($address)||empty($city)||empty($state)||empty($zip)){

        echo "<p>complete empty fields!<p>";
      }
        else{
            
          $sql="INSERT INTO checkout(fullname,email,address,city,state,zip,username) VALUES ('$fullname','$email','$address','$city','$state','$zip','{$_SESSION['buyername']}')";
          $result=mysqli_query($connect,$sql);
          if($result){
            
           header("location: finalcheckout.php" );   
               }
            else{
                echo "<p>invalid input!</p>" ;
            }
                    
      }
      } 

//$query2 = "SELECT price FROM cartnum where username='{$_SESSION['buyername']}' "; 
//     $result3 = mysqli_query($connect,$query2);
//    while($row2 = mysqli_fetch_array($result3)){  
//          $chechprice= $row2['price'] ; }
    
$total="SELECT SUM(price)  FROM cartnum where username='{$_SESSION['buyername']}' ";
$result5=mysqli_query($connect,$total);
     if($result5){
         while($row5 = mysqli_fetch_array($result5)) {
       $totalprice = $row5['SUM(price)'];
}
}
    ?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tank M3lomat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/cart.css" />
</head>
<body>
<div class="searsh_head ">
<div class="container-fluid">
  <div class="row">
      <div class="col">
        <img style="float: left; margin: auto;" src="imge/demo-store-logo-1542776272.png" alt="">
     </div>
     <div class="col">
      <form class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>

   </div>
  </div>
</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Books Store
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Mysteries</a></li>
            <li><a class="dropdown-item" href="#">Romance</a></li>
            <li><a class="dropdown-item" href="#">Business</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Comics</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Crafts</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">History</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            More
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="#">Cooking</a></li>
            <li><a class="dropdown-item" href="#">Computers</a></li>
            <li><a class="dropdown-item" href="#">Music</a></li>
            <li><a class="dropdown-item" href="#">Kids</a></li>
            <li><a class="dropdown-item" href="#">Entertainment</a></li>
            <li><a class="dropdown-item" href="#">Parenting</a></li>
          </ul>
        </li> 
      </ul>
<!--
      <div class="log-in">
            <a href="database/sign_in.php"><button class="btn btn-primary  ">Login</button></a>
            <a href="database/sign_up.php"><button class="btn btn-primary">Register</button></a>
      </div>  
-->
    </div>
  </div>
</nav>
    
  <div class="row">
  <div class="col-75">
    <div class="container">
      <form  method="post" >
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
            </div>
          </div>

          <div class="col-50">
            <h3>Payment</h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
          
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn1" name="sub">
      </form>
    </div>
  </div>
  <div class="col-25">
    <div class="container">
      <h4>Cart <span class="price" style="color:black"><i class="fa fa-shopping-cart"></i> <b><?php echo $_SESSION['cartn'];  ?> </b></span></h4>
      <p> <?php 
      $query = "SELECT prod,price FROM cartnum where username='{$_SESSION['buyername']}' "; 
     $result = mysqli_query($connect,$query);
    while($row = mysqli_fetch_array($result)){  
    echo "<tr><td>" . $row['prod']. "______________". "<b>$</b>" .$row['price'] . "</td><td><br>" ; }  ?>
         
      
      <hr>
      <p>Total <span class="price" style="color:black"><b><?php echo  $totalprice ;  ?></b></span></p>
    </div>
  </div>
</div>  
    
    

    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/all.js"></script>

</body>
</html>
