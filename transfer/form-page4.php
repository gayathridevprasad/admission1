<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Mark Details</title>
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
	height:1200px;
	border:1px solid #000;
}
table {
	width:100%;
	
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
		<form action="process-complete.php" method="post" id="form">
			<?php
			if(!isset($_POST['submitBtn'])) header('location: form-page2.php');
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
			    <th colspan="2" scope="row"><h3>Mark Details</h3></th>
		      </tr>
			  
			  <tr>
			    <td>
			    <fieldset>
				<legend>Marks for Semester - I (<font color="red">*</font>)</legend>
				<table>
				<tr>
					<th ><div align="center">Semester No</div></th>
					<th ><div align="center">Subject Name</div></th>
					<th ><div align="center">Grade Obtained</div></th>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="1" size="3" placeholder="Semester1" disabled /></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="1" size="3" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="1" size="3" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="1" size="3" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="1" size="3" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="1" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="1" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="1" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="1" placeholder="Semester1" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				</fieldset>
				</table>
				</td>
			  </tr>
			  
			  
			  
			  <tr>
			    <td>
			    <fieldset>
				<legend>Marks for Semester - II (<font color="red">*</font>)</legend>
				<table>
				<tr>
					<th ><div align="center">Semester No</div></th>
					<th ><div align="center">Subject Name</div></th>
					<th ><div align="center">Grade Obtained</div></th>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="2" size="3" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="2" size="3" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="2" size="3" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="2" size="3" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="2" size="3" placeholder="Semester2"disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="2" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="2" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]"
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="2" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="2" placeholder="Semester2" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				</fieldset>
				</table>
				</td>
			  </tr>

			  
			  
			  <tr>
			    <td>
			    <fieldset>
				<legend>Marks for Semester - III (<font color="red">*</font>)</legend>
				<table>
				<tr>
					<th ><div align="center">Semester No</div></th>
					<th ><div align="center">Subject Name</div></th>
					<th ><div align="center">Grade Obtained</div></th>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="3" size="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="3" size="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="3" size="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="3" size="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="3" size="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" size="3" name="sm[]" value="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" size="3" value="3" placeholder="Semester3" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				</fieldset>
				</table>
				</td>
			  </tr>

			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  
			  <tr>
			  <td>Did you get the results for Semester - IV</td>
			  </tr>
			  <tr>
			  <td>
			  <select id="opt" name="opt" onchange="show();">
				<option value="-1" disabled selected>Choose</option>
				<option value="yes">Yes</option>
				<option value="no">No</option>
				</select>
				</td>
				<!--<input type="radio" id="opt" name="opt" value="yes" onchange="show();"/>Yes<input type="radio" id="opt" name="opt" value="no" onchange="show();"/>No</td>-->
			  </tr>
			  
			  <tr>
				
				<td> 
				<div id="1" style="display:none;">
				<fieldset>
				<legend>Marks for Semester - IV</legend>
				<table>
				<tr>
					<th><div align="center">Subject Name</div></th>
					<th ><div align="center">Grade Obtained</div></th>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="4" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value=""  /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4"  disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				<tr>
				<td><input type="text" name="sm[]" value="4" size="3" placeholder="Semester4" disabled/></td>
				<td><input type="text" name="sn[]" value="" /></td>
				<td>
					<select id="branch" name="grade[]" >
					<option value="-1">Choose</option>
					<option value="O">O</option>
					<option value="A+">A+</option>
					<option value="A">A</option>
					<option value="B+">B+</option>
					<option value="B">B</option>
					<option value="RA">RA</option>
					<option value="SA">SA</option>
					<option value="W">W</option>
					</select>
				</td>
				</tr>
				</table>
				</fieldset>
				</div>
				</td>
				
			  </tr>
			  
			  <tr>
				<td><input type="submit" name="submitBtn" id="submitBtn" value="Save" /></td>
			  </tr>
			</table>
		</form>
	</div>
	
	
<script>	
function show()
{
var current=document.getElementById("opt");
//alert(""+current.value);
var selected1=document.getElementById("1");

if(current.value=="yes")
{
  selected1.style.display="block";
}
else
{
   selected1.style.display="none";
}
}
</script>
	<script type="text/javascript">
	   $(document).ready(function() {
	   		$("#form").validate();
   	   });
</script>

</body>
</html>
