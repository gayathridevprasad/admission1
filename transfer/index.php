<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Online registartion - For Transfer Students</title>
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
	width:600px;
	height:300px;
}
table {
	width:100%;
	border:1px solid #000;
	padding-bottom:10px;
}
h3 {
	margin:0;
	background-color:royalblue;
}
input[type=text], input[type=password] {
	display:block;
	width:200px;
}
.error {
	color:#FF0000;
	font-size:13px;
}
#submitBtn {
	padding:5px 30px;
	cursor:pointer;
}
</style>
<style>
section{  
border:2px solid pink;  
padding:10px;  
margin:5px; 
width:300px;
height:150px; 
}  
</style>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>
</head>

<body>

		<div class="wrapperDiv">
		<div align="center">
<h2><font color="royalblue">Transfer Students Registration</font></h2>
<section>
<h4>Registration Procedure </h4>
<ul>
 <li align="left">Fill the Personal Details, Click Next</li>
 <li align="left">Fill the Transfer Details, Click Next</li>
  <li align="left">Fill the Mark Details, Click Save</li>

   </ul>
</section>
</div>
		<form action="form-page2.php" method="post" id="form">
			<table>
			  <tr>
				<th colspan="3" scope="row">
				  <h3 style="border-bottom:1px solid #000;">Personal Details </h3>
			    <div align="center"></div></th>
			  </tr>
			  
			  <tr>
				<th scope="row"><div align="right">Name</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="name" class="required" value="" /></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Gender</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="radio" name="gender" value="male" checked />Male<input type="radio" name="gender" value="female" />Female</td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Date of Birth</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="dob" class="required" value="" placeholder="DD-MM-YYYY"/></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Father's/Mother's/Guardian's Name</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="fname" class="required" value="" /></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Email</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="email" class="required" value="" /></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Mobile</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="mobile" value="" /></td>
			  </tr>
			   <tr>
				<th scope="row"><div align="right">Address for Communication</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><textarea cols="30" rows="4" name="address"></textarea></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">City</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="city"></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Pincode</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" name="pin"></td>
			  </tr>
			  <tr>
				<th scope="row">&nbsp;</th>
				<td>&nbsp;</td>
				<td><input type="submit" name="submitBtn" id="submitBtn" value="Next" /></td>
			  </tr>
			</table>
		</form>
</div><!-- end of .wrapperDiv -->
								  
	<script type="text/javascript">
	   $(document).ready(function() {
	   		$("#form").validate({
				rules: {
				  email : {
				  	  required: true,
					  email: true
				  },
				  mobile: {
					  required : true,
					  digits: true,
					  minlength: 10,
					  maxlength: 10
				  }
				},
				
				// Specify validation error messages
				messages: {
				  email: {
				  	required: "Please enter email address",
					email: "Please enter a valid email address"
				  },
				  mobile: {
				  	required : "Please enter your Mobile number",
				  	digits: "Please enter digits only"
				  }
				},
				// Make sure the form is submitted to the destination defined
				// in the "action" attribute of the form when valid
				submitHandler: function(form) {
				  form.submit();
				}
			  });
   	   });
</script>
</body>
</html>
