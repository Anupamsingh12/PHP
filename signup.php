<!DOCTYPE html>
<html lang="en">
  <head>

    <title>Create account</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />

    <!-- Bootstrap CSS -->
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css"
      integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
      crossorigin="anonymous"
    />
    
  </head>
   
</ul>
  <body>


<?php
// define variables and set to empty values
 $email=$gender = $password1=$password2 = $phone= "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
  $email = (string) test_input($_POST["email"]);
  $phone = test_input($_POST["Phone"]);
  $password1 = test_input($_POST["Password1"]);
  $password2 = test_input($_POST["Password2"]);
  $gender = test_input($_POST["gender"]);

  if($password1 ==$password2 ) {
    $user='root';
    $pass = '';
    $db='tripzilaa';

    $db=new mysqli('localhost',$user,$pass,$db) or die("unable to connect");
    echo "password matched ","<br>";

  // $sql = "INSERT INTO passenger (email,password,phone,gender)VALUES ('john@example.com','dfdf','John', 'Doe') ";
      $sql = "INSERT INTO passenger (email,password,phone,gender)VALUES ('$email','$password2','$phone', '$gender') ";

if ($db->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $db->error;
}


  }
  else
    echo "password is not same";
  

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>


    <div class="jumbotron jumbotron-fluid">
      <div class="container">
        <div class="row">
          <div
            class="col-12 col-sm-8 col-md-6 col-lg-4 offset-sm-2 offset-md-3 offset-lg-4"
          >
            <h3 class="mb-3 text-center">Create a new account</h3>
            
            <form class="mb-3" method='post'action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
              <div class="row">
                <div class="form-group col-12 col-sm-6">
                  <label for="firstName">First name:</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="First name"
                    id="firstName"
                    name="firstName"
                  />
                </div>
                <div class="form-group col-12 col-sm-6">
                  <label for="lastName">Last name:</label>
                  <input
                    type="text"
                    class="form-control"
                    placeholder="Last name"
                    id="lastName"
                    name="lastName"
                  />
                </div>
              </div>
              <div class="form-group">
                <label for="email">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  placeholder="example@example.com"
                  id="email"
                  name="email"
                  required
                />
              </div>
              <div class="form-group">
                <label for="phone">phone:</label>
                <input
                  type="text"
                  class="form-control"
                  placeholder="phone"
                  id="phone"
                  name="Phone"
                  
                />
              </div>
               
              <div class="form-group">
                <label for="password2">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="password"
                  id="password1"
                  name="Password1"
                  required
                />
              </div>
                <div class="form-group">
                <label for="password2"> confirm Password:</label>
                <input
                  type="password"
                  class="form-control"
                  placeholder="confirm password"
                  id="password2"
                  name="Password2"
                  required
                />
              </div>
               Gender:
               <input type="radio" name="gender" value="female">Female
                 <input type="radio" name="gender" value="male">Male
                 <input type="radio" name="gender" value="other">Other
                  <br>
            
              <button type="submit"  class="btn btn-primary btn-block mb-3">
                Create account
              </button>
              <div class="alert alert-info small" role="alert">
                By clicking above you agree to our
                <a href="#" class="alert-link">Terms &amp; Conditions</a> and
                our <a href="#" class="alert-link">Privacy Policy</a>.
              </div>
              <div class="text-center">
                <p>or ...</p>
                <a href="login.php" class="btn btn-success">Login</a>
              </div>
            </form>
          </div>
        </div>
      </div>
     
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
      integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
      integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
      crossorigin="anonymous"
    ></script>



  </body>
</html>