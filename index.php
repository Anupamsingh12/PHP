<!--
Author: pomonart
Author URL: http://pomonart.com
-->
<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pickup_location=$drop_location="";

  $starting_point = (string) test_input($_POST["starting_point"]);

  $ending_point = test_input($_POST["ending_point"]);

  $user='root';
  $pass = '';
  $db='tripzilaa';

  $db= mysqli_connect('localhost',$user,$pass,$db) or die("unable to connect");
   //echo "connection eastiblished","<br>";


    $sql ="SELECT * FROM cities where city_name='$starting_point'";
    $varr=mysqli_query($db,$sql);
    //var_dump(mysqli_fetch_assoc($varr));
   // var_dump($varr);


    if(mysqli_num_rows($varr)!=0){
     // echo $varr2["lastName"];
    }

   $varr2 =mysqli_fetch_assoc($varr);
  //  storing user data in variable....................
     

function test_input($data) {
$data = trim($data);
$data = stripslashes($data);
$data = htmlspecialchars($data);
return $data;
}
}
?>

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Tripzilaa</title>
    <!-- web fonts -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Hind&display=swap" rel="stylesheet">
    <!-- //web fonts -->
    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style-starter.css">
    <link rel="stylesheet" href="css/suggestion.css">
  </head>
  <body>


<!-- Top Menu 1 -->
<section class="w3l-top-menu-1">
	<div class="top-hd">
		<div class="container">
	<header class="row">
		<div class="social-top col-lg-3 col-6">
			<li>Follow Us</li>
			<li><a href="www.facebook.com/tripzilaa"><span class="fa fa-facebook"></span></a></li>
			<li><a href="www.instagram.com/tripzilaa"><span class="fa fa-instagram"></span></a> </li>
				<li><a href="www.twitter.com/tripzilaa"><span class="fa fa-twitter"></span></a></li>
				
		</div>
		<div class="accounts col-lg-9 col-6">
				<li class="top_li"><span class="fa fa-mobile"></span><a href="tel:+91 81264 19669">+91 81264 19669</a> </li>
				<?php 
                    if( isset($_SESSION['user'])){
                             
                       echo '<li class="top_li1"><a href="#">'.'User :  '.$_SESSION['user']['firstName'].'</a></li><li class="top_li1"><a href="logout.php">Logout</a></li>';
                         
                    }
                    else{
                       ?>
                       <li class="top_li1"><a href="login.php">Login</a></li>
                        <li class="top_li2"><a href="register.php">Register</a></li> 
                        <?php 
                    }
                ?>
		</div>
		
	</header>
</div>
</div>
</section>
<!-- //Top Menu 1 -->
<section class="w3l-bootstrap-header">
  <nav class="navbar navbar-expand-lg navbar-light py-lg-2 py-2">
    <div class="container">
      <a class="navbar-brand" href="index.php"><span class="fa fa-car"></span> Tripzilaa</a>
      <!-- if logo is image enable this   
    <a class="navbar-brand" href="#index.php">
        <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
    </a> -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon fa fa-bars"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="about.php">About</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="services.php">Services</a>
          </li>
        
          <li class="nav-item mr-0">
            <a class="nav-link" href="contact.php">Contact</a>
          </li>
        </ul>
       
      </div>
    </div>
  </nav>
</section>


<section class="form-12" id="home">
	<div class="form-12-content">
		<div class="container">
			<div class="grid grid-column-2 ">
				<div class="column2">
					</div>
				<div class="column1">
       	
					
						<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="blog-search form d-flex search-form autocomplete"  style="width:300px;">
								<input type="search" class="form-control cities" placeholder="Enter Pickup Location" name="starting_point" required="required">
                                
						      </div>
						    
						<div class="blog-search form d-flex search-form">
								<input type="search" class="form-control cities" placeholder="Enter drop Location" name="ending_point" required="required">
							</div>

                            <div class="blog-search form d-flex search-form">
                                <input type="date" class="form-control" name="date" required="required">
                            </div>
							
							
							<button type="submit" class="btn">Search Cab</button>
						</form>
					</div>
					
					
				

					
			</div>
		</div>
	</div>
