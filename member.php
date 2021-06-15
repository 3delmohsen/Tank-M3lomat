<?php
session_start();
//echo "hello"   . $_SESSION['userid'] ;
if(isset($_GET['id'])){
  $id=$_GET['id'];
}
echo $id;
include_once 'database/config.php';
$sql="SELECT * FROM tablenew ";
$reslt=mysqli_query($connect,$sql);
while($row=mysqli_fetch_assoc($reslt)){
  $data[]=$row;
}

$cart="select first_name from sigin_up where email='{$_SESSION['userid']}' ";
$result=mysqli_query($connect,$cart);
         if($result){
                while($row = mysqli_fetch_array($result)) {
                   $buyername = $row['first_name'] ;
                
                 }
               }

 if(isset($_POST['addtocart'])){
$submitbutton= $_POST['addtocart'];
if ($submitbutton){
    foreach ($data as $table) {
    $addindb="INSERT INTO cartnum(username,prod,price) VALUES ('$buyername','{$_SESSION['bookname']}','{$_SESSION['price']}')";}
    if (mysqli_query($connect,$addindb)){
        echo "added";
    }
 }
 }


?>

<!DOCTYPE html>
<html lang="en">
<head>
     <style>
         .sala{
             
             padding-right: 5%;
         }
    
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tank M3lomat</title>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/all.css"/>
    <link rel="stylesheet" href="css/style.css" />
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
        <div class="sala">
        <a href="cradit.php" > <img height="40px" width="50px%"  src="imge/cartpng.png"> <b> <?php // echo $num ?>   </b> </a>
        </div>
      <div class="log-in">
            <a href="database/sign_in.php"><button class="btn btn-primary  ">Login</button></a>
            <a href="database/sign_up.php"><button class="btn btn-primary">Register</button></a>
      </div>  
    </div>
  </div>
</nav>
<div class="slide_bare container">
  <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>

    </div>
    <div class="carousel-inner">
      <div class="carousel-item active" data-bs-interval="1500">
        <img src="imge/demo_img_1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item" data-bs-interval="1500">
        <img src="imge/demo_img_2.jpg" class="d-block w-100" alt="...">
      </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    </div>
 </div>
</div>
<div class="container-fluid">
  <div class="row">
  <?php foreach ($data as $table) {?>
    <div class="col-lg-3">
      <div class="container page-wrapper">
        <div class="page-inner">
          <div class="row">
            <div class="el-wrapper">
              <div class="box-up">
                <img class="img" src="imge/<?php echo  $table['picturename']?>" alt="">
                <div class="img-info">
                  <div class="info-inner">
                    <span class="p-name"><?php  $_SESSION['bookname']=$table['namBook'] ;
                        echo $_SESSION['bookname'];
                        ?></span>
                  </div>
                  <div class="a-size">Author : <span class="size"><?php echo  $table['nameAuthor'];?></span></div>
                </div>
              </div>

              <div class="box-down">
                <div class="h-bg">
                  <div class="h-bg-inner"></div>
                </div>

                <a class="cart" href="?id=<?php echo $table['id'] ?>">
                  <span class="price"><?php $_SESSION['price']=$table['price'] ;
                                   echo $_SESSION['price'];    ?></span>
                  <span class="add-to-cart">
                    <span class="txt" >Add in cart</span>
                  </span>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php  } ?>
</div>
</div>
<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="index.php" >TankMa3lomat.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/popper.js"></script>
    <script src="js/all.js"></script>

</body>
</html>
