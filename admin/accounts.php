<?php
 include_once "config.php";
 session_start();
 if(!isset($_SESSION['userid'])){
    header("location:  login.php" );
 }
 $username=$_SESSION['asd'];
 if(isset($_POST['send'])){
   $user_name=$_POST['username'];
   $password=$_POST['password'];
 }
 
$sqlm="SELECT * FROM login_admin ";
$reslt1=mysqli_query($con,$sqlm);
while($row=mysqli_fetch_assoc($reslt1)){
$data[]=$row;
}


 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Accounts - Product Admin Template</title>
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,700"
    />
    <!-- https://fonts.google.com/specimen/Roboto -->
    <link rel="stylesheet" href="css/fontawesome.min.css" />
    <!-- https://fontawesome.com/ -->
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <!-- https://getbootstrap.com/ -->
    <link rel="stylesheet" href="css/templatemo-style.css">
    <!--
	Product Admin CSS Template
	https://templatemo.com/tm-524-product-admin
	-->
  </head>

  <body id="reportsPage">
    <div class="" id="home">
      <?php include_once 'nav.php';?>
      <div class="container mt-5">
        <!-- row -->
        <div class="row tm-content-row">
          <div class="tm-block-col col-12 ">
            <div class="tm-bg-primary-dark tm-block tm-block-settings">
              <h2 class="tm-block-title">Account Settings</h2>
              <div style="padding: 10px; background-color:#c3b6b6;">
              <?php
                if(isset($_POST['send'])){
                if(empty($user_name)||empty($password)){
                  echo "<B style='color:red;padding: 10px; background-color:#c3b6b6;;'>Enter The All Values</B>";
                
                }else{
                    $sql1="SELECT user  FROM login_admin WHERE user='$user_name'";
                    $result=mysqli_query($con,$sql1);
                    $count=mysqli_num_rows($result);
                   // عدد النتائج الراجعه
                   if($count<1){
                    $sql="INSERT INTO login_admin(user,pass)VALUES('$user_name','$password')";
                    $re=mysqli_query($con,$sql);
                    if($re){
                     echo "<B style='color:green;padding: 10px; background-color:#c3b6b6;'>The account has been added</B>";
                    
                    }
                   }else{ 
                      echo "<B style='color:red;padding: 10px; background-color:#c3b6b6;'>user name already exists</B>";
                  }
                  }
                }
              ?>  
              </div>
              <form  method="POST" class="tm-signup-form row">
                <div class="form-group col-lg-12">
                  <label for="name">Username Name</label>
                  <input
                    id="name"
                    name="username"
                    type="text"
                    class="form-control validate"
                  />
                </div>
                <div class="form-group col-lg-12">
                  <label for="password">Password</label>
                  <input
                    id="password"
                    name="password"
                    type="password"
                    class="form-control validate"
                  />
                </div>
                <div class="col-12">
                  <button
                    type="submit"
                    name="send"
                    class="btn btn-primary btn-block text-uppercase"
                  >
                    Add Account
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <div class="tm-product-table-container">
              <table class="table table-hover tm-table-small tm-product-table">
                <thead>
                  <tr>
                    <th scope="col">&nbsp;</th>
                    <th scope="col">id</th>
                    <th scope="col">user name</th>
                    <th scope="col">password</th>
                    <th scope="col">&nbsp;</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                if(!empty($data)){
                foreach ($data as $table) {?>
                  <tr>
                    <th scope="row"><input type="checkbox" /></th>
                    <td class="tm-product-name"><?php echo $table['id'] ?></td>
                    <td><?php echo $table['user']?></td>
                    <td><?php echo $table['pass'] ?></td>
                    <td>
                      <a href="delete2.php?id=<?php echo $table['id']  ?>" class="tm-product-delete-link">
                        <i name="id" class="far fa-trash-alt tm-product-delete-icon"></i>
                      </a>
                    </td>
                  </tr>
                  <?php  } }?>
                </tbody>
              </table>
            </div>
      <footer class="tm-footer row tm-mt-small">
        <div class="col-12 font-weight-light">
          <p class="text-center text-white mb-0 px-4 small">
            Copyright &copy; <b>2021</b> All rights reserved. 
            
            Design: <a rel="nofollow noopener" href="#" class="tm-footer-link">Tank m3lomat</a>
          </p>
        </div>
      </footer>
    </div>

    <script src="js/jquery-3.3.1.min.js"></script>
    <!-- https://jquery.com/download/ -->
    <script src="js/bootstrap.min.js"></script>
    <!-- https://getbootstrap.com/ -->
  </body>
</html>