</section>
<section class="locations-1" id="locations">
<div class="locations py-5">
 <div class="container py-md-3">
    <div class="heading text-center mx-auto">
        <h3 class="head">Popular Locations</h3>
        <p class="my-3 head "> Getting Started With Outstation Ride</p>
      </div>
            <div class="row mt-3 pt-5">
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Austin</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g2.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Chicago</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-lg-0 pt-lg-0 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Dallas</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g4.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Houston</h3>
                            <span class="post">2 Listings</span>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g5.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Jacksonville</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 mt-md-4 pt-md-2">
                    <div class="box16">
                        <img class="img-fluid" src="assets/images/g6.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">New Jersey</h3>
                            <span class="post">2 Listings</span>
                           
                        </div>
                    </div>
                </div>
            </div>
        </div>
	 </div>
 </section>
<section class="w3l-services2" id="services">
			<div class="features-with-17_sur py-5">
				   <div class="container py-md-3">
					<div class="heading text-center mx-auto">
						<h3 class="head text-white">What We Offer</h3>
						<p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
						  Nulla mollis dapibus nunc, ut rhoncus
						  turpis sodales quis. Integer sit amet mattis quam.</p>
					  </div>
				     <div class="row pt-5 mt-3">
						<div class="col-lg-5 features-with-17-left_sur">
							<h4 class="lft-head">We’re Offering Unmatched Services</h4>
							<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
							<p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc, ut rhoncus turpis sodales quis. Integer sit amet mattis quam.</p>
							<div class="stats-1">
							<div class="stats-1-left">
								<h4>2300</h4>
								<h6>Clients</h6>
							</div>
							<div class="stats-1-left">
								<h4>16</h4>
								<h6>Awards</h6>
							</div>
							<div class="stats-1-left">
								<h4>2536</h4>
								<h6>Projects</h6>
							</div>
						</div>
						</div>
						<div class="col-lg-7 my-lg-0 my-5 align-self-center features-with-17-right_sur">
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-laptop s4"></span>		
								</div>
								<div class="features-with-17-left2">
									<h6><a href="#url">Fastest Service</a></h6>
									<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>		
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-database s5"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Largest Real Estate</a></h6>
										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>			
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
									<span class="fa fa-lock s3"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Property Insurance</a></h6>
										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>	
								</div>
							</div>
							<div class="features-with-17-right-tp_sur">
								<div class="features-with-17-left1">
										<span class="fa fa-codepen s2"></span>		
								</div>
								<div class="features-with-17-left2">
										<h6><a href="#url">Doorstep Process</a></h6>
										<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore.</p>	
								</div>
							</div>
							
							
						</div>
					</div>
				</div>
			</div>
		</section>
<section class="grids-4" id="properties">
    <div id="grids4-block" class="py-5">
       <div class="container py-md-3">
			<div class="heading text-center mx-auto">
      <h3 class="head">Properties For sale</h3>
      <p class="my-3 head"> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
        Nulla mollis dapibus nunc, ut rhoncus
        turpis sodales quis. Integer sit amet mattis quam.</p>
    </div>
            <div class="row mt-5 pt-3">
                <div class="grids4-info  col-lg-4 col-md-6">
                        <a href="#"><img src="assets/images/g7.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="rent">For Rent</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Luxury Apartment In chelsea</a></h5>
                            <p>$ 450,000 $777 / sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
                <div class="grids4-info col-lg-4 col-md-6 mt-md-0 mt-5">
                        <a href="#"><img src="assets/images/g8.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="sale">For Sale</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Nature-Friendly Family Houses</a></h5>
                            <p>$ 1,350 / per month</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 3 Beds</li>
                                <li><span class="fa fa-bath"></span> 2 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
                 <div class="grids4-info col-lg-4 col-md-6 mt-lg-0 mt-5">
                        <a href="#"><img src="assets/images/g7.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="rent">For Rent</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">House Rent in Hydepark</a></h5>
                            <p>$ 2,500 /per month</p>
                           <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g8.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="sale">For Sale</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Apartment in Memorial Texas</a></h5>
                            <p>$ 220,000 550 / Sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 5 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g9.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="rent">For Rent</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Villa in Miami beach Florida</a></h5>
                            <p>$ 150,000 500 / Per Sqft</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 2 Beds</li>
                                <li><span class="fa fa-bath"></span> 1 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
					 <div class="grids4-info  col-lg-4 col-md-6 mt-5">
                        <a href="#"><img src="assets/images/g10.jpg" class="img-fluid" alt=""></a>
                        <ul class="location-top">
                            <li class="sale">For Sale</li>
                            <li class="open-1">Open House</li>
                        </ul>
                        <div class="info-bg">
                            <h5><a href="#">Apartment Jacksonville</a></h5>
                            <p>$ 750 /per month</p>
                            <ul>
                                <li><span class="fa fa-bed"></span> 4 Beds</li>
                                <li><span class="fa fa-bath"></span> 3 Baths</li>
                                <li><span class="fa fa-share-square-o"></span> 1200 sq ft</li>
                            </ul>
                        </div>
                    </div>
                </div>
           </div>
    </div>
