<?php
include_once 'config.php';
if(isset($_post['sub'])){
    $email=$_post['em'];
    $password=$_post['pass'];
}

    
?>


<html>  
     <head>
     </head>    
     <body>  
  <form method="post" >
    email: <input type="email" name="em" >  <br>
      password: <input type="password" name="pass"> <br>
      <input type="submit" name="sub" value="submit">
         
         </form>       
         
     </body>  
</html>