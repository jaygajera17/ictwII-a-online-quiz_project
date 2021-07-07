<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//read from database
			$query = "select * from users where user_name = '$user_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
                                setcookie('emailcookie',$user_name,time()+86400);
                                               setcookie('passwordcookie',$password,time()+86400);
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{
                                              
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}




?>


<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
    <div class="bg-img">
      <div class="content">
        <header>Login Form</header>
        <form method ="post">
          <div class="field">
            <span class="fa fa-user"></span>
            <input type="email" placeholder="enter email" name="user_name"  value="<?php if(isset($_COOKIE['emailcookie'])){ echo $_COOKIE['emailcookie'] ;}?>" required>
          </div>
          <div class="field space">
            <span class="fa fa-lock"></span>
            <input type="password" class="pass-key" placeholder="Password" name = "password" value="<?php if(isset($_COOKIE['passwordcookie'])){ echo $_COOKIE['passwordcookie'] ;}?>" required> 
             
            <span class="show">SHOW</span>
          </div>

          <div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
          <div class="field">
            <input type="submit" value="LOGIN">
          </div>
 
            <div class="container">        <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
</div>
        </form>
        <div class="signup">Don't have account?
          <a href="signup.php">Signup Now</a>
        </div>
      </div>
    </div>
<style>
.container {
  padding: 16px;
color: white;
}
</style>

    <script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>


  </body>
</html>
