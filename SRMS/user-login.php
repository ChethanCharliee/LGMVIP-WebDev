
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Student Result Management System</title>
    <link rel="stylesheet" href="css/user-login.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

  </head>
  <body>
    <header>
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-dark bg-dark">
            <span class="navbar-text">Student Result Management System</span>

        </nav>

        <div class="container">

          <div class="jumbotron" style="background-color:#f8f9fa;">
            <h1 style="color:#343a40">Admin Login</h1> <br>
            <form  action="#" method="POST"> <br><br>
              <input type="email" class="form-control" placeholder="Usename" name="Username" value="">
              <br>
              <input type="password" class="form-control" placeholder="Password" name="Pass" value="">
              <br><br>

              <div class="loginbutton">
                <button type="submit" class="btn btn-primary btn-lg" name="login">Login</button>

              </div>
              </form>

              </div>


          </div>
        </div>

  </header>
  <?php
if(isset($_POST['login'])) {
	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	  die("Connection failed");
	}
	else{
		$uname = $_POST['Username'];
		$pass = $_POST['Pass'];
		$sql = "SELECT username, password FROM admin ";
		$result = mysqli_query($con,$sql);
		$num_row = mysqli_num_rows($result);

		if($num_row > 0){
			while($row = mysqli_fetch_array($result)){
				if (empty($uname) || empty($pass)) {
					echo '<script>alert("please fill all the fields")</script>';
				}	
				else if($uname == $row["username"] && $pass == $row["password"]){
					$_SESSION['uname']=$uname;
					header('location:adminpanel.php');
			 		// echo "<script> window.location.assign('adminpanel.php'); </script>";
				}
				else 
					echo '<script>alert("Wrong Password or UserName")</script>';
			}
		}

		
	}
}
?>
  </body>

</html>