</section>
<section class="w3l-apply-6">
	<!-- /apply-6-->
	<div class="apply-info py-5">
		<div class="container py-lg-3">
			<div class="heading text-center mx-auto">
				<h3 class="head text-white">What Makes Us The Preferred Choice</h3>
				<p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
				  Nulla mollis dapibus nunc, ut rhoncus
				  turpis sodales quis. Integer sit amet mattis quam.</p>
			  </div>
			<div class="apply-grids-info row pt-5 mt-3">
				<div class="apply-gd-left col-lg-7">
						<div class="row">
						<div class="col-sm-6 sub-apply">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-university mb-4"></span>
									
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Maximum Choices</a></h5>
											<p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
										</div>
					
									</div>

						</div>
						<div class="col-sm-6 sub-apply mt-sm-0 mt-5">
							<div class="apply-sec-info text-center">
									
										<span class="fa fa-bath mb-4"></span>
									
									<div class="appyl-sub-icon-info">
											<h5><a href="#">Buyers Trust Us</a></h5>
										<p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
									</div>
				
								</div>

					</div>
					<div class="col-sm-6 sub-apply mt-5">
						<div class="apply-sec-info text-center">
								
									<span class="fa fa-cubes mb-4"></span>
								
								<div class="appyl-sub-icon-info">
										<h5><a href="#">Seller Prefer Us</a></h5>
									<p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
								</div>
			
							</div>

				</div>
						<div class="col-sm-6 sub-apply mt-5">
								<div class="apply-sec-info text-center">
										
											<span class="fa fa-hospital-o mb-4"></span>
										
										<div class="appyl-sub-icon-info">
												<h5><a href="#">Expert Guidance</a></h5>
											<p>Lorem ipsum dolor sit amet,Ea consequuntur.</p>
										</div>
					
									</div>
						</div>
					</div>
				</div>
				<div class="apply-gd-right col-lg-5 mt-lg-0 mt-5">
					<div class="apply-form p-md-5 p-4 mx-auto bg-white mw-100">
						<h4>What Makes Us </h4>
						<p class="mt-3">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Vero, dolore. Vestibulum ante ipsum primis in Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
						<p class="mt-3"> Vero, dolore. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis dapibus nunc Integer sit amet mattis quam.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="w3l-testimonials" id="testimonials">
  <div class="customers-6-content py-5">
    <div class="container py-lg-3">
      <div class="heading text-center mx-auto">
        <h3 class="head">Happy Clients</h3>
        <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
          Nulla mollis dapibus nunc, ut rhoncus
          turpis sodales quis. Integer sit amet mattis quam.</p>
      </div>
     
      <div id="customerhnyCarousel" class="carousel slide" data-ride="carousel">

        <ol class="carousel-indicators">
          <li data-target="#customerhnyCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="1"></li>
                        <li data-target="#customerhnyCarousel" data-slide-to="2"></li>
        </ol>
        <!-- Carousel items -->
        <div class="carousel-inner pb-5">

          <div class="carousel-item active">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Henry Nicholas</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                    
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Mark Waugh</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Sarina Willams</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                     </p>
                     <div class="text-right">
                      <span class="fa fa-quote-right" aria-hidden="true"></span>
                     </div>
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--.item-->

          <div class="carousel-item">
            <div class="customer row py-5 mt-3">
              <div class="col-lg-4 col-md-6">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Mark Waugh</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                  
                  </div>
                </div>
              </div>
              <div class="col-lg-4 col-md-6 off-testi-2">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Sarina Willams</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                     </p>
                     <div class="text-right">
                      <span class="fa fa-quote-right" aria-hidden="true"></span>
                     </div>
                    
                  </div>
                </div>
                
                
              </div>
              <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                <div class="card">
                  <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                  <div class="card-body">
                    <span class="fa fa-quote-left" aria-hidden="true"></span>
                    <h3 class="card-title">Henry Nicholas</h3>
                    <p class="sub-title mb-3">Engineer</p>
                    <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                    </p>
                    <div class="text-right">
                     <span class="fa fa-quote-right" aria-hidden="true"></span>
                    </div>
                    
                  </div>
                </div>
              </div>
            </div>
            
          </div>
                        <!--.item-->
            <div class="carousel-item">
              <div class="customer row py-5 mt-3">
                <div class="col-lg-4 col-md-6">
                  <div class="card">
                    <img class="card-img-top img-responsive" src="assets/images/c3.jpg" alt="">
                    <div class="card-body">
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      <h3 class="card-title">Sarina Willams</h3>
                      <p class="sub-title mb-3">Engineer</p>
                      <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                       </p>
                       <div class="text-right">
                        <span class="fa fa-quote-right" aria-hidden="true"></span>
                       </div>
                      
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 col-md-6 off-testi-2">
                  <div class="card">
                    <img class="card-img-top img-responsive" src="assets/images/c2.jpg" alt="">
                    <div class="card-body">
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      <h3 class="card-title">Mark Waugh</h3>
                      <p class="sub-title mb-3">Engineer</p>
                      <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                      </p>
                      <div class="text-right">
                       <span class="fa fa-quote-right" aria-hidden="true"></span>
                      </div>
                    
                    </div>
                  </div>
                </div>
                <div class="col-lg-4 offset-md-3 offset-lg-0 col-md-6 off-testi">
                  
                  <div class="card">
                    <img class="card-img-top img-responsive" src="assets/images/c1.jpg" alt="">
                    <div class="card-body">
                      <span class="fa fa-quote-left" aria-hidden="true"></span>
                      <h3 class="card-title">Henry Nicholas</h3>
                      <p class="sub-title mb-3">Engineer</p>
                      <p class="card-text text-center mb-4">  Lorem ipsum dolor sit amet, Ea consequuntur illum facere aperiam sequi optio
                      </p>
                      <div class="text-right">
                       <span class="fa fa-quote-right" aria-hidden="true"></span>
                      </div>
                      
                    </div>
                  </div>
                </div>
              </div>
          </div>
          <!--.item-->

        </div>
        <!--.carousel-inner-->
      </div>
    </div>
  </div>
  <!--//customers -->
