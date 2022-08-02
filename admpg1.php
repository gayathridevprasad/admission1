<?php
error_reporting(0);
include 'db1config.php';
$mysqli = new mysqli($host, $user, $pass, $db);

$mysqli->set_charset("utf8");
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

if(isset($_POST["sb"]))
{
   $name=$_POST["n"];
   $fname=$_POST["f"];
   $gender=$_POST["gender"];
   $dob=$_POST["dob"];
   $address=$_POST["address"];
   $place=$_POST["ctv"];
   $mobile=$_POST["mn"];
   $email=$_POST["email"];
   $pg = $_POST["continent"];
   $ug = $_POST["country"];
   $cgpa=$_POST["cgpa"];
   $gate = $_POST["one"];
   $score=$_POST["scr"]	;
   $year=$_POST["yr"];
   $yop=$_POST["yop"];
   $tscore=$_POST["tancet"];   

   
if ($tscore=="")
	$tscore=0;
   if ($gate=="no")
   {
	  $score="0";
      $year="0";
       
   }
   
	 
	 
	 
   
$autoid="null";
$rdate="now()";


//$sql="insert into pgregister(sname,fname,gender,dob,address, place,mobile,email,pcourse,ugcourse,gate,gscore,gyear) values ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."',".$mobile.",'".$email."','".$pg."','".$ug."','".$gate."','".$score."',".$year.")";
$sql="insert into pgregister(pgappid,rdate,sname,fname,gender,dob,address,city,mobile,email,pcourse,ugcourse,cgpa,gate,gscore,gyear,yob,tscore) values (".$autoid.",".$rdate.",'".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."',".$mobile.",'".$email."','".$pg."','".$ug."',".$cgpa.",'".$gate."','".$score."','".$year."','".$yop."',".$tscore.")";

//echo $sql;
 if (mysqli_query($mysqli, $sql)) {
              // echo "New record created successfully";
			 echo "<div id='success'><font color='blue'><h4>Your data are successfully registered with us!..We will contact you soon... Thank You.</h4></font></div>";  

			// echo "<div id='back'><font color='blue'><h4><a href='admission.php'>Back</a></h4></font></div>";  
//	   echo "<script> window.location = 'LP3.php'</script>";

            } else {
               echo "Error: " . $sql . "" . mysqli_error($conn);
            }
            $mysqli->close();
            

}//end of if 

?>

</body>
</html>
