<?php
$con=mysqli_connect('localhost','root','','rms');
if (!$con) {
  die("Connection failed");
}
else{


	$sql="SELECT*FROM result";
			
	
	$res=mysqli_query($con,$sql);
	$num_rows=mysqli_num_rows($res);
	echo " 
    <table border='1' cellspacing='0'  width='90%'>
        <thead>
	        <tr>
	            <th>#</th>
	            <th>Student Name</th>
	            <th>Roll Id</th>
	            <th>Fathers Name</th>
	            <th>Contact</th>
	            <th>Date-of-Birth</th>
	            <th>MATHS</th>
	            <th>ENGLISH</th>
	            <th>PHYSICS</th>
	            <th>CHEMISTRY</th>
	            <th>CS</th>
	        </tr>
        </thead>";

	if($num_rows>0)
	{
		while($row=mysqli_fetch_array($res))
		{
			echo'<tbody>';
				echo'<tr>';

					echo'<td>';
					echo $row['id'];
					echo '</td>';

					echo'<td>';
					echo $row['name'];
					echo '</td>';

					echo'<td>';
					echo $row['roll'];
					echo '</td>';

					echo'<td>';
					echo $row['fname'];
					echo '</td>';

					echo'<td>';
					echo $row['contact'];
					echo '</td>';

					echo'<td>';
					echo $row['dob'];
					echo '</td>';


					echo'<td>';
					echo $row['maths'];
					echo '</td>';

					echo'<td>';
					echo $row['english'];
					echo '</td>';

					echo'<td>';
					echo $row['phy'];
					echo '</td>';

					echo'<td>';
					echo $row['chem'];
					echo '</td>';

					echo'<td>';
					echo $row['cs'];
					echo '</td>';
				echo'</tr>';
				
			echo'</tbody>';
			
		}
	}
	else
	{
		echo"NO DATA FOUND";
	}

}
?>