</section>
<!-- specifications -->
<section class="w3l-specifications-9">
    <div class="main-w3 py-5" id="stats">
        <div class="container py-md-3">
            <div class="heading text-center mx-auto">
                <h3 class="head">We Are Here For You</h3>
                <p class="my-3 head "> Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                  Nulla mollis dapibus nunc, ut rhoncus
                  turpis sodales quis. Integer sit amet mattis quam.</p>
              </div>
           <div class="main-cont-wthree-fea row pt-3 mt-5">
                <div class="grids-speci1 col-lg-3 col-6">
                    <div class="spec-2 text-center">
                        <span class="fa fa-map-marker"></span> 
                    <h3 class="title-spe">180+</h3>
                    <p>Property Locations</p>
                </div>
                </div>
                <div class="grids-speci1 midd-eff-spe col-lg-3 col-6">
                    <div class="spec-2 text-center">
                    <span class="fa fa-users"></span>
                    <h3 class="title-spe">100+</h3>
                    <p>Professional Agents</p>
                    </div>
                </div>
                <div class="grids-speci1 las-but col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                    <span class="fa fa-building"></span>
                    <h3 class="title-spe">250+</h3>
                    <p>Property for Sell</p>
                    </div>
                </div>
                <div class="grids-speci1 las-t col-lg-3 col-6  mt-lg-0 mt-4">
                    <div class="spec-2 text-center">
                     <span class="fa fa-home"></span>
                        <h3 class="title-spe">3200+ </h3>
                        <p>Property for Rent</p>
                        </div>
                    </div>
            </div>
            
        </div>
    </div>
    <!-- //specifications -->
