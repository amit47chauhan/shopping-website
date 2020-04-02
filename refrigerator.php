<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--footer icon-->
        <style>
            .mantu:hover{
                width:40%;
                height:fixed;
                
            }
            
        </style>
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
         
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include("header.php"); ?>
            <div class="row">
                <div class="col-sm-12" style="margin-left: 15px; margin-right: 15px">
                    <?php 
                  $con= mysqli_connect('localhost','root','','shopify');
                  $q="select * from refrigerator";
                  $res= mysqli_query($con,$q);
                  $num= mysqli_num_rows($res);
                  for($i=0;$i<$num;$i++)
                  {
                  $rowarr= mysqli_fetch_assoc($res);
                  ?>
                    <a href="refrigeratorbuy.php?pid=<?php echo $rowarr['pid'] ?>">
                  <div class="row" style="padding-bottom: 10px">
                      <div class="col-sm-6"  style="width:40%">
                        
                          <img src="./images/refrigerator/<?php echo $rowarr['pid'] ?>.jpg" class="img-responsive" >
                         </div> 
                     
                      <div class="col-sm-6" style="margin-left:-60px" align="center">
                       
                          <?php
                          
                          
                          echo "<font color=blue size=6px >".$rowarr['name']."</font>  <br><br> ";
                          echo "<font color=brown size=4px >".$rowarr['compressor']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['star']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['volume']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['glass_shelves']."</font>  <br> ";
                          echo "<font color=brown size=4px >".$rowarr['stabilizer']."</font>  <br><br> ";
                          echo "<font color=black size=5px >Rs".$rowarr['price']."</font>  <br> ";
                          ?>
                      
                              
                         
                    
                          
                      </div>
                  </div>
                        </a>
                    <hr>
                  <?php }
                   mysqli_close($con);
                  ?>
                  
                    
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
