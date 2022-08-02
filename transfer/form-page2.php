<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Transfer Details</title>
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
	width:450px;
	height:150px;
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

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
<script type="text/javascript" src="http://ajax.microsoft.com/ajax/jQuery.Validate/1.6/jQuery.Validate.min.js"></script>

</head>

<body>
	

	<div class="wrapperDiv">
		<form action="#" method="post" id="form" name="myForm" onSubmit="usePage();">
			<?php
			if(!isset($_POST['submitBtn'])) header('location: index.php');
			foreach($_POST as $key => $value) {
				if($key != 'submitBtn') {
				?>
					<input type="hidden" name="<?php echo $key; ?>" value="<?php echo $value; ?>" />
				<?php	
				}
			}
			?>
			<table width="500">
			  <tr>
			    <th colspan="3" scope="row"><h3>Transfer Details</h3></th>
		      </tr>
			  <tr>
				<th scope="row"><div align="right">Previous Institution</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" id="prei" name="prei" value="" required/></td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Department</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="radio" name="dept" id="dept" value="CSE"/>CSE<input type="radio" name="dept" id="dept" value="IT" />IT<input type="radio" name="dept" id="dept" value="ECE" />ECE<input type="radio" name="dept" id="dept" value="EIE"/>EIE<input type="radio" name="dept" id="dept" value="EEE"/>EEE
<input type="radio" name="dept" id="dept" value="PT"/>PT<input type="radio" name="dept" id="dept" value="BT"/>BT<input type="radio" name="dept" id="dept" value="Mech"/>Mech<input type="radio" name="dept" id="dept" value="CIVIL"/>Civil<input type="radio" name="dept" id="dept" value="MTRE"/>Mechatronics
				</td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">Semester of Transfer</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="radio" name="st" id="st" value="3" />3<input type="radio" name="st"  value="5" />5<input type="radio" name="st"  value="7" />7</td>
			  </tr>
			  <tr>
				<th scope="row"><div align="right">reason for Transfer</div></th>
				<td><div align="center"><strong>:</strong></div></td>
				<td><input type="text" id="rs" name="rs" value="" required/></td>
			  </tr>
			  <tr>
				<th scope="row">&nbsp;</th>
				<td>&nbsp;</td>
				<td><input type="submit" name="submitBtn" id="submitBtn" value="Next" /></td>
			  </tr>
			</table>
		</form>
	</div>
	<script type="text/javascript">
	function usePage()
	{
		var result= document.querySelector('input[name="st"]:checked').value;
		//alert(""+result);
		if(result=="3")
			form.action='form-page3.php';
		else if(result=="5")
			form.action='form-page4.php';
		else
			form.action='form-page5.php';
	}
</script>
	<script type="text/javascript">
	   $(document).ready(function() {
	   		$("#form").validate({
				rules: {
				  password : {
				  	  required: true,
					  minlength: 6
				  },
				  confirm_password: {
					  required : true,
					  equalTo: '#password'
				  }
				},
				submitHandler: function(form) {
				  form.submit();
				}
			  });
   	   });
</script>
	
</body>
</html>
