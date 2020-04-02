
<!DOCTYPE html>
<?php session_start() ?>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--footer icons-->
        <!--colosol js-->
        <script src="javascript/colosol.js" type="text/javascript"></script>
        <!--colosol css-->
        <link href="css/colosol.css" rel="stylesheet" type="text/css"/>   
        
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
        
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include("header.php"); ?>
            <div class="row" style="margin-left: 0px; margin-right: 0px;padding-bottom: 15px;">
                <div class="col-sm-12" >
                  
                    
                    <div class="row" style="margin-bottom: 4px">
                        <div class="col-sm-12" >
                                <div class="scoll image"style="width:100%"> 
                                        <div class="mySlides" style="display:block;">
                                            <img src="./images/colo1.jpg" style="width:100%;opacity:1" class="img-responsive">
                                         
                                        </div>
                                        <div class="mySlides" style="">
                                            <img src="./images/colo2.jpg" style="width:100% ; opacity:1" class="img-responsive">
                                          
                                        </div>
                                        <div class="mySlides" style="">
                                            <img src="./images/colo3.jpg" style="width:100%; opacity:1" class="img-responsive">
                                          
                                        </div>
                                     <div class="mySlides" style="">
                                            <img src="./images/colo4.jpg" style="width:100%; opacity:1" class="img-responsive">
                                          
                                        </div>
                                    <div class="mySlides" style="">
                                            <img src="./images/colo5.jpg" style="width:100%; opacity:1" class="img-responsive">
                                         
                                        </div>
                                    <div class="mySlides" style="">
                                            <img src="./images/colo6.jpg" style="width:100%; opacity:1" class="img-responsive">
                                          
                                        </div>
                        
                                        <button class="colbtn" onclick="plusDivs(-1)" style="position:absolute;top:50%;left:5%;transform:translate(0%,-50%);-ms-transform:translate(-0%,-50%);border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;text-align:center;cursor:pointer;white-space:nowrap;"><b><font color="white">&#10094;</font></b></button>
                                        <button class="colbtn" onclick="plusDivs(1)" style="position:absolute;top:50%;right:8%;transform:translate(0%,-50%);-ms-transform:translate(0%,-50%);border:none;display:inline-block;padding:8px 16px;vertical-align:middle;overflow:hidden;text-decoration:none;color:inherit;text-align:center;cursor:pointer;white-space:nowrap;"><b><font color="white">&#10095;</font><b></button>
                        
                        
                                    </div>
                                </div>
                            </div>
                          <!--start today code-->
                          <div class="row">
                              <div class="col-sm-10">
                                  <div class="row"> 
                                      <div class="col-sm-12">
                                          <h2>Deals of the day</h2>
                                      </div>
                                 </div>
                                  <hr style="color:black;">
                                  <div class="row" style="margin-bottom: 100px">
                                    <a href="televisionbuy.php?pid=T003">
                                        <div class="col-sm-3" style="padding:10px">
                               
                                        <img src="./images/television/T003.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Panasonic Hd Ready Led tv
                                               <br>
                                               <font color="red"><del>Rs31,990</del></font>
                                               <font color="green" size="6px"><ins>Rs29,990</ins></font>
                                         </div>
                                        </div>
                                        
                                   
                                        </a>
                                    <a href="acbuy.php?pid=ac004">
                                        <div class="col-sm-3" style="padding:10px">
                               
                                        <img src="./images/ac/ac004.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Blue star spilt ac
                                               <br>
                                               <font color="red"><del>Rs49,990</del></font>
                                               <font color="green" size="6px"><ins>Rs41,400</ins></font>
                                         </div>
                                        </div>
                                        
                                   
                                        </a>
                                    <a href="televisionbuy.php?pid=T008">
                                    <div class="col-sm-3" style="padding:10px">
                                        <img src="./images/television/T008.jpg" style="" class="img-responsive">
                                         <div class="c">
                                               Thomson UD9 Led TV
                                               <br>
                                               <font color="red"><del>Rs34,990</del></font>
                                               <font color="green" size="6px"><ins>Rs29,990</ins></font>
                                         </div>
                                    </div>
                                        </a>
                                    <a href="laptopbuy.php?pid=l004">
                                        <div class="col-sm-3" style="padding:10px">
                               
                                        <img src="./images/laptop/l004.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Lenevo Yoga 730
                                               <br>
                                               <font color="red"><del>Rs1,49,990</del></font>
                                               <font color="green" size="5px"><ins>Rs1,09,990</ins></font>
                                         </div>
                                        </div>
                                        
                                   
                                        </a>
                                </div>
                              </div>
                              <div class="col-sm-2">
                                  <a href="refrigeratorbuy.php?pid=ref005"><img src="./images/refrigerator/ref005.jpg" style="" class="img-responsive"></a>
                                         <div class="coltxt">
                                                Rs 24,999
                                         </div>
                             </div>
                          </div>
                          
                          
                         <!-- end today code-->
                          <!--start of today code 2-->
                         <div class="row" style="margin-bottom: 20px">
                             
                             <div class="col-sm-4">
                                 <a href="mensclothingbuy.php?pid=mc001">
                                    
                               
                                 <img src="./images/mensclothing/mc001.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Abstract men hooded neck
                                               <br>
                                               <font color="red"><del>Rs499</del></font>
                                               <font color="green" size="6px"><ins>Rs359</ins></font>
                                         </div>
                                    
                                        
                                     </a> 
                                        
                             </div>
                                 
                             <div class="col-sm-4">
                                 <a href="mensgroomingbuy.php?pid=mg007">
                                    
                               
                                 <img src="./images/mensgrooming/mg007.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Philips QT00363 Trimmer
                                               <br>
                                               <font color="red"><del>Rs1,200</del></font>
                                               <font color="green" size="6px"><ins>Rs1,050</ins></font>
                                         </div>
                                    
                                        
                                     </a> 
                             </div>
                             <div class="col-sm-4">
                                  <a href="babycarebuy.php?pid=bc002">
                                    
                               
                                 <img src="./images/babycare/bc002.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Daber Lal Tail
                                               <br>
                                               <font color="red"><del>Rs490</del></font>
                                               <font color="green" size="6px"><ins>Rs350</ins></font>
                                         </div>
                                    
                                        
                                     </a>
                             </div>
                             
                         </div>
                         <!--end of code 2-->
                         <!--start today code 3-->     
                         <div class="row">
                             <div class="col-sm-12">
                                 <div class="row">
                                     <div class="col-sm-12">
                                         <h3>Deals for you</h3>
                                         <hr>
                                     </div>
                                 </div>
                                 <div class="row">
                             <div class="col-sm-3">
                                 <a href="acbuy.php?pid=ac002">
                                    
                               
                                 <img src="./images/ac/ac002.jpg" style="margin-bottom: 140px" class="img-responsive">
                                     
                                         <div class="">
                                               Koryo 2.0 split AC
                                               <br>
                                               <font color="red"><del>Rs55,990</del></font>
                                               <font color="green" size="6px"><ins>Rs54,990</ins></font>
                                         </div>
                                    
                                        
                                     </a>  
                             </div>
                             <div class="col-sm-3">
                                 <a href="babycarebuy.php?pid=bc005">
                                    
                               
                                 <img src="./images/babycare/bc005.jpg" style="margin-bottom: 20px" class="img-responsive">
                                     
                                         <div class="">
                                               Daber Lal Tail
                                               <br>
                                               <font color="red"><del>Rs1,500</del></font>
                                               <font color="green" size="6px"><ins>Rs1,300</ins></font>
                                         </div>
                                    
                                        
                                     </a>
                             </div>
                             <div class="col-sm-3">
                                 <a href="makeupbuy.php?pid=wm003">
                                    
                               
                                 <img src="./images/makeup/wm003.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Colobar Eyeliner
                                               <br>
                                               <font color="red"><del>Rs600</del></font>
                                               <font color="green" size="6px"><ins>Rs550</ins></font>
                                         </div>
                                    
                                        
                                     </a>
                             </div>
                               <div class="col-sm-3">
                                  <a href="babycarebuy.php?pid=bc002">
                                    
                               
                                 <img src="./images/babycare/bc002.jpg" style="" class="img-responsive">
                                     
                                         <div class="">
                                               Daber Lal Tail
                                               <br>
                                               <font color="red"><del>Rs490</del></font>
                                               <font color="green" size="6px"><ins>Rs350</ins></font>
                                         </div>
                                    
                                        
                                     </a>
                             </div>
                               
                                    
                                 </div>
                            </div>     
                             
                         </div>
                         
                         <!--end today code 3-->
                  
                        </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
