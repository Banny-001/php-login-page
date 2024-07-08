<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login page </title>
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" 
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
     <?php
      
       $name_error=" ";
      $password_error =" ";
      $email_error =" ";

      if($_SERVER["REQUEST_METHOD"]=="POST"){

       $username =format_text($_POST["username"]);
       $password = format_text( $_POST["password"]);
       $email = format_text( $_POST["email"]);
       
       $Response=Login($_POST);
    
       if($_POST["remember"]=='1' || $_POST["remember"]=='on')
                    {
                    $hour = time() + 3600 * 24 * 30;
                    setcookie('email', $username, $hour);
                    setcookie('password', $password, $hour);
                    }
                    else{
                        if(isset($_COOKIE["email"])) {

                        setcookie ("email","");

                    }

                    if(isset($_COOKIE["password"])) {

                        setcookie ("password","");

                    }

                    }
    }
    
   function format_text($text){
       
     $text=htmlspecialchars($text);
      $text=trim($text);
      $text=stripsplashes($text);
     
    
     return $text;
    } 

      
    ?>
     <div class="row justify-content-center mt-4">
      <div class="col-xs-12 col-sm-12 col-md-12 col-xl-4 col-lg-4">
      <div class="col-md-4">
     <form method="POST "action="pdo.php" >
      <h2 class="card-title text-center mb-3"> Login</h2>
      <div class="form-group">
        <label> Username:</label><br>
        <input type="username" name="username" class="form-control" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" reqiured>

      </div>

      <div class="form-group">
				<label>Email:</label><br>
				<input type="email" name="email" class="form-control"  value="<?php if(isset($_COOKIE["email"])) { echo $_COOKIE["email"]; } ?>" required><br>
			</div>
			<div class="form-group">
				<label>Password:</label><br>
				<input type="password" name="password" class="form-control" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required><br>
			</div>
			<div class="form-group">
			<label for="login-remember"><input type="checkbox" id="remember" name="remember" <?php  if(isset($_COOKIE["user_email"])) { ?> checked <?php } ?>>Remember Me</label>
			
		</div>
		<input type="submit" name="login" value="Login" class="btn btn-success btn-block">
			
     </form>
  </div>
  </div>
  </div>
</body>
</html>
<?php include_once('pdo.php')?>
<style>
  body{
  
    justify content:center;
    align-items:center;
    height: 50vh;
    background-color:#f5f5f5;
    padding:2rem;
  }
  /* /* form{
    padding:rem;
    background-color :#0f9d58;
    border-radius:2rem;
    width:350px;
   height:100%;
    margin-left:20%;

  } */
  .form-group{
    
   
    margin-right:10px;
    height:100%;
    
  }
  .form-control{
   
  } */
  
</style>