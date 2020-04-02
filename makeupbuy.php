<!DOCTYPE html>
<?php
session_start();
if(isset($_GET['buy'])and isset($_SESSION['email']))
{
   $pid=$_GET['pid'];
   $quant=$_GET['quant'];
  header("location:buy.php?pid=$pid&category=womenmakeup&quantity=$quant"); 
    
    
    
}
elseif(!isset($_SESSION['email'])and isset($_GET['buy'])){
    $pid=$_GET['pid'];
    header("location:makeupbuy.php?pid=$pid&msg3=please login first to Buy");
    
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
        <style>
            .bata:link,
            .bata:visited{
                text-transform:uppercase;
		text-decoration:none;
		padding:10px 10px;
		display:inline-block;
		border-radius:100px;
		transition:all .2s;
                
            }  
            .bata:hover{
               transform:translatey(-3px);
		box-shadow:0 10px 20px rgba(0,0,0,.6);  
                
            }
            .bata:active{
               transform:translatey(-1px);
		box-shadow:0 5px 10px rgba(0,0,0,.6); 
                
            }
            .bata{
                background-color:lightslategray;
		color:white;
                
            }
        </style>
               <script>
         function inc()
         {
             f1.quant.value=f1.quant.value+1;
         }
         function dec()
         {
             f1.quant.value=f1.quant.value-1;
         }
        </script>
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
        
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include("header.php"); ?>
            <div class="row">
                <div class="col-sm-12" style="margin-left: 30px;margin-right: 30px">
                   
                  <?php 
              
                      $pid=$_GET['pid'];
                      $con= mysqli_connect('localhost','root','','shopify');
                      $q="select * from womenmakeup where pid='$pid'";
                      $res= mysqli_query($con,$q);
                      echo mysqli_error($con);
                      $rowarr= mysqli_fetch_assoc($res);    
                  
                  ?>
                         <div class="row">
                    <div class="col-sm-3" style="margin-bottom: 10px"><br>
                        <a href="cartmakeup.php?pid=<?php echo $pid; ?>&category=womenmakeup" style="" class="bata"><?php
                        if(isset($_GET['msg']))
                        {
                            echo $_GET['msg'];
                        }
                        else{
                            echo "ADD TO CART";
                        }
                        
                        ?></a><br><br><form name="f1">
                             <INPUT TYPE="submit" class="bata" name="buy" VALUE="BUY NOW">
                                &nbsp;&nbsp;
                        <label>QUANTITY:</label>
                        <input type="button" value="+" onclick="inc()"><input type="text" style="width:8%;padding-left: 5px" value="1" name="quant"><input type="button" value="-" onclick="dec()">
                        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                        </form>
                        
                        
                        
                        
                        </div>
                    <div class="col-sm-4 bg-info">
                        <div class="row">
                            <div class="col-sm-12">
                                <?php if(isset($_GET['msg3']))
                                    echo $_GET['msg3'];
                                    ?>
                                <img src="./images/makeup/<?php echo $pid ?>.jpg" class="img-responsive">
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-12">
                                <?php
                                  echo "<font color=blue size=6px >".$rowarr['name']."</font>  <br><br> ";
                          echo "<font color=brown size=4px >".$rowarr['shades']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['color']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['uses']."</font>  <br> ";
                      
                          echo "<font color=brown size=4px >".$rowarr['cases']."</font>  <br><br> ";
                          echo "<font color=black size=5px >Rs".$rowarr['price']."</font>  <br> ";
                          ?>
                            </div>
                        </div>
                        
                    </div>
                        <div class="col-sm-5 ">
                            <h4 class="">PRODUCT DESCRIPTION:</h4>
                           
                            
                             <?php
                              
                          echo "<font color=brown size=3px >".$rowarr['shades']."</font>  <br> ";
                          echo "<font color=brown size=3px >".$rowarr['color']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['uses']."</font>  <br> ";
                      
                          echo "<font color=brown size=3px >".$rowarr['cases']."</font>  <br><br> ";
                          
                          ?>
                            
                            
                            
                            
                           
                        </div>
                    </div>
               
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
