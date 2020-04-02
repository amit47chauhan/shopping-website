<?php
session_start();
if(isset($_SESSION['email']))
{
    $pid=$_GET['pid'];
    $con3=mysqli_connect('localhost','root','','shopify');
    $q="delete from cart where user_id='$_SESSION[email]' and product_id='$pid'";
    mysqli_query($con3, $q);
    if(mysqli_affected_rows($con3)>0)
    {
       header("location:yourcart.php");
        
    }
 else {
     echo "error in query";       
 }
  
}
 else {
    header("location:signin.php");   
 }




?>