<!DOCTYPE html>
<html lang="en">
<head>
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
          <a class="nav-link active" aria-current="page" href="../index.php">Home</a>
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
      <div class="log-in">
            <a href="sign_in.php"><button class="btn btn-primary">Login</button></a>
            <a href="sign_up.php"><button class="btn btn-primary">Register</button></a>
      </div>  
    </div>
  </div>
</nav>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/popper.js"></script>
    <script src="../js/all.js"></script>   
</body>
</html>