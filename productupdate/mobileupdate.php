
<?php
if(isset($_GET['mbtn']))
{
    $pid=$_GET['pid'];
    $name=$_GET['name'];
    $ram_rom=$_GET['ram_rom'];
    $battery=$_GET['battery'];
    $camera=$_GET['camera'];
    $processor=$_GET['processor'];
    $price=$_GET['price'];
    $f=$_FILES['myfile'];
    move_uploaded_file($f['tmp_name'],"./images/mobile/'$pid'.jpg");
    $con= mysqli_connect('localhost','root','','shopify');
    $q="insert into mobile values('$pid','$name','$ram_rom','$battery','$camera','$processor',$price)";
    mysqli_query($con, $q);
    if(mysqli_affected_rows($con)>0)
    {
        echo"done";
        
    }
    else{
        
        echo "wrong input data";
       echo mysqli_error($con);
    }
        
    
    
    
    
}
    
    
    
    
    
    ?>