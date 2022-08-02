<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Final Step | Multistep form processing using PHP with  jQuery form validation | Mitrajit's Tech Blog</title>
<style>
span { clear:both; display:block; margin-bottom:30px; }
span a { font-weight:bold; color:#0099FF; }

.wrapperDiv {
	margin:auto;
	position:relative;
	top:0;
	bottom:0;
	left:0;
	right:0;
	width:400px;
	height:150px;
}
table {
	width:100%;
	border:1px solid #000;
	padding-bottom:10px;
}
input[type=text] {
	display:block;
}
</style>
</head>

<body>
	<!--<span>Read the full article -- <a href="http://www.mitrajit.com/2017/08/multi-step-form-processing-using-php-jquery-form-validation/" target="_blank">Multistep form processing using PHP with  jQuery form validation</a> in <a href="http://www.mitrajit.com/">Mitrajit's Tech Blog</a></span>-->

	<div class="wrapperDiv">
		<?php
		include 'db1config.php';
		if(!isset($_POST['submitBtn'])) 
		{
			header('location: form-page3.php');
		}
		else if(isset($_POST['submitBtn']))
		{
			$name=$_POST['name'];
			$gender=$_POST['gender'];
			$dob=$_POST['dob'];
			$fname=$_POST['fname'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$address=$_POST['address'];
			$city=$_POST['city'];
			$pin=$_POST['pin'];
			$prei=$_POST['prei'];
			$dept=$_POST['dept'];
			$st=$_POST['st'];
			$rs=$_POST['rs'];
			
			$a=$_POST['sn'];
			$snc=count($a);
			
			$b=$_POST['grade'];
			$gradec=count($b);
			
			
			$c=$_POST['sm'];
			$smc=count($c);
			
			$count=0;
			for($i=0,$j=0,$k=0;$i<$snc,$j<$gradec,$k<$smc;$i++,$j++,$k++)
			{
				
				$semester=$c[$k];
				$subject=$a[$i];
				$grade=$b[$j];
	  
	   $sql="insert into admission_t(Name,Father_Name,Gender,DOB,Address,City,Pincode,Mobile_Number,Email,Previous,Department,Transfer_Semester,Reason,Prev_Semester,Subject_Name,Grade) values
	   ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$city."',".$pin.",".$mobile.",'".$email."','".$prei."','".$dept."',".$st.",'".$rs."',".$semester.",'".$subject."','".$grade."')";
	   $result=mysqli_query($con,$sql);
	   $count++;
			}
			if($count>0)
			{
				echo "<div id='success'><font color='blue'><h4>Your data are successfully registered with us!..We will contact you soon... Thank You. You will receive a mail from us Shortly!</h4></font></div>";  
			}
		}
		?>
		
		<table width="500">
		  <tr>
			<th colspan="3" scope="row"><h3>Form Processing Completion </h3></th>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Name</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['name'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Gender</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['gender'];?></td>
		  </tr>
		  
		  <tr>
			<th scope="row"><div align="right">Date of Birth</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['dob'];?></td>
		  </tr>
		  
		  <tr>
			<th scope="row"><div align="right">Father's Name</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['fname'];?></td>
		  </tr>
		  
		  <tr>
			<th scope="row"><div align="right">Email</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['email'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Mobile</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['mobile'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Address</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['address'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">City</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['city'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Pincode</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['pin'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Previous Institution</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['prei'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Department of Study</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['dept'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Transferring Semester</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['st'];?></td>
		  </tr>
		  <tr>
			<th scope="row"><div align="right">Reason for Transfer</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td><?php echo $_POST['rs'];?></td>
		  </tr>
		  
		  
		  
		  <!--<tr>
			<th scope="row"><div align="right">Mark Details</div></th>
			<td><div align="center"><strong>:</strong></div></td>
			<td>
			   <table>
			    <tr>
				<th>Semester</th>
				<th>Subject Name</th>
				<th>Grade Obtained</th>
				</tr>-->
				
			<?php
			/*$a=$_POST['sn'];
			$snc=count($a);
			
			$b=$_POST['grade'];
			$gradec=count($b);
			
			
			$c=$_POST['sm'];
			$smc=count($c);
			
			for($i=0,$j=0,$k=0;$i<$snc,$j<$gradec,$k<$smc;$i++,$j++,$k++)
			{
				echo "<tr>";
				echo "<td>".$c[$k]."</td>";
				echo "<td>".$a[$i]."</td>";
				echo "<td>".$b[$j]."</td>";
				echo "</tr>";
			}*/
			?>
			<!--</table>
			</td>
			
		  </tr>-->
		</table>
	</div>

</body>
</html>
