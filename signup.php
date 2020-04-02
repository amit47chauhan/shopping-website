<?php
$msg="";
if(isset($_GET['btn_reg']))
{
    $name=$_GET['fullname'];
    $email=$_GET['email'];
    $password=$_GET['password'];
    $address=$_GET['signupAdd'];
    $mobile=$_GET['mobile'];
   $link= mysqli_connect('localhost','root','','shopify');
   $qry="insert into userinfo values('$name','$email',$mobile,'$password','$address')";
   mysqli_query($link,$qry);
   if(mysqli_affected_rows($link)>0)
   {
     $msg="<font color='green'>RECORD INSERTED</FONT>";  
       
   }
   else
       {
        $msg="<font color='RED'>ERROR IN INSERTING RECORD</FONT>"; 
        
       
       }
       mysqli_close($link);
    
}

?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"><!--footer icon-->
        <link href="css/homebutton.css" rel="stylesheet" type="text/css"/>
        
                 <style>
        

h2{
  margin-top: 2px;
  margin-bottom: 2px;
}

.cont { max-width: 460px; }

.divider {
  text-align: center;
  margin-top: 20px;
  margin-bottom: 5px;
}

.divider hr {
  margin: 7px 0px;
  width: 35%;
}

.left { float: left; }

.right { float: right; }

        </style>

        
        <title></title>
    </head>
    <body>
        <div class="container-fluid">
            <?php include("header.php"); ?>
            <div class="row" style="margin-left: 15px; margin-right: 15px">
                <div class="col-sm-12" style="background-image:linear-gradient(to right bottom,rgba(120,100,29,1),rgba(230,120,321,1));padding-top:40px;padding-bottom: 20px">
                    <div class="container cont">
		<div class="row">
			<div class="panel panel-primary">
				<div class="panel-body">
					<form method="get"role="form" class="bg-info">
						<div class="form-group">
                                                    <h2 class="bg-success">REGISTER HERE!<?php echo $msg; ?></h2>
						</div>
						<div class="form-group">
							<label class="control-label" for="signupName">Your name</label>
							<input id="signupName" type="text" maxlength="50" class="form-control" name="fullname">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupEmail">Email</label>
							<input id="signupEmail" type="email" maxlength="50" class="form-control" name="email">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupMobile">Mobile</label>
							<input type="text" maxlength="50" class="form-control" name="mobile">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPassword">Password</label>
                                                        <input name="password" type="password" maxlength="25" class="form-control" placeholder="at least 6 characters" length="40">
						</div>
						<div class="form-group">
							<label class="control-label" for="signupPasswordagain">Password again</label>
                                                        <input name="cpassword" type="password" maxlength="25" class="form-control"><br>
                                                        <label class="control-label" for="signupAdd">Address</label>
						</div>
                                                <div class="form-group">
							
                                                        <textarea name="signupAdd" ></textarea>
						</div>
                                            
						<div class="form-group">
							<input id="signupSubmit" type="submit" class="btn btn-info btn-block" value="Create your account" name="btn_reg">
						</div>
						<p class="form-group">By creating an account, you agree to our <a href="#">Terms of Use</a> and our <a href="#">Privacy Policy</a>.</p>
						<hr>
						<p></p>Already have an account? <a href="signin.php">Sign In</a></p>
                                             
					</form>
				</div>
			</div>
		</div>
	</div>  
                </div>
            </div>
            <?php include("footer.php"); ?>
        </div>

    </body>
</html>
