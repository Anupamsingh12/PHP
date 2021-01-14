<!--
Author: Pomonart
Author URL: http://Pomonart.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Tripzilaa</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
	 <link rel="stylesheet" href="css/register.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>
<?php 

session_start();
//echo $_SESSION["conf_otp"];

if (isset($_POST["submit"])){
    if($_POST['otp']==$_SESSION["conf_otp"]){
       // echo "account created";
    

    }
}

?>




   <!-- /form-26-section -->
   <section class="form-26-1">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						<h2>Account Confirmation</h2>
                        <p>Enter otp sent to your email and phone number.</p>
                    </div>
					<div class="form-right-inf"> 
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="signin-form">	
							
								 <div  class="form-input">
									<input type="text"  style="width: 300px;" name="otp" placeholder="Enter otp" required />
								</div>
							
								
							
								
							</div>
                            <div  class="form-input"><button class="btn" name="submit"  style="width: 300px;">Confirm</button></div>
							<h6 class="already">Already have an account? <a href="login.php"><span>Login Here<span></span></span></a></h6>
						</form>
						
                    </div>
					<div class="copyright text-center">
                    <p>© 2021 Tripzilaa. All rights reserved | Design by <a href="http://Pomonart.com/"
                            target="_blank">Pomonart</a></p>
                </div>
                </div>
			</div>
		</div>
		    </div>
		</section>
      <!-- //form-26-section -->
</body>
</html>