</section>
 
 <!-- grids block 5 -->
 <section class="w3l-footer-29-main" id="footer">
  <div class="footer-29">
    <div class="grids-forms-1 pb-5">
<div class="container">
  <div class="grids-forms">
      <div class="main-midd">
          <h4 class="title-head">Newsletter – Get Updates & Latest News</h4>
          
      </div>
      <div class="main-midd-2">
          <form action="#" method="post" class="rightside-form">
              <input type="email" name="email" placeholder="Enter your email">
              <button class="btn" type="submit">Subscribe</button>
          </form>
      </div>
    </div>
  </div>
  </div>
      <div class="container pt-5">
        
          <div class="d-grid grid-col-4 footer-top-29">
              <div class="footer-list-29 footer-1">
                  <h6 class="footer-title-29">About Us</h6>
                  <ul>
                     <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae</p>
                  </ul>
                  <div class="main-social-footer-29">
                    <h6 class="footer-title-29">Social Links</h6>
                      <a href="#facebook" class="facebook"><span class="fa fa-facebook"></span></a>
                      <a href="#twitter" class="twitter"><span class="fa fa-twitter"></span></a>
                      <a href="#instagram" class="instagram"><span class="fa fa-instagram"></span></a>
                      <a href="#google-plus" class="google-plus"><span class="fa fa-google-plus"></span></a>
                      <a href="#linkedin" class="linkedin"><span class="fa fa-linkedin"></span></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-2">
                  <ul>
                      <h6 class="footer-title-29">Useful Links</h6>
                      <li><a href="services.php">Management</a></li>
                      <li><a href="services.php">Reporting</a></li>
                      <li><a href="services.php">Tracking</a></li>
                      <li><a href="services.php">All Users</a></li>
                      <li><a href="contact.php">Support</a></li>
                  </ul>
              </div>
              <div class="footer-list-29 footer-3">
                  <div class="properties">
                      <h6 class="footer-title-29">Featured Properties</h6>
                      <a href="#"><img src="assets/images/g7.jpg" class="img-responsive" alt=""><p>We Are Leading International Consultiing Agency</p></a>
                      <a href="#"><img src="assets/images/g8.jpg" class="img-responsive" alt=""><p>Digital Marketing Agency all the foundational tools</p></a>
                      <a href="#"><img src="assets/images/g9.jpg" class="img-responsive" alt=""><p>Doloremque velit sapien labore eius itna</p></a>
                  </div>
              </div>
              <div class="footer-list-29 footer-4">
                  <ul>
                      <h6 class="footer-title-29">Quick Links</h6>
                      <li><a href="index.php">Home</a></li>
                      <li><a href="about.php">About</a></li>
                      <li><a href="services.php">Services</a></li>
                      <li><a href="#"> Blog</a></li>
                      <li><a href="contact.php">Contact</a></li>
                  </ul>
              </div>
          </div>
          <div class="bottom-copies text-center">
              <p class="copy-footer-29">© 2020 Estate Agent. All rights reserved | Designed by <a href="https://pomonart.com">pomonart</a></p>
               
          </div>
      </div>
  </div>
   <!-- move top -->
  <button onclick="topFunction()" id="movetop" title="Go to top">
              <span class="fa fa-angle-up"></span>
                 </button>
                 <script>
                     // When the user scrolls down 20px from the top of the document, show the button
                     window.onscroll = function () {
                         scrollFunction()
                     };
              
                     function scrollFunction() {
                         if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                             document.getElementById("movetop").style.display = "block";
                         } else {
                             document.getElementById("movetop").style.display = "none";
                         }
                     }
              
                     // When the user clicks on the button, scroll to the top of the document
                     function topFunction() {
                         document.body.scrollTop = 0;
                         document.documentElement.scrollTop = 0;
                     }
                 </script>
                 <!-- /move top -->
