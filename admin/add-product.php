<?php
 include_once "config.php";
 session_start();
 if(!isset($_SESSION['userid'])){
    header("location:  login.php" );
 }
 $username=$_SESSION['asd'];
 if (isset($_POST['send'])) {
  $nameBook=$_POST['name-book'];
  $nameAuthor=$_POST['name-author-book'];
  $price=$_POST['price-book'];
  $picture=$_POST['picture'];

  if(empty($nameBook)||empty($nameAuthor)||empty($price)||empty($picture)){
    echo "<h1 style='color:red; text-align:center;'>Enter The All Values</h1>";
  }
  else{
  $sql="INSERT INTO tablenew(namBook,nameAuthor,price,picturename) VALUES('$nameBook','$nameAuthor','$price','$picture') ";
  $result=mysqli_query($con,$sql);
  }
  if($result){
    header("location: products.php" );
  }
}


 
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Add Product - Dashboard HTML Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="jquery-ui-datepicker/jquery-ui.min.css" type="text/css" />
    <!-- http://api.jqueryui.com/datepicker/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body>
  <div class="" id="home">
    <?php include_once 'nav.php';?>
    <div class="container tm-mt-big tm-mb-big">
      <div class="row">
        <div class="col-xl-9 col-lg-10 col-md-12 col-sm-12 mx-auto">
          <div class="tm-bg-primary-dark tm-block tm-block-h-auto">
            <div class="row">
              <div class="col-12">
                <h2 class="tm-block-title d-inline-block">Add Product</h2>
              </div>
            </div>
            <div class="row tm-edit-product-row">
              <div class="col-xl-6 col-lg-6 col-md-12">
                <form  method="POST" class="tm-edit-product-form">
                  <div class="form-group mb-3">
                    <label
                      for="name"
                      >Book Name
                    </label>
                    <input
                      id="name"
                      name="name-book"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="description"
                      >Name Author</label
                    >
                    <input
                      id="name"
                      name="name-author-book"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>
                  <div class="form-group mb-3">
                    <label
                      for="category"
                      >Price</label
                    >
                    <input
                      id="name"
                      name="price-book"
                      type="text"
                      class="form-control validate"
                      required
                    />
                  </div>   
              </div>
              <div class="col-xl-6 col-lg-6 col-md-12 mx-auto mb-4">
                <div class="tm-product-img-dummy mx-auto">
                  <i
                    class="fas fa-cloud-upload-alt tm-upload-icon"
                    onclick="document.getElementById('fileInput').click();"
                  ></i>
                </div>
                <div class="custom-file mt-3 mb-3">
                  <input id="fileInput" name="picture" type="file" style="display:none;" />
                  <input
                    type="button"
                    class="btn btn-primary btn-block mx-auto"
                    value="UPLOAD PRODUCT IMAGE"
                    onclick="document.getElementById('fileInput').click();"
                  />
                </div>
              </div>
              <div class="col-12">
               <input type="submit" class="btn btn-primary btn-block text-uppercase" name="send" value="Add Product Now">
                <!-- <button type="submit" name="send" class="btn btn-primary btn-block text-uppercase">Add Product Now</button> -->
              </div>
            </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="#" class="tm-footer-link">Tank m3lomat</a>
          </p>
        </div>
      </footer>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="jquery-ui-datepicker/jquery-ui.min.js"></script>
    <!-- https://jqueryui.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
    <script>
      $(function() {
        $("#expire_date").datepicker();
      });
    </script>
  </body>
</html>
