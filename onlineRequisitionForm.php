<?php
include 'db1config.php';
$con = new mysqli($host,$user,$pass, $db);

if ($con -> connect_errno) {
  echo "Failed to connect to MySQL: " . $con -> connect_error;
  exit();
}
?>
<html>
	<head>
		<title>Online Admission Requisition Form 2021-2022</title>
		<style>
		footer{
			display:block;
		}
		.lcheckbox{
			width:20px;
			height:20px;
		}
		tr,td,th{
			padding:10px;
		}
		
		div{
			border-style : solid;
		}
		#entireDiv {  
			width: 99.29%;
			float: left;
		}
		</style>
		
		<script>
			window.onload = window.print(); 
		</script>
		
	</head>
	<body>
		<?php
			$pid = $_GET['outhkey'];
			$sql="select * from admission_q where Reg='".$pid."'";
			$result=mysqli_query($con,$sql);
			$count=mysqli_num_rows($result);
			if($count<=0)
			{
				echo "No records Available!..";
			}
			else
			{
				while($row=mysqli_fetch_assoc($result))
				{
					$id = $row['id'];
					$name =  $row['Name'];
					$gender = $row['Gender'];
					$father_name =  $row['Father_Name'];
					$email = $row['Email'];
					$mobile_number = $row['Mobile_Number'];
					$yop =  $row['Year_of_Passing'];
					$maths = $row['Maths'];
					$chemistry = $row['Chemistry'];
					$physics = $row['Physics'];
					$reg = $row['Reg'];
					
				}
				$cutoff = ($maths/2)+($physics/4)+($chemistry/4);
			}
				
		?>
		<div align="center">
			<img src = "images/kcetlogo.jpg" width = "50%" height = "20%" >
		</div>
		
		<div align = "center">
			<h1>Online Admission Requisition Form 2021-2022</h1>
			<p Style = "text-align : right;"><b>Admission Requisition Number : <?php echo $id?>&nbsp;&nbsp;</b></p>
		</div>
		<div id = "entireDiv">
			<table width = "100%" border = 1>
				<tr>
					<td width= "30%"><b>Applicant Name : </b></td>
					<td width= "40%"><?php echo $name?></td>
					<td rowspan = "6"></td>
				</tr>
				<tr>
					<td width= "30%"><b>HSC Register Number : </b></td>
					<td width= "40%"><?php echo $reg?></td>
					
				</tr>
				<tr>
					<td width= "30%"><b>Gender : </b></td>
					<td width= "40%"><?php echo $gender?></td>
					
				</tr>
				<tr>
					<td width= "30%"><b>Father Name : </b></td>
					<td width= "40%"><?php echo $father_name?></td>
				
				</tr>
				<tr>
					<td width= "30%"><b>Email Id : </b></td>
					<td width= "40%"><?php echo $email?></td>
				
				</tr>
				<tr>
					<td width= "30%"><b>Mobile Number : </b></td>
					<td width= "40%"><?php echo $mobile_number?></td>
				
				</tr>
				<tr>
					<td width= "30%"><b>Year of Passing : </b></td>
					<td width= "40%"><?php echo $yop?></td>
					<td align = "center">Affix Photo here</td>
				</tr>
			</table>			
			
		</div>
		<div id = "entireDiv">
			<table width = "100%" border="1" style = "text-align:center">
				<tr>
					<th width= "30%" colspan="2"><b>Marks  </b></th>
					<th ><b>Cut off  </b></th>
					<th ><b> preferred Courses </b></th>
				</tr>
				<tr>
					<td width= "25%"><b>Maths  </b></td>
					<td width= "25%"><?php echo $maths?> / 100</td>
					<td rowspan = "3"><?php echo $cutoff?> %</td>
					<td rowspan = "3">
					<?php
			$sql = "select Course_Preference as course from admission_q where Reg = '$pid'";
			$result = mysqli_query($con,$sql);
			$c=0;
			if($row = mysqli_fetch_assoc($result))
			{
			do{
		?>
					
		<?php
			if($c == 3){break;}
			else{
		?>
				<b>*</b>
		<?php
			echo $row['course'];
			$c=$c+1;
			}
		?>
				<input class = "lcheckbox" type = "Checkbox">
				<br><br>		
		<?php
			}while($row=mysqli_fetch_array($result));
			}
			
		?>
					
					</tr>
				</tr>
				<tr>
					<td width= "25%"><b>Physics  </b></td>
					<td width= "25%"><?php echo $physics?> / 100</td>
				</tr>
				<tr>
					<td width= "25%"><b>Chemistry  </b></td>
					<td width= "25%"><?php echo $chemistry?> / 100</td>
				</tr>
			</table>
		</div>
		<div>
			<table width = "100%" style = "text-align:center">
				<tr><td colspan = "3"><b>Eligible Courses : </b></td></tr>
				<tr>
					<td><input type = "text" placeholder = " "></td>		
					<td><input type = "text" placeholder = " "></td>		
					<td><input type = "text" placeholder = " "></td>		
				</tr>
			</table>
		</div>
		<div>
			<table width = "100%" style = "text-align:center">
				
					<tr Style = "padding : 5px">
						<td Style = "padding : 5px"></br></br>____________________</td>
						<td Style = "padding : 5px"></br></br>____________________</td>
						<td Style = "padding : 5px"></br></br>____________________</td>							
					</tr>						
					<tr Style = "padding : 5px">
						<td Style = "padding : 5px">OM Signature</td>
						<td Style = "padding : 5px">Principal Signature</td>
						<td Style = "padding : 5px">Secretary Signature</td>
					</tr>										
			</table>
		</div>
		<div>
			<footer align = "center">
				<p><h4>Thank you!!!</h4></p>
			</footer>
		</div>
	</body>
</html>