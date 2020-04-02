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
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
        <title></title>
        <style>
           .modify{display:none;}
        </style>
        <script>
        function sm1(){
        if(f.s1.value=='mobile')
        {
           document.getElementById('f1').style.display="block";
           document.getElementById('f2').style.display="none";
        } 
        else if(f.s1.value=='laptop')
        {
           document.getElementById('f2').style.display="block";
           document.getElementById('f1').style.display="none";
        }

    }
    
     
      </script>
    </head>
    <body>
        <div class="container-fluid">
            <?php include("header.php"); ?>
            <div class="row">
                <div class="col-sm-12" style="margin-left: 15px; margin-right: 15px">
                    <h2>Shopify Partner Program</h2>
                    <p>Now you can list your your own product on shopify website and earn by this .All the revenue
                        genrated by selling your product will be distributed in 3:7 ration where 3 will by shopify 
                        and remaining 7 part will be your .It is a golden chance to enhance your buisness and sell 
                        your product to entire india rather than commiting to your locality.</p>
                    <p> Please read the <a href="#">term and condition</a> before becoming a part</p><br><br>
                    <form id="f0" name="f" align="center">
                        <label>SELECT YOUR PRODUCT CATEGORY</label>
                    <select name="s1">
                        
                        <option>Select your product category</option>
                        <option>laptop</option>
                        <option>mobile</option>
            
                    </select>
                    <input type="button" onclick="sm1()" value="select">
                    </form>
                    <div align="center">
                        <table class="modify" id="f1"> 
                            <form action="./productupdate/mobileupdate.php" method="get" enctype="multipart/form-data">
                        <TR>
                            <TH colspan="2"><h3>Mobile form</h3><hr></th>
                        </tr>
                        <tr>
                        <td><label>ENTER PRODUCT ID</label></td>
                        <td><input type="text" name="pid" placeholder=" Start with M011"></td>
                        </tr>
                        <tr>
                           <td><label>ENTER PRODUCT NAME</label></td>
                           <td><input type="text" name="name"placeholder="Name of product"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER RAM ROM SIZE</label></td>
                           <td><input type="text" name="ram_rom" placeholder="*GB | *GB format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER BATTERY CAPACITY</label></td>
                           <td><input type="text" name="battery" placeholder="1000mAH format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER CAMERA QUALITY</label></td>
                           <td><input type="text" name="camera" placeholder="*MP + *MP format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER NAME OF PROCESSOR</label></td>
                           <td><input type="text" name="processor" placeholder="Snapdragon 660 format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER PRICE OF PRODUCT</label></td>
                          <td> <input type="text" name="price" placeholder="10000 format"></td>
                           </tr>
                        <tr>
                          <td colspan="2"><input type="file" name="myfile"></td>
                           </tr>
                        <tr>
                              <td colspan="2"><input type="submit" name="mbtn"></td>
                        </tr>
                    </form>
                                   
                        </table>
                        </div>
                    <div align="center">
                        <table class="modify" id="f2"> 
                    <form  >
                        <TR>
                            <TH colspan="2"><h3>Laptop form</h3><hr></th>
                        </tr>
                        <tr>
                        <td><label>ENTER PRODUCT ID</label></td>
                        <td><input type="text" name="pid" placeholder=" Start with M011"></td>
                        </tr>
                        <tr>
                           <td><label>ENTER PRODUCT NAME</label></td>
                           <td><input type="text" name="name"placeholder="Name of product"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER RAM ROM SIZE</label></td>
                           <td><input type="text" name="ram_rom" placeholder="*GB | *GB format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER SOFTWARE</label></td>
                           <td><input type="text" name="software" placeholder="1000mAH format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER SIZE</label></td>
                           <td><input type="text" name="size" placeholder="*MP + *MP format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER NAME OF PROCESSOR</label></td>
                           <td><input type="text" name="processor" placeholder="Snapdragon 660 format"></td>
                            </tr>
                        <tr>
                           <td><label>ENTER PRICE OF PRODUCT</label></td>
                          <td> <input type="text" name="price" placeholder="10000 format"></td>
                           </tr>
                        <tr>
                          <td colspan="2"><input type="file" name="mmyfile2"></td>
                           </tr>
                        <tr>
                              <td colspan="2"><input type="submit" name="lbtn"></td>
                        </tr>
                    </form>
                                   
                        </table>
                        </div>
                    
                    
                    
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
