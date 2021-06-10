<?php include('server.php') ?>
<!DOCTYPE html>
<html>
<head>
  <style>
.error {
  width: 92%; 
  margin: 0px auto; 
  padding: 10px; 
  border: 1px solid #a94442; 
  color: #a94442; 
  background: #f2dede; 
  border-radius: 5px; 
  text-align: left;
}

/* Full-width input fields */
input[type=textsign], input[type=passwordsign], input[type=phone] {
  width: 100%;
  padding: 15px 0px;
  margin: 8px 0 0px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
float:none;
}

/* Add a background color when the inputs get focus */
input[type=textsign]:focus, input[type=passwordsign]:focus {
  background-color: #ddd;
  outline: none;
}


/* Extra styles for the cancel button */
.cancelbtnsign {
  padding: 14px 0px;
  background-color: #f44336;
  text-align:center;
text-decoration:none;
  color: white;
  
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  height:20px;
  opacity: 0.9;
}
.signupbtnsign {
background-color: #4CAF50;
  color: white;
  padding: 14px 0px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
height:48px;
}
/* Float cancel and signup buttons and add an equal width */
.cancelbtnsign, .signupbtnsign {
  float: left;
  width: 50%;
}
.cancelbtnsign:hover, .signupbtnsign:hover{
opacity:1;
}
/* Add padding to container elements */
.containersign {
  padding: 16px;
}

/* The Modal (background) */
.modalsign {
  display: block; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: #474e5d;
  padding-top: 50px;
}

/* Modal Content/Box */
.modal-contentsign {position:relative;
  background-color: #fefefe;
  margin: 1% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 90%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
 
/* The Close Button (x) */
.closesign {
  position: absolute;
  right: 10px;
  top: 10px;
  font-size: 40px;
  font-weight: bold;
  color: #000;
}

.closesign:hover,
.closesign:focus {
  color: #f44336;
  cursor: pointer;
}

/* Clear floats */
.clearfixsign::after {
  content: "";
  clear: both;
  display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 500px) {
  .cancelbtnsign, .signupbtnsign {
     width: 100%;
  }
}



</style>
</head>
<body>



<div  class="modalsign animate">
   <form class="modal-contentsign" action="register.php" method="post">
    <div class="containersign">
 
      <h1>Sign Up</h1>

      <p>Please fill in this form to create an account.</p>
      <hr>
      <label for="username"><b>Username</b></label>
      <input type="textsign" placeholder="Enter Name" name="username" value="<?php echo $username; ?>" required>

      
     
      <label for="email"><b>Email</b></label>
      <input type="textsign" placeholder="Enter Email" name="email" value="<?php echo $email; ?>" required>

      <label for="password_1"><b>Password</b></label>
      <input type="passwordsign" placeholder="Enter Password" name="password_1" required>

      <label for="password_2"><b>Confirm Password</b></label>
      <input type="passwordsign" placeholder="Confirm Password" name="password_2" required>

   

      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
	<?php include('errors.php'); ?>  
      <div class="clearfixsign">
        <a href="homepage.php" class=" cancelbtnsign ">Cancel</a>
        <button type="submit" class="signupbtnsign" name="reg_user">Sign Up</button>
      </div>
<p>
  		Already a member? <a href="login.php">Sign in</a>
  	</p>
    </div>
  </form>
</div>




</body>
</html>