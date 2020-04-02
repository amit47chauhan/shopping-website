
       <div class="row" style="margin-left: 16px;margin-right: 16px;">
    <div clas="col-sm-12" style="background-image:linear-gradient(to right bottom,crimson,white)" >
        <img src="./images/header.png" class="img-responsive">
        
        
    </div>
</div>
<div class="rows">
    <div class="col-sm-12">

 <nav class="navbar navbar-inverse" style="background-color:darkslategray ;margin-bottom: 0px">
           <div class="container-fluid" style="">
    
    <ul class="nav navbar-nav">
        <li class="" style=""><a href="index.php" class="homelink bg-info">Home</a></li>
    
      <li><a href="aboutus.php" class="homelink">About Us</a></li>
   
      <li><a href="#contact" class="homelink">Contacts</a></li>
      <li><a href="partner.php" class="homelink">Partner with us</a></li>
    </ul>
        <?php
$str=<<<ABCD
    <ul class="nav navbar-nav navbar-right">
        <li><a href="signup.php" class="homelink"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="signin.php" class="homelink"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>

ABCD;
$str1=<<<ABCD

    <ul class="nav navbar-nav navbar-right">
        <li><a href="yourorder.php" class="homelink"><span></span>Your Orders</a></li>
        <li><a href="yourcart.php" class="homelink"><span></span>Cart</a></li>
        <li><a href="logout.php" class="homelink"><span class="glyphicon glyphicon-user"></span>Logout</a></li>
        
    </ul>
ABCD;
 
        




if(isset($_SESSION['email']))
{
    echo $str1;
    
}
 else {
  echo $str;
  
}


?>
 </div>
</nav> 






  <nav class="navbar navbar-inverse" style="margin-bottom: 2px;background-image:linear-gradient(to right bottom,darkgreen,navy,maroon)">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">

      <li class="dropdown" style="padding-right: 40px"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Electronics <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="mobile.php">Mobile</a></li>
          <li><a href="laptop.php">Laptops</a></li>
          <li><a href="tablet.php">Tablets</a></li>
        </ul>
      </li>
      <li class="dropdown" style="padding-right: 40px"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Tv & Appliances<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="television.php">TV</a></li>
            <li><a href="refrigerator.php">Refrigerator</a></li>
            <li><a href="ac.php">Air conditioner</a></li>
        </ul>
      </li> <li class="dropdown" style="padding-right: 40px"><a class="dropdown-toggle " data-toggle="dropdown" href="#">Men<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="mensclothing.php">Clothing</a></li>
            <li><a href="mensgrooming.php">Grooming</a></li>
     
        </ul>
      </li>
       <li class="dropdown" style="padding-right: 40px"><a class="dropdown-toggle " data-toggle="dropdown" href="#">Women<span class="caret"></span></a>
        <ul class="dropdown-menu">
            <li><a href="womenclothing.php">Clothing</a></li>
            <li><a href="makeup.php">Makeup</a></li>
          
        </ul>
      </li>
       <li class="dropdown" style="padding-right: 300px"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Kids <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="babycare.php">Baby care</a></li>
       
          <li><a href="babyclothing.php">Clothing</a></li>
        </ul>
      </li>
      <li style="padding-right: 40px"><?php
      if(isset($_SESSION['email']))
      {
          
          echo "<font color=white size=4px>".$_SESSION['name']."</font>";
      }
      
        ?>  
    <span class="caret"></span>
     
      </li>
      
       
      
      
     
    </ul>
   
  </div>
</nav>
        
    </div>
</div> 
        
        
        
        











