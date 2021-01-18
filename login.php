<!--
Author: Pomonart
Author URL: http://Pomonart.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>tripzilaa</title>
    <!-- Meta tag Keywords -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8" />
    <meta name="keywords"
        content="Merged Forms Page Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <!-- //Meta tag Keywords -->
     <link rel="stylesheet" href="css/login.css" type="text/css" media="all" /><!-- Style-CSS -->
</head>
<body>


<?php

	// define variables and set to empty values
	session_start();
	//var_dump($_SESSION);
 	if( isset($_SESSION['user'])){
                            
        header("Location: index.php");
                    }
 		$email= $password = "";

		if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  			$email = (string) test_input($_POST["email"]);
  
			  $password = test_input($_POST["password"]);
			  
			  $password=md5($password);
  
    		$user='root';
    		$pass = '';
			$db='tripzilaa';
			

    		$db= mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
   			//echo "connection eastiblished","<br>";

  
      		$sql ="SELECT * FROM passenger where email='$email'";
      		$varr=mysqli_query($db,$sql);
      		//var_dump(mysqli_fetch_assoc($varr));
     		// var_dump($varr);
     

      		if(mysqli_num_rows($varr)!=0){
     			// echo $varr2["lastName"];
      	

 				$varr2 =mysqli_fetch_assoc($varr);
				//  storing user data in variable....................
     			if($password==$varr2['password']){
      				$_SESSION['user']=$varr2;
       				header("Location: index.php");
 
 			//echo $_SESSION['user']['firstName'];
				 }
				 else{
					 echo "<h3 style='color:#f35b5c' > incorrect password </h3>";
				 }
 			}
 		else{
			 echo " if you have error validating your otp ,try after 24 hour ";
 			header("Location:login.php?error=".urlencode("account not found"));
 		}
	}


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
	

   <!-- /form-26-section -->
   <section class="form-26">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						 <h2>Login</h2>
                        <p>Login now & get special discount on every cab booking.</p>
                    </div>
					<div class="form-right-inf"> <?php 
												if(isset($_GET['error'])){
													echo "<h3 style='color:#f35b5c'> account not found</h3>";
												}
														?>
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="signin-form">	
							 <div class="forms-gds">
								<div  class="form-input">
									<input type="email" name="email" placeholder="Email" required />
								</div>
								<div  class="form-input">
									<input type="password" name="password" placeholder="Password" required />
								</div>
								<div  class="form-input"><button class="btn">Login</button></div>
							</div>
							<h6 class="already"> Dont have an account? <a href="register.php"><span>Register Here<span></span></span></a></h6>
							<h6 class="already"> go for admin ? <a href="admin/login.html"><span>admin<span></span></span></a></h6>
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