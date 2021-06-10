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
    input[type=textlogin], input[type=passwordlogin] {
      width: 100%;
      padding: 14px 20px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      float:none;
    }
    
    
    
    
    
   
    
    
    
    
    
    /* Extra styles for the cancel button */
.cancelbtnlogin {
      width: 100%;
      padding: 10px 0px;
      background-color: #f44336;
float:none;
position:relative;
    }
    
    /* Center the image and position the close button */
.imgcontainerlogin {
      text-align: center;
      margin: 24px 0 12px 0;
      position: relative;
    }
    
img.avatar {
      width: 40%;
      border-radius: 50%;
    }
    
.containerlogin {
      padding: 16px;
    }
    
span.pswlogin {
      float: right;
      padding-top: 16px;
    }
button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 0px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
    }
    
button:hover {
      opacity: 0.8;
    }
    
    /* The Modal (background) */
.modallogin {
      display: block; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1; /* Sit on top */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.9); /* Black w/ opacity */
      padding-top: 60px;
      
    }
    
    /* Modal Content/Box */
.modallogin-content {
      background-color: #fefefe;
      margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
      border: 1px solid #888;
      width: 80%; /* Could be more or less, depending on screen size */
    }
    
    /* The Close Button (x) */
.closelogin {
      position: absolute;
      right: 25px;
      top: 0;
      color: #000;
      font-size: 35px;
      font-weight: bold;
    }
    
.closelogin:hover,.closelogin:focus {
      color: red;
      cursor: pointer;
    }
    
    /* Add Zoom Animation */
.animate {
      -webkit-animation: animatezoom 0.6s;
      animation: animatezoom 0.6s
    }
    
@-webkit-keyframes animatezoom {
      from {-webkit-transform: scale(0)} 
      to {-webkit-transform: scale(1)}
    }
      
@keyframes animatezoom {
      from {transform: scale(0)} 
      to {transform: scale(1)}
    }
    
    /* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 500px) {
      span.pswlogin {
         display: block;
         float: none;
      }


    }
    


</style>
</head>
<body>

 
	 
 



<div  class="modallogin animate">
  
  <form class="modallogin-content " action="login.php" method="post">
  
<div class="imgcontainerlogin">

      
      <img src="images\av1.png" alt="Avatar" class="avatar">
    </div>
     <?php include('errors.php'); ?>  
    <div class="containerlogin">
      <label for="username"><b>Username</b></label>
      <input   type="textlogin" placeholder="Enter Username" name="username" required>

      <label for="password"><b>Password</b></label>
      <input   type="passwordlogin" placeholder="Enter Password" name="password" required>
        
      <button  type="submit" name="login_user">Login</button>

 	<br><button style="background-color: #f44336;"><a href="homepage.php"  class="cancelbtnlogin" style="width:100%;padding:10px 0px;">Cancel</a></button>
    </div>

         
<div class="containerlogin" style="background-color:#f1f1f1; ">
      <p>
  		Not yet a member? <a href="register.php">Sign up</a>
  	</p>

      
    </div>
  </form>
</div>





</body>
</html>