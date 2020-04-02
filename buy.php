<!DOCTYPE html>
<?php
session_start();
if(!isset($_SESSION['email']))
{
    header("location:signin.php");
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--footer icon-->
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
        <title></title>
  
 
    </head>
    <body>
        <div class="container-fluid">
            <?PHP include("header.php"); ?>
            <div class="row" style="margin-bottom: 50px">
                <div class="col-sm-12" style="margin-left: 15px; margin-right: 15px">
                    <?PHP
                    
                    $cate=$_GET['category'];
                    $pid=$_GET['pid'];
                    $quantity=$_GET['quantity'];
                    $con= mysqli_connect('localhost','root','','shopify');
                    $q="select * from $cate where pid='$pid'";
                    $res= mysqli_query($con,$q);
                    $row= mysqli_fetch_array($res);
                    $con2= mysqli_connect('localhost','root','','shopify');
                    $q2="select * from userinfo where email='$_SESSION[email]'";
                    $res2= mysqli_query($con2,$q2);
                    $row2= mysqli_fetch_array($res2);
                    ?>
                  
                  
                    <form action="order.php">
                        <table border="1" align="center" class="table">
                           <center> <cation><h3>ORDER THIS</h3></caption></center>
                        <tr>
                          <th><label>PRODUCT NAME:</label></th>
                          <td><textarea readonly style="width:100%" name="pname"><?php echo  $row['name'] ?></textarea></td>
                        </tr>
                        <tr>
                          <th><label>PRICE</label></th>
                          <td><input type='text' name="ppq" value="<?php echo $row['price'];?>" readonly style="width:100%"></td>
                        </tr>
                        <tr>
                          <th><label>QUANTITY</label></th>
                          <td><input type='number' name="quantity" value="<?php echo $quantity;?>" readonly style="width:100%"></td>
                        </tr>
                        <tr>
                          <th><label>TOTAL PRICE</label></th>
                          <td><input type='text' name="tprice" value="<?php echo $quantity*$row['price'];?>"readonly style="width:100%"></td>
                        </tr>
                         <tr>
                          <th> <label>ENTER YOUR NAME</label></th>
                          <td><input type='text' name="uname" placeholder="your name" style="width:100%"></td>
                        </tr>
                        <tr>
                          <th> <label>MOBILE</label></th>
                          <td><input type='text' name="mobile" value="<?php echo $row2['mobile'];?>" style="width:100%"></td>
                        </tr>
                          <tr>
                          <th><label>ADDRESS TO DELIVER</label></th>
                          <td><textarea style="width:100%" name="address"><?php echo  $row2['address'] ?></textarea></td>
                        </tr>
                        <tr>
                           <td colspan="2"><input type="submit" name="order" value="PLACE ORDER" style="width:100%"></td>
                        </tr>
                        
                    </table></form>
                    
                    <?php mysqli_close($con);
                    mysqli_close($con2);
                    ?>
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
