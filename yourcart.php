
<!DOCTYPE html>
<?php session_start();
 $con=mysqli_connect('localhost','root','','shopify');
 $q="select * from cart where user_id='$_SESSION[email]'";
 $res=mysqli_query($con, $q);
 $num= mysqli_num_rows($res);

 


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
            <?php include("header.php"); ?>
            <div class="row">
                <div class="col-sm-12" style="margin-left: 15px; margin-right: 15px">
                    <div class="row">
                        <div class='col-sm-12'>
                           <h2>Hello <?php echo $_SESSION['name'];?> your cart is here!</h2>
                        </div>
                    </div>
                    <?php
                       if($num>0){
                       for($i=0;$i<$num;$i++)
                       {
                         $row= mysqli_fetch_array($res);
                           echo "<div class=row>";
                           echo "<div class=col-sm-12>";
                           $con2= mysqli_connect('localhost','root','','shopify');
                           $qry="select * from $row[category] where  pid='$row[product_id]'";
                           $res2=mysqli_query($con2,$qry);
                           $row2= mysqli_fetch_array($res2);
                           echo $row2['name']."<br>";
                           echo $row2['price'];
                           mysqli_close($con2); ?>
                           <a href="removecart.php?pid=<?php echo$row['product_id'];?>">REMOVE</a>
                        <?php   
                           
                           
                           echo "</div>";
                           echo "</div>";
                       }
                       
                       }
                    else {
                        echo "your cart is empty";
                    }
                    
                    mysqli_close($con);
                    ?>
                    
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
