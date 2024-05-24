<?php session_start(); ?>
<?php 
            if ((isset($_SESSION['user_logged_in']) && $_SESSION['user_logged_in'] == true)) {
                echo "
				\"
				<nav class=\"navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top\">
				<div class=\"container-fluid\">
				  <a class=\"navbar-brand me-5 fw-bold fs-3 h-font\" href=\"index.php\">STAR HOTEL</a>
				  <button class=\"navbar-toggler shadow-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
					<span class=\"navbar-toggler-icon\"></span>
				  </button>
				  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
					<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
					  <li class=\"nav-item\">
						<a class=\"nav-link \" aria-current=\"page\" href=\"index.php\">Home  </a>
					  </li>
					  <li class=\"nav-item\">
						<a class=\"nav-link me-2\" href=\"facilities.php\">Facilities</a>
					  </li>
					  <li class=\"nav-item\">
						<a class=\"nav-link me-2\" href=\"booking.php\">booking</a>
					  </li>
					  <li class=\"nav-item\">
						<a class=\"nav-link me-2\" href=\"orders.php\">Orders</a>
					  </li>
					  <li class=\"nav-item\">
					  <a class=\"nav-link me-2\" href=\"contact.php\">Contact Us</a>
					</li>
					<li class=\"nav-item\">
					  <a class=\"nav-link me-2\" href=\"about.php\">About</a>
					</li>
					</ul>
						<div class='user btn btn-outline-dark shadow-none me-lg-3 me-2'> 
							$_SESSION[username] - <a href='logout.php'>LOGOUT</a>
						</div>
				  </div>
				</div>
			  </nav>\"
                    ";
            } else {
          
                    if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] == true) {
                        echo "
                        \"
						<nav class=\"navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top\">
						<div class=\"container-fluid\">
						  <a class=\"navbar-brand me-5 fw-bold fs-3 h-font\" href=\"index.php\">STAR HOTEL</a>
						  <button class=\"navbar-toggler shadow-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
							<span class=\"navbar-toggler-icon\"></span>
						  </button>
						  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
							<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
							  <li class=\"nav-item\">
								<a class=\"nav-link active\" aria-current=\"page\" href=\"admin.php\">about</a>
							  </li>  
							</ul>
							<div class='user btn btn-outline-dark shadow-none me-lg-3 me-2'> 
							$_SESSION[username] - <a href='logout.php'>LOGOUT</a>
						</div>
						  </div>
						</div>
					  </nav>\"";
                    } else {
                        echo "\"
						<nav class=\"navbar navbar-expand-lg bg-light px-lg-3 py-lg-2 shadow-sm sticky-top\">
						<div class=\"container-fluid\">
						  <a class=\"navbar-brand me-5 fw-bold fs-3 h-font\" href=\"index.php\">STAR HOTEL</a>
						  <button class=\"navbar-toggler shadow-none\" type=\"button\" data-bs-toggle=\"collapse\" data-bs-target=\"#navbarSupportedContent\" aria-controls=\"navbarSupportedContent\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
							<span class=\"navbar-toggler-icon\"></span>
						  </button>
						  <div class=\"collapse navbar-collapse\" id=\"navbarSupportedContent\">
							<ul class=\"navbar-nav me-auto mb-2 mb-lg-0\">
							  <li class=\"nav-item\">
								<a class=\"nav-link active\" aria-current=\"page\" href=\"index.php\">Home</a>
							  </li>
							  <li class=\"nav-item\">
								<a class=\"nav-link me-2\" href=\"facilities.php\">Facilities</a>
							  </li>
							  <li class=\"nav-item\">
								<a class=\"nav-link me-2\" href=\"contact.php\">Contact Us</a>
							  </li>
							  <li class=\"nav-item\">
								<a class=\"nav-link me-2\" href=\"about.php\">About</a>
							  </li>
							  
							</ul>
							<div class=\"d-flex\" role=\"search\">
								<button type=\"button\" class=\"btn btn-outline-dark shadow-none me-lg-3 me-2\" data-bs-toggle=\"modal\" data-bs-target=\"#loginModel\">Login	</button>
								<button type=\"button\" class=\"btn btn-outline-dark shadow-none\" data-bs-toggle=\"modal\" data-bs-target=\"#registerModel\">Register	</button>
							</div>
						  </div>
						</div>
					  </nav>\"";
                    }
                }
            
        ?>






<div class="modal fade" id="loginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    	<form method="POST" action="login_register.php">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-circle fs-3 me-2">User Login</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
        	<div class="mb-3">
    			<label class="form-label">E-mail or Username</label>
    			<input type="email" class="form-control shadow-none" placeholder="E-mail or Username" name="email_username" required>
  			  </div>
  			<div class="mb-4">
    			<label class="form-label" placeholder="Password" name="password" required>Password</label>
				<input type="password" class="form-control shadow-none"placeholder="Password" name="password" required>
  			</div>
			  <div class="text-center my-1">
    					<button type="submit" class="btn btn-dark shadow-none" name="user-login">Login</button>
    		  </div>
      		</div>
    	</form>
      
    </div>
  </div>
</div>

<div class="modal fade" id="registerModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
    	
    	<form method="POST" action="login_register.php">
    		<div class="modal-header">
        	<h5 class="modal-title d-flex align-items-center">
        	<i class="bi bi-person-lines-fill fs-3 me-2">User Registration</i>
        	</h5>
        	<button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      		</div>
      		<div class="modal-body">
      			<span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">Note: Your details must match with your ID (Aadhaar card, passport, driving license, etc.) that will be required during check-in.
    			</span>
    		<div class="container-fluid">
    			<div class="row">
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Full Name</label>
    					<input type="text" class="form-control shadow-none" placeholder="Full Name" name="fullname" required>
    				</div>
					<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Username</label>
    					<input type="text" class="form-control shadow-none" placeholder="Username" name="username" required>
    				</div>
    				<div class="col-md-6 p-0">
    					<label class="form-label">Email</label>
    					<input type="email" class="form-control shadow-none" placeholder="E-mail" name="email" required>
    				</div>
    				<div class="col-md-6 ps-0 mb-3">
    					<label class="form-label">Password</label>
    					<!-- <input type="password" class="form-control shadow-none" placeholder="Password" name="password" required> -->
						<input type="password" class="form-control shadow-none" placeholder="Password" name="password" required>
    				</div>
    				<div class="text-center my-1">
    					<button type="submit" class="btn btn-dark shadow-none" name="user_register">Register</button>
    				</div>
    			</div>
    		</div>	
        	
    	</form>
      
    </div>
  </div>
</div>
	
</div>