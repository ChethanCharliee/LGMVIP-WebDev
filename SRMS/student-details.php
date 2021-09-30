<!DOCTYPE html>
<html>
<head>
	<title>Result Input</title>
	<link rel="stylesheet" type="text/css" href="css/student-details.css">
</head>
<body>
<h1 style="color:blue;" align="center">Enter Student's Details</h1>
<table style="font-size: 20px; color: blue" >
	<form action="#" method="POST" enctype="multipart/form-data"  >
		<tr>
			<td ><img src="https://img.icons8.com/nolan/64/student-male.png"/></td>
			<td><input class="input-box" type="text" name="std-name" placeholder="Student Name"></td>
		</tr>
		<tr>
			<td ><img src="https://img.icons8.com/nolan/64/pencil.png"/></td>
			<td><input class="input-box" type="text" name="rl" placeholder="Roll Number"></td>
		</tr>
		<tr>
			<td ><img src="https://img.icons8.com/nolan/64/father--v1.png"/></td>
			<td><input class="input-box" type="text" name="f-name" placeholder="Father's Name"></td>
		</tr>
		<tr>
			<td ><img src="https://img.icons8.com/nolan/64/pay-date.png"/></td>
			<td><input class="input-box" type="date" name="dob" placeholder="DD-MM-YYYY"></td>
		</tr>
		<tr>
			<td ><img src="https://img.icons8.com/nolan/64/phone.png"/></td>
			<td><input class="input-box" type="text" name="cnt-no" placeholder="Contact Number"></td>
		</tr>
		<tr >
			<td colspan="2"><br><br>-:Marks Details:-</td>
		</tr>
		<tr>
			<td >Marks in Maths:</td>
			<td><input class="input-box" type="number" name="maths"></td>

			<td >Marks in English:</td>
			<td><input class="input-box" type="number" name="eng"></td>
		</tr>
		<tr>
			<td >Marks in Physics:</td>
			<td><input class="input-box" type="number" name="phy"></td>
			<td >Marks in Chemistry:</td>
			<td><input class="input-box" type="number" name="chem"></td>
		</tr>
		<tr>
			<td >Marks in Computer science:</td>
			<td><input class="input-box" type="number" name="cs"></td>
		</tr>
		
		<tr align="right" >
			<td colspan="2"><button class="button" type="submit" name="Submit" style="vertical-align:middle">
                <span>Submit </span>
            </button></td>
		</tr>
	</form>
</table>
</body>
</html>
<?php

if (isset($_POST['Submit'])) {

	$con=mysqli_connect('localhost','root','','rms');
	if (!$con) {
	   die("Connection failed");
	}
	else{
		//student details
		$std_name = $_POST['std-name'];
		$std_roll = $_POST['rl'];
		$std_fname = $_POST['f-name'];
		$std_dob = $_POST['dob'];
		$std_cont = $_POST['cnt-no'];

		$maths = $_POST['maths'];
		$eng = $_POST['eng'];
		$phy = $_POST['phy'];
		$chem = $_POST['chem'];
		$cs = $_POST['cs'];

		$sql = "INSERT INTO `result`( `name`, `roll`, `fname`, `dob`, `contact`, `maths`, `english`, `phy`, `chem`, `cs`) VALUES ('$std_name','$std_roll','$std_fname','$std_dob','$std_cont','$maths','$eng','$phy','$chem','$cs')";


		$chk = mysqli_query($con , $sql);
		if($chk){
			echo "DATA INSERTED";
			echo "<script>alert('DATA INSERTED');</script>";

		}
		else
			echo "<script>alert('INSERTION FAILED');</script>";
			
			
	}
}
?>
