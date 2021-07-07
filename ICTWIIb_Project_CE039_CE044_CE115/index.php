<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);
  
?>





<!DOCTYPE html>
<html>
<head>
	<title> online quiz </title>
</head>
<body>

	




</body>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Page Title</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

/* Style the header */
html{
	scroll-behavior: smooth;
}
body {
	font-family: 'Poppins', sans-serif;
}
                                            /* header */
.wrapper {
	width: 1170px;
	margin: auto;
}
header {
	background: linear-gradient(rgba(0, 0, 0, 0.8), rgba(0, 0, 0, 0.8)), url(https://th.bing.com/th/id/OIP.J18SQ_OQHxl4HHwzX7-YjAHaHa?w=181&h=181&c=7&o=5&dpr=1.65&pid=1.7);

  height: 100vh;
	-webkit-background-size: cover;
	background-size: cover;
	background-position: center center;
	position: relative;
}
.nav-area {
	float: right;
	list-style: none;
	margin-top: 30px;
}
.nav-area li {
	display: inline-block;
}
.nav-area li a {
	color: #fff;
	text-decoration: none;
	padding: 5px 20px;
	font-family: poppins;
	font-size: 16px;
	text-transform: uppercase;
}
.nav-area li a:hover {
	background: #fff;
	color: #333;
}
.logo {
	float: left;
	
}
.logo img {
	width: 15%;
	height: 15%;
	padding: 15px 0;
	
}
.welcome-text {
	position: absolute;
	width: 600px;
	height: 300px;
	margin: 20% 30%;
	text-align: center;
}
.welcome-text h1 {
	text-align: center;
	color: #fff;
	text-transform: uppercase;
	font-size: 60px;
}
.welcome-text h1 span {
	color: #00fecb;
}
.welcome-text a {
	border: 1px solid #fff;
	padding: 10px 25px;
	text-decoration: none;
	text-transform: uppercase;
	font-size: 14px;
	margin-top: 20px;
	display: inline-block;
	color: #fff;
}
.welcome-text a:hover {
	background: #fff;
	color: #333;
}
.cookie-banner {
  position: fixed;
  bottom: 40px;
  left: 10%;
  right: 10%;
  width: 80%;
  padding: 5px 14px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  background-color: #eee;
  border-radius: 5px;
  box-shadow: 0 0 2px 1px rgba(0, 0, 0, 0.2);
}
.close {
  height: 20px;
  background-color: #777;
  border: none;
  color: white;
  border-radius: 2px;
  cursor: pointer;
}






</style>
</head>
<body>

<div class="header">

</div>

<div class="navbar">
  
 

<!--  <a href="start.php"> start </a>
  <a href="submit.php"> PREPARATION  </a>
  <a href="aboutus.php"> about us </a>
  <a href="logout.php" class="right"><button>LOGOUT</button></a> -->
 <body> 
        <header>
            <div class="wrapper" id="home">
                <div class="logo">


                    <img src="https://www.bing.com/th?id=OIP.oBB6_lRfNEsBqgLQbzqF7wHaIA&w=189&h=204&c=8&rs=1&qlt=90&o=6&dpr=1.65&pid=3.1&rm=2" alt="jay" height="5" width="5" 

 <mark><strong><b style='color:red  !important;'>
	Hello, <?php echo $user_data['user_name']; ?>
</b>
</strong>
 </mark>


                </div>
                       <ul class="nav-area">
                       <li><a href="#home">Home</a></li>
                       <li><a href="aboutus.php">About</a></li>
                       <li><a href="dash.php">dashboard</a></li>
                       <li><a href="logout.php">logout</a></li>
    
                     </ul>
                    </div>
                      <div class="welcome-text">
                        <h1>
        
                             qui <span>zer</span>
						</h1>
                             <a href="start.php">start quiz</a>
                    </div>

</div>
         </header>
    
    </body>
<div class=’cookie-banner’ style=<display: none’>
<p>
    By using our website, you agree to our 
    <a href=’insert-link’>cookie policy</a>
  </p>
<button class=’close’>&times;</button>
</div>
    </html>
 
</div>
</body>
</html>
