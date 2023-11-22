<html>

	<head>
		<meta name="viewport" content="width-device-width, initial-scale=1.0">
		<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
		<title>CRYSTAL/About us</title>
		<link rel="stylesheet" href="styles/style.css">
	</head>
	
	<body id="body_color">
		
		<div class="wrap_login">
			<div class="wrapper_lin">
				<span class="icon-close"><ion-icon name="close-outline"></ion-icon></span>
				
				<div class="form-box login">
					<h2>Login</h2>
							<?php if (isset($_GET['error'])) { ?>
								<p class="error"><?php echo $_GET['error']; ?></p>
							<?php } ?>
					<form action="login.php">
						<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
							<input type="email" name="email" required>
							<label>Email</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
							<input type="password" name="password" required>
							<label>Password</label>
						</div>
						<div class="remember-forgot">
							<label><input type="checkbox">Remember me</label>
							<a href="#">Forgot Password?</a>
						</div>
						<button type="submit" class="btn">Login</button>
						<div class="login-register">
							<p>Don't have an account? <a href="#" class="register-link">Register</a></p>
						</div>
					</form>
				</div>
				
				<div class="form-box register">
					<h2>Registation</h2>
                    <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <?php if (isset($_GET['success'])) { ?>
                        <p class="success"><?php echo $_GET['success']; ?></p>
                    <?php } ?>

					<form  metod="post" action="signup-check.php">
						<div class="input-box">
							<span class="icon"><ion-icon name="person-circle-outline"></ion-icon></span>
							<input type="text" name="uname" required>
							<label>Username</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="mail"></ion-icon></span>
							<input type="email" name="Email" required>
							<label>Email</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-open"></ion-icon></span>
							<input type="password" name="password" required>
							<label>Create a password</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
							<input type="password" name="re_password" required>
							<label>Confirm password</label>
						</div>
						<div class="terms-conditions">
							<label><input type="checkbox" required>I agree with the</label>
							<a href="#">Terms of Use & Privacy Policy</a>
						</div>
						<button type="submit" class="btn-next" name="submit">Next</button>
						<div class="login-register">
							<p>Already have an account? <a href="#" class="login-link">Login</a></p>
						</div>
					</form>
				</div>
				
				<div class="form-box details">
					<h2>Welcome</h2>
					<form action="#">
						<div class="input-box">
							<span class="icon"><ion-icon name="person"></ion-icon></span>
							<input type="text" required>
							<label>Full name</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="home"></ion-icon></span>
							<input type="text" required>
							<label>Address(line1)</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="home"></ion-icon></span>
							<input type="text" required>
							<label>Address(line2)</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="business"></ion-icon></span>
							<input type="text" required>
							<label>City</label>
						</div>
						<div class="input-box">
							<span class="icon"><ion-icon name="call"></ion-icon></span>
							<input type="text" required>
							<label>Phone number</label>
						</div>
						<div class="btn-box">
							<a href="#" class="btn-back">Back</a>
							<button type="submit" class="btn-register">Register</button>
						</div>
						<div class="login-register">
							<p>I will fill this later. <a href="#" class="login-link">Skip & Register</a></p>
						</div>
					</form>
				</div>
			</div>
		</div>
		


	
		<div class="wrapper" id="wrap">
			<section class="parallax">
				<image src="images/bg1.png" id="bg1">
				<image src="images/up2.png" id="up2">
				<image src="images/up6.png" id="up6">
				<image src="images/up5.png" id="up5">
				<image src="images/up4.png" id="up4">
				<image src="images/up3.png" id="up3">
				<image src="images/log1.svg" class="log1" id="log1">
				<image src="images/up1.png" id="up1">
			</section>
		</div>

		
		<div class="wrap_header" id="wrap_header">
			<header id="navbar">
				<div class="navbar">
					<div class="logo"><a href="#"><img src="images/logo full1.svg"></a></div>
					<ul class="links">
						<li><a href="home.php">Home</a></li>
						<li><a href="wash.php">Order now</a></li>
						<li class="list-active"><a href="About us.html">About</a></li>
						<li><a href="contact-view.php">Contact us</a></li>
					</ul>
					<div class="box">
						<div class="cart-count">0</div>
						<ion-icon name="cart"  id="cart-icon" ></ion-icon>
					</div> 
	  
					<div class="cart">
						<div class="cart-title">Cart Items</div>
						<div class="cart-content"></div>
							
						<div class="total">
							<div class="total-title">Total</div>
							<div class="total-price">Rs.0</div>
						</div>
					
						<button class="btn-buy">Place Order</button>
				  
						<ion-icon name="close" id="cart-close"></ion-icon>
					</div>
					<a href="#" class="profile"><ion-icon name="person-circle-outline"></ion-icon></a>
					<button class="action-btn">Login</button>
					<div class="toggle_btn">
						<i class="fa-solid fa-bars"></i>
					</div>
		
					<div class="dropdown_menu">
						<li><a href="#">Home</a></li>
						<li><a href="wash.php">Order now</a></li>
						<li><a href="About us.html">About</a></li>
						<li><a href="contact-view">Contact us</a></li>
						<li><a href="#" class="action-btn">Login</a></li>
					</div>
		
				</div>
			</header>
		</div>

		<div class="heading">
			<h1>About</h1>
			<p>
			We are Crystal Laundry and Dry Cleaning Services.<br>
			We provide you the best cleaning services as per your requirements.<br>
			Founded in 2023 , our aim is to assist our customers through their busy lifestyle by providing them one of the most essential services.<br>
			This saves our customers’ time and energy spent on cleaning chores.<br>
			We were awarded 10 consecutive years as the best for providing our customers with the best services.<br>
			We have many services such as washing,ironing and dry cleaning.<br>
			By registering to our website you are given the opportunity to select the service you need and place an order.<br>
			To place an order all you have to do is select the button and make the payment.We will come to your doorstep to pick up and to deliver the clothes.<br>
			Our employees are well trained and skilled.<br>
			Therefore,we can ensure that clothes will be carefully cleaned, folded and packaged and returned to you with the best quality.<br>
			</p>
		</div>	
		
		
		<!------------------------------------------------------------------------>
		
		<div class="responsive-container-block bigContainer">
			<div class="responsive-container-block Container">
			  <div class="responsive-container-block leftSide">
				<p class="text-blk heading">
				  Meet Our Creative Team
				</p>
				<p class="text-blk subHeading">
				A perfect blend of creativity and technical wizardry.	
			The best people formula for great website.			</p>
			  </div>
			  <div class="responsive-container-block rightSide">
				<img class="number1img" src="images1/team.jpg">
				<img class="number2img" src="images1/service1.jpg">
				<img class="number3img" src="images1/wash.jpeg">
				<img class="number5img" src="https://workik-widget-assets.s3.amazonaws.com/widget-assets/images/Customer supports.png">
				<img class="number4img" src="images1/award.jpg">
				<img class="number7img" src="images1/machine.jpeg">
				<img class="number6img" src="images1/hang.jpg">
			  </div>
			</div>
		  </div>
		
		
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>
		<br>



		<footer class="footer-distributed">

			<div class="footer-left">
		
			  <div class="logo2">
				<img src="images/logo full1.svg" href="home.html">
			</div>
			  
			  
			</div>
		
			<div class="footer-center">
		
			  <div>
				<i class="fa fa-map-marker"></i>
				<p><span>NO.22 lake side road</span> Wales Park,Kandy</p>
			  </div>
		
			  <div>
				<i class="fa fa-phone"></i>
				<p>+94 815 696 523</p>
			  </div>
		
			  <div>
				<i class="fa fa-envelope"></i>
				<p><a href="mailto:support@company.com">support@company.com</a></p>
			  </div>
		
			</div>
		
			<div class="footer-right">
		
			  <p class="footer-company-about">
				<span>About the company</span>
				We provide you the best cleaning services as per your requirements.We have many services such as washing,ironing and dry cleaning.
			  </p>
		
			</div>
		
			<hr class="footer__divider">
		
			<div class="footer__bottom">
			  <span class="copyright">&copy; 2023 Company. All rights reserved.</span>
			  <ul class="footer__list2">
				  <li class="footer__list-item">
					  <a href="#" class="footer__list-link">
						  <i class="ri-facebook-circle-line"></i>
					  </a>
				  </li>
				  <li class="footer__list-item">
					  <a href="#" class="footer__list-link">
						  <i class="ri-instagram-line"></i>
					  </a>
				  </li>
				  <li class="footer__list-item">
					  <a href="#" class="footer__list-link">
						  <i class="ri-twitter-line"></i>
					  </a>
				  </li>
				  <li class="footer__list-item">
					  <a href="#" class="footer__list-link">
						  <i class="ri-linkedin-line"></i>
					  </a>
				  </li>
			  </ul>
		  </div>
		
		  </footer>
		
	
		<script src="js/script.js"></script>
		<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
		<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
		
	</body>

</html>