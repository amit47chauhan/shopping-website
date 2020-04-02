
<!DOCTYPE html>
<?php session_start();
 $con=mysqli_connect('localhost','root','','shopify');
 $q="select * from orders where username='$_SESSION[email]'";
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
            <div class="row" style="margin-left: 5px; margin-right: 5px">
                <div class="col-sm-12">
                   <?php
                   if($num>0)
                   {
                       echo "<table border=1 class=table>";
                       for($i=0;$i<$num;$i++)
                       {
                           $row= mysqli_fetch_array($res);
                          echo "<tr>";
                          
                          echo"<td> Order id :".$row['order_id']."</td>";
                          echo"<td> Product name :".$row['pname']."</td>";
                          echo"<td> Total price :".$row['price']."</td>";
                          echo"<td> Billing add. :".$row['address']."</td>";
                          echo "<tr>";
                           
                       }
                   }
                   echo "</table>";
                   
                   ?>
                    
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
