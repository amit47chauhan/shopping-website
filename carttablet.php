//for tablet
<?php
session_start();
$pid=$_GET['pid'];
if(isset($_SESSION['email']))
{
    
    $category=$_GET['category'];
    $userid=$_SESSION['email'];
    $red=$category."buy";
    $con= mysqli_connect('localhost','root','','shopify');
    $q="insert into cart values('$userid','$pid','$category')";
    mysqli_query($con, $q);
    if(mysqli_affected_rows($con)>0)
    {
        header("location:tabletbuy.php?pid=$pid&msg=ADDED");
        
    }
    else{
        header("location:tabletbuy.php?pid=$pid&msg2=some technical issue");
    }
    mysqli_close($con);
}
else{
    header("location:tabletbuy.php?pid=$pid&msg3=Please login first");
}






?>

