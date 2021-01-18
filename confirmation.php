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
require 'communication/sendMail.php';

session_start();
//echo $_SESSION["conf_otp"];


if (isset($_POST["resend"])){
    //echo "resed is pressed";
    
    $otp=rand(100000,999999);
    //echo $otp;
    $_SESSION["conf_otp"]=$otp;
    try{
        sendEmail($_SESSION["email"],"your otp for tripzilaa acount is:$otp");
        }
      catch(Exception $error){
      var_dump($error);
      }
      header("Location:confirmation.php");
}
$user='root';
$pass = '';
$db='tripzilaa';

$email=$_SESSION['email'];
$db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
$qr ="UPDATE passenger 
SET 
verified = 1
WHERE
email = '$email'";

if (isset($_POST["submit"])){
    if($_POST['otp']==$_SESSION["conf_otp"]){
        $r = mysqli_query($db, $qr);
        //$result = mysqli_fetch_all($r, MYSQLI_ASSOC);
        //var_dump($result);
        echo $email;
        
       
        $email=$_SESSION['email'];
       

        echo $email;
        header("Location:login.php"); 

    }
    
    
    else{
       
        header("Location:confirmation.php");
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
                        <p>Enter otp sent to your email and phone number.<br>If not recived check spam folder of your email</p>
                    </div>
					<div class="form-right-inf"> 
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="signin-form">	
							
								 <div  class="form-input">
									<input type="text"  style="width: 300px;" name="otp" placeholder="Enter otp" required />
								
                                   
                                <div  class="form-input"><button class="btn" name="submit"  style="width: 300px;">Confirm</button></div>
                           
                                <div  class="form-input"><button class="btn" name="resend"  style="width: 300px;">resend otp</button></div>
							
                                </div>
								
							
                           
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