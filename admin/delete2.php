<?php if(isset($_GET['id'])){
    $id=(int)$_GET['id'];
}else{
    $id=0;
}
include_once "config.php";
$sql=" DELETE FROM login_admin WHERE id=$id";
$re=mysqli_query($con,$sql);
if($re){
    header("location: accounts.php" );
}
?>