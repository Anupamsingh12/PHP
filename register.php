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
  // define variables and set to empty values
  $email=$gender = $password1=$password2 = $phone= "";

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = (string) test_input($_POST["firstname"]);	
    $lastname = (string) test_input($_POST["lastname"]);
    $email = (string) test_input($_POST["email"]);
    //$phone = test_input($_POST["Phone"]);
    $password1 = test_input($_POST["password1"]);
    $password2 = test_input($_POST["password2"]);
    //$gender = test_input($_POST["gender"]);

    if($password1 ==$password2 ) {
      $user='root';
      $pass = '';
      $db='tripzilaa';

      $db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
      //echo "password matched ","<br>";

      $qr = "SELECT * from `passenger` where email= '$email' ";
      $r = mysqli_query($db, $qr);
      $result = mysqli_fetch_all($r, MYSQLI_ASSOC);
      //var_dump($result);

      if ($result) {
        echo "email already exist";
        }
      else{

        $password2=md5($password2);  //hashing paswword in database
    
      


        $otp=rand(100000,999999);
        //echo $otp;
        session_start();
        $_SESSION["conf_otp"]=$otp;
        $_SESSION["email"]=$email;
        

        try{
          sendEmail($email,"your otp for tripzilaa acount is:$otp");
          }
        catch(Exception $error){
        var_dump($error);
        }
        header("Location:confirmation.php");

      
      $sql ="INSERT INTO passenger (firstName,lastName,email,password)VALUES ('$firstname','$lastname','$email','$password2')";

      if ($db->query($sql) === TRUE) {
        //echo "New record created successfully";
    }
    else {
      echo "Error: " . $sql . "<br>" . $db->error;
    }


  }
  
  

  
}
else{
  echo "password not matched";
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
   <section class="form-26-1">
         <div class="form-26-mian">
				<div class="layer">
			<div class="wrapper">
			<div class="form-inner-cont">
					<div class="forms-26-info">
						<h2>Register</h2>
                        <p>Register & get special discount's on every cab booking.</p>
                    </div>
					<div class="form-right-inf"> 
							<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="signin-form">	
							 <div class="forms-gds">
								 <div  class="form-input">
									<input type="text" name="firstname" placeholder="Firstname" required />
								</div>
								<div  class="form-input">
										<input type="text" name="lastname" placeholder="Lastname" required />
									</div>
								<div  class="form-input">
									<input type="email" name="email" placeholder="Email" required />
								</div>
								<div  class="form-input">
									<input type="password" name="password1" placeholder="Password" required />
								</div>
								<div  class="form-input">
									<input type="password" name="password2" placeholder="Confirm Password" required />
								</div>
							
								<div  class="form-input"><button class="btn">Signup</button></div>
							</div>
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