</section>
<!-- // grids block 5 -->
<script src="assets/js/jquery-3.3.1.min.js"></script>
<!-- //footer-28 block -->
</section>

<script>

var countries = ["Afghanistan","Albania","Algeria","Andorra","Angola"];                
    $(function () {

      autocomplete(document.querySelector(".cities"), countries);

      $('.navbar-toggler').click(function () {
        $('body').toggleClass('noscroll');
      })
    });


    function autocomplete(inp, arr) {
  /*the autocomplete function takes two arguments,
  the text field element and an array of possible autocompleted values:*/
  var currentFocus;
  /*execute a function when someone writes in the text field:*/
  inp.addEventListener("input", function(e) {
      var a, b, i, val = this.value;
      /*close any already open lists of autocompleted values*/
      closeAllLists();
      if (!val) { return false;}
      currentFocus = -1;
      /*create a DIV element that will contain the items (values):*/
      a = document.createElement("DIV");
      a.setAttribute("id", this.id + "autocomplete-list");
      a.setAttribute("class", "autocomplete-items");
      /*append the DIV element as a child of the autocomplete container:*/
      this.parentNode.appendChild(a);
      /*for each item in the array...*/
      for (i = 0; i < arr.length; i++) {
        /*check if the item starts with the same letters as the text field value:*/
        if (arr[i].substr(0, val.length).toUpperCase() == val.toUpperCase()) {
          /*create a DIV element for each matching element:*/
          b = document.createElement("DIV");
          /*make the matching letters bold:*/
          b.innerHTML = "<strong>" + arr[i].substr(0, val.length) + "</strong>";
          b.innerHTML += arr[i].substr(val.length);
          /*insert a input field that will hold the current array item's value:*/
          b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
          /*execute a function when someone clicks on the item value (DIV element):*/
              b.addEventListener("click", function(e) {
              /*insert the value for the autocomplete text field:*/
              inp.value = this.getElementsByTagName("input")[0].value;
              /*close the list of autocompleted values,
              (or any other open lists of autocompleted values:*/
              closeAllLists();
          });
          a.appendChild(b);
        }
      }
  });
  /*execute a function presses a key on the keyboard:*/
  inp.addEventListener("keydown", function(e) {
      var x = document.getElementById(this.id + "autocomplete-list");
      if (x) x = x.getElementsByTagName("div");
      if (e.keyCode == 40) {
        /*If the arrow DOWN key is pressed,
        increase the currentFocus variable:*/
        currentFocus++;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 38) { //up
        /*If the arrow UP key is pressed,
        decrease the currentFocus variable:*/
        currentFocus--;
        /*and and make the current item more visible:*/
        addActive(x);
      } else if (e.keyCode == 13) {
        /*If the ENTER key is pressed, prevent the form from being submitted,*/
        e.preventDefault();
        if (currentFocus > -1) {
          /*and simulate a click on the "active" item:*/
          if (x) x[currentFocus].click();
        }
      }
  });
  function addActive(x) {
    /*a function to classify an item as "active":*/
    if (!x) return false;
    /*start by removing the "active" class on all items:*/
    removeActive(x);
    if (currentFocus >= x.length) currentFocus = 0;
    if (currentFocus < 0) currentFocus = (x.length - 1);
    /*add class "autocomplete-active":*/
    x[currentFocus].classList.add("autocomplete-active");
  }
  function removeActive(x) {
    /*a function to remove the "active" class from all autocomplete items:*/
    for (var i = 0; i < x.length; i++) {
      x[i].classList.remove("autocomplete-active");
    }
  }
  function closeAllLists(elmnt) {
    /*close all autocomplete lists in the document,
    except the one passed as an argument:*/
    var x = document.getElementsByClassName("autocomplete-items");
    for (var i = 0; i < x.length; i++) {
      if (elmnt != x[i] && elmnt != inp) {
      x[i].parentNode.removeChild(x[i]);
    }
  }
}
/*execute a function when someone clicks in the document:*/
document.addEventListener("click", function (e) {
    closeAllLists(e.target);
});
} 

  </script>
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
  </script>
  
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
  </script>

<!-- Smooth scrolling -->


</body>

</html>
<!-- // grids block 5 -->
