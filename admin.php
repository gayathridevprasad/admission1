<?php
include 'db1config.php';
session_start();
if(empty($_SESSION['login']) || $_SESSION['login']==''){
 header("location:adminlogin.php");
 die();
}
else

{
    $now = time();
 // checking the time now when home page starts

    if($now > $_SESSION['expire'])

    {

        session_destroy();

        echo "<p align='center'>Your session has expire ! <a href='adminlogin.php'>Login Here</a></p>";

    }
}
error_reporting(0);
?>

<html>
<script>
    function myFunction() {
        var x;
        var r = confirm("Do you want to generate the  file?");
        if (r == true) {
            x = "Your file  is generated please check ";
            window.location.href = "csvv3.php";
        }
       
        document.getElementById("demo").innerHTML = x;
    }


function myFunction1() {
        var x;
        var r = confirm("Do you want to generate the  file?");
        if (r == true) {
            x = "Your file  is generated please check ";
            window.location.href = "csvv4.php";
        }
       
        document.getElementById("demo").innerHTML = x;
    }

function myFunction2() {
        var x;
        var r = confirm("Do you want to generate the  file?");
        if (r == true) {
            x = "Your file  is generated please check ";
            window.location.href = "csvv5.php";
        }
       
        document.getElementById("demo").innerHTML = x;
    }

</script>
<style>
@media 
only screen and (max-width: 760px),
(min-device-width: 768px) and (max-device-width: 1024px)  {

	/* Force table to not be like tables anymore */
	table, thead, tbody, th, td, tr { 
		display: block; 
	}
	
	/* Hide table headers (but not display: none;, for accessibility) */
	thead tr { 
		position: absolute;
		top: -9999px;
		left: -9999px;
	}
	
	tr { border: 1px solid #ccc; }
	
	td { 
		/* Behave  like a "row" */
		border: none;
		border-bottom: 1px solid #eee; 
		position: relative;
		padding-left: 50%; 
	}
	
	td:before { 
		/* Now like a table header */
		position: absolute;
		/* Top/left values mimic padding */
		top: 6px;
		left: 6px;
		width: 45%; 
		padding-right: 10px; 
		white-space: nowrap;
	}
	
	/*
	Label the data
	
	td:nth-of-type(1):before { content: "First Name"; }
	td:nth-of-type(2):before { content: "Last Name"; }
	td:nth-of-type(3):before { content: "Job Title"; }
	td:nth-of-type(4):before { content: "Favorite Color"; }
	td:nth-of-type(5):before { content: "Wars of Trek?"; }
	td:nth-of-type(6):before { content: "Secret Alias"; }
	td:nth-of-type(7):before { content: "Date of Birth"; }
	td:nth-of-type(8):before { content: "Dream Vacation City"; }
	td:nth-of-type(9):before { content: "GPA"; }
	td:nth-of-type(10):before { content: "Arbitrary Data"; } */
}
</style>

<body >
 <form method="POST" >
    <table border="1" align="center">

	<tr>
	 <th colspan="3">KCET - Admission 2021 - Queries - Information</th>
       </tr>
<tr>
	 <th colspan="3">After XII Standard</th>

	</tr>
	<tr>
	  <td>List of Applicants based on Gender</td>
	  <td><input type="radio" name="gen" value="male">Male <input type="radio" name="gen" value="female">Female</td>
	  <td><input type="submit" name="b1"></td>
	 </tr> 
	 
	 <tr>
	  <td>List of Applicants based on Year of Pass</td>
	  <td><input type="radio" name="yop" value="2019">2019 <input type="radio" name="yop" value="2020">2020 <input type="radio" name="yop" value="2021">2021</td>
	  <td><input type="submit" name="b2"></td>
	 </tr>


	<tr>
	  <td>List of Applicants based on Study Board</td>
	  <td><input type="radio" name="bos" value="TN State Board">TN State Board <input type="radio" name="bos" value="CBSE">CBSE <input type="radio" name="bos" value="ISC">ISC<input type="radio" name="bos" value="Others">Others </td>
	  <td><input type="submit" name="b4"></td>
	 </tr>



         <tr>
	  <td>List of all Applicants</td>
	  
	  <td colspan="2"><input type="submit" name="b3"></td>
	 </tr>	 

        <tr>
        <td>List of Students based on District</td>
        <td colspan="2">
	<?php

	$sql = "SELECT distinct(district) FROM admission_q";
        $result = mysqli_query($con,$sql);
    
       echo "<select name='filter' id='filter' onchange='this.form.submit();'>";
       echo "<option value='-1'>--Select--</option>";
       while ($row = mysqli_fetch_assoc($result)) 
      {
         echo "<option value='" . $row['district'] ."'>" . $row['district'] ."</option>";
      }
       echo "</select>";
       

    ?>
        </td>
      
         

       
        </tr>

        <tr>
        <td>List of Students based on Department</td>
        <td colspan="2">
	<?php

	$sqldept = "SELECT distinct(course_preference) FROM admission_q";
        $result = mysqli_query($con,$sqldept);
    
       echo "<select name='filter1' id='filter1' onchange='this.form.submit();'>";
       echo "<option value='-1'>--Select--</option>";
       while ($row = mysqli_fetch_assoc($result)) 
      {
         echo "<option value='" . $row['course_preference'] ."'>" . $row['course_preference'] ."</option>";
      }
       echo "</select>";
       

    ?>
        </td>
       
         

       
        </tr>



	 </table>
     <br>

    <table border="1" align="center">

	<tr>
	 <th colspan="3">KCET - Admission 2021 - Queries - Information</th>
        </tr>
        <tr>
	 <th colspan="3">Lateral Entry</th>

	</tr>
	<tr>
	  <td>List of Applicants based on Gender</td>
	  <td><input type="radio" name="gen1" value="male">Male <input type="radio" name="gen1" value="female">Female</td>
	  <td><input type="submit" name="b5"></td>
	 </tr> 
	 

         <tr>
	  <td>List of Applicants based on 3 courses preferred</td>
	  
	  <td colspan="2"><input type="submit" name="b6"></td>
	 </tr>


       <tr>
	  <td>List of All Lateral Entry Applicants</td>
	  
	  <td colspan="2"><input type="submit" name="b7"></td>
	 </tr>	 
	 </table>


<br>
 <table border="1" align="center">

	<tr>
	 <th colspan="3">KCET - Admission 2021 - Queries - Information</th>
        </tr>
        <tr>
	 <th colspan="3">Post Graduate Request</th>

	</tr>

       <tr>
	  <td>List of All Applicants</td>
	  
	  <td colspan="2"><input type="submit" name="but"></td>
	 </tr>	 
</table>

<br>
    <table border="1" align="center">

	<tr>
	 <th colspan="3">KCET - Admission 2021 - Queries - Information</th>
        </tr>
	<tr>
	 <th colspan="3">Transfer Students</th>

	</tr>
	<tr>
	  <td>List of Applicants based on Gender</td>
	  <td><input type="radio" name="gen2" value="male">Male <input type="radio" name="gen2" value="female">Female</td>
	  <td><input type="submit" name="b8"></td>
	 </tr> 
	 



       <tr>
	  <td>List of All Transfer Applicants</td>
	  
	  <td colspan="2"><input type="submit" name="b9"></td>
	 </tr>	 
	 </table>
 </form>
 <?php
if(isset($_POST["b1"]))
{
   $sno=1;
   $sop=$_POST["gen"];
   $sql="select distinct name,dob,address,place,district,pincode,mobile_number,email,Reg from admission_q where gender='".$sop."' order by rdate ";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='7'>After XII Candidates - Based on Gender</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   
	   echo "<tr>";
	   echo "<td>".$sno."</td>";
	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3].",".$row[4].",".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	   
	   $reg = $row[8];
	   echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
	   $sno++;
	   
   }
   //echo "<tr><td colspan='5'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";
  }
  echo "</table>";
}

else if(isset($_POST["b2"]))
{
   $sno=1;
   $sop=$_POST["yop"];
   $sql="select distinct name,dob,address,place,district,pincode,mobile_number,email,maths,chemistry,physics,Reg,rdate from admission_q where year_of_passing='".$sop."' order by rdate";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='8'>After XII Candidates - Based on Year of Pass</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th><th>Maths</th><th>Chemistry</th><th>Physics</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].$row[3].$row[4].$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	   echo "<td>".$row[8]."</td>";
	   echo "<td>".$row[9]."</td>";
	   echo "<td>".$row[10]."</td>";
	   echo "<td>".$row[12]."</td>";
	   $reg = $row[11];
	   echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
           $sno++;
	   
   }
   //echo "<tr><td colspan='8'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}


else if(isset($_POST["b3"]))
{
  $sno=1;
   $sql="SELECT t.name,t.mobile_number,t.email,t.gender ,group_concat(distinct t.course_preference) pref_courses,t.Reg from admission_q t group by (t.mobile_number) order by id";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='7'>After XII Candidates</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Mobile_Number</th><th>E mail</th><th>Gender</th><th>Preferred Courses</th><th>To Print,Click Below</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   $reg = $row[5];
	   echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";

	   $sno++;	   
   }
   //echo "<tr><td colspan='7'><center><input type='button' value='Generate Report' onclick='myFunction2();'></center></td></tr>";

  }
  echo "</table>";
}


else if(isset($_POST["but"]))
{
  $sno=1;
   $sql="select sname,gender,dob,address,mobile,email,pcourse,ugcourse from pgregister order by rdate";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='9'>PG Degree Admission Data</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Gender</th><th>DOB</th><th>Address</th><th>Mobile</th><th>Email</th><th>PG Course</th><th>UG Course</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td>".$sno."</td>";
	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   echo "<td>".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	  // $reg = $row[5];
	  // echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
	   $sno++;	   
   }
  echo "<tr><td colspan='9'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}





else if(isset($_POST["b4"]))
{
   $sno=1;
   $bos=$_POST["bos"];
   $sql="select distinct name,bos,mobile_number,email,maths,chemistry,physics,Reg from admission_q where bos='".$bos."' order by id";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='10'>After XII Candidates</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Study Board</th><th>Mobile_Number</th><th>Email Id</th><th>Maths</th><th>Chemistry</th><th>Physics</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
 	
	   echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   echo "<td>".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   $reg = $row[7];
	   echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
	   $sno++;
	   
   }
//   echo "<tr><td colspan='7'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}





else if(isset($_POST["b5"]))
{
$sno=1;
   $sop=$_POST["gen1"];
   $sql="select distinct name,dob,address,place,district,pincode,mobile_number,email,branch from admission_q1 where gender='".$sop."'";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='5'>Lateral Entry Students</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3].",".$row[4].",".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	   $reg = $row[8];
	  // echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
	   $sno++;
	   
   }
   //echo "<tr><td colspan='5'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}


else if(isset($_POST["b6"]))
{
$sno=1;  
   $sql="SELECT t.name,t.mobile_number,t.email,t.gender ,group_concat(distinct t.course_preference) pref_courses from admission_q1 t group by (t.mobile_number)";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='5'>Lateral Entry Students</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Mobile_Number</th><th>E mail</th><th>Gender</th><th>Preferred Courses</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
	   echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2]."</td>";
	   echo "<td>".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   //$reg = $row[5];
	   //echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
	   $sno++;
	   
   }
//   echo "<tr><td colspan='5'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}



else if(isset($_POST["b7"]))
{
   $sno=1;
   $sql="select distinct name,dob,address,place,district,pincode,mobile_number,email,branch from admission_q1";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='5'>Lateral Entry Students</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
 echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3].",".$row[4].",".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	   //$reg = $row[8];
	  // echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
$sno++;
	   
   }
   //echo "<tr><td colspan='5'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}





else if(isset($_POST["b8"]))
{
	$sno=1;
   $sop=$_POST["gen2"];
   $sql="select distinct name,dob,address,city,mobile_number,email,previous,department,transfer_semester,reason from admission_t where gender='".$sop."'";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='10'>Transfer Students</th></tr>";
	echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th><th>College Studied</th><th>Branch</th><th>Joining Semester</th><th>Reason</th></tr>";

   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
 echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   echo "<td>".$row[5]."</td>";
	   echo "<td>".$row[6]."</td>";
	   echo "<td>".$row[7]."</td>";
	   echo "<td>".$row[8]."</td>";
	   echo "<td>".$row[9]."</td>";
		//$reg = $row[10];
	  // echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
$sno++;
	   
   }
//   echo "<tr><td colspan='10'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}




else if(isset($_POST["b9"]))
{
   $sno=1;
   $sql="select distinct name,dob,address,city,mobile_number,email,previous,department,transfer_semester,reason from admission_t";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='10'>Transfer Students</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th><th>College Studied</th><th>Branch</th><th>Joining Semester</th><th>Reason</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
 echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   echo "<td>".$row[5]."</td>";

	   echo "<td>".$row[6]."</td>";

	   echo "<td>".$row[7]."</td>";

	   echo "<td>".$row[8]."</td>";

echo "<td>".$row[9]."</td>";
   //$reg = $row[10];
	   //echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
$sno++;
	   
   }
  // echo "<tr><td colspan='10'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}






	$sno1=1;
   	$Search = ($_POST['filter']);
$_SESSION['district'] = $Search;
	$query = "SELECT t.name,t.bos,t.mobile_number,t.email,t.gender ,group_concat(distinct t.course_preference) pref_courses from admission_q t where t.district='$Search' group by (t.mobile_number)";

	$res = mysqli_query($con,$query);
        $count10=mysqli_num_rows($res);
        
	echo "<h4>Report - Students' Admission Requistition - Districtwise</h4>";
        if($count10<=0)
        {
        }
        else
        {
 	echo "<table border='1' align='center'>";
   	echo "<tr><th colspan='10'>XII Students</th></tr>";
	echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Study Board</th><th>Mobile_Number</th><th>Email Id</th><th>Gender</th><th>Courses Preferred</th></tr>";
  	 while($info=mysqli_fetch_array($res))
   	{
	   echo "<tr>";
           echo "<td>".$sno1."</td>";
	   echo "<td>".$info[0]."</td>";
	   echo "<td>".$info[1]."</td>";
	   echo "<td>".$info[2]."</td>";
	   echo "<td>".$info[3]."</td>";
 	   echo "<td>".$info[4]."</td>";
	   echo "<td>".$info[5]."</td>";

	   echo "</tr>";
	   $sno1++;
   
       }
      echo "<tr><td colspan='7'><center><input type='button' value='Print' onclick='window.print();'><input type='button' value='Generate Report (Departmentwise)' onclick='myFunction();'><input type='button' value='Generate Report (All Selected Courses)' onclick='myFunction1();'></center></td></tr>";
      echo "</table>";
  }


 function myFunction() {
       echo "hello";
    }



	$sno3=1;

   	$Search1 = ($_POST['filter1']);
        //echo $Search1;
	$querydept = "SELECT distinct(name),bos,mobile_number,email FROM admission_q WHERE course_preference='$Search1' order by 2,1,3,4";

	$res1 = mysqli_query($con,$querydept);
        $count11=mysqli_num_rows($res1);
        
	echo "<h4>Report - Students' Admission Requistition - Departmentwise</h4>";
        if($count11<=0)
        {
        }
        else
        {
 	echo "<table border='1' align='center'>";
   	echo "<tr><th colspan='10'>XII Students</th></tr>";
echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Study Board</th><th>Mobile_Number</th><th>Email Id</th></tr>";
   while($info1=mysqli_fetch_array($res1))
   {
	   echo "<tr>";
 	
	  echo "<td>".$sno3."</td>";

	   echo "<td>".$info1[0]."</td>";
	   echo "<td>".$info1[1]."</td>";
	   echo "<td>".$info1[2]."</td>";
	   echo "<td>".$info1[3]."</td>";
	   


	   
	  
	  
	   echo "</tr>";
           $sno3++;
 }
//      echo "<tr><td colspan='7'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";
      echo "</table>";
  }




 /*  $sno=1;
   $sql="select distinct name,dob,address,city,mobile_number,email,previous,department,transfer_semester,reason from admission_q";
   $result=mysqli_query($con,$sql);
   $count=mysqli_num_rows($result);
   if($count<=0)
   {
	   echo "No records Available!..";
   }
   else
   {
   echo "<table border='1' align='center'>";
   echo "<tr><th colspan='10'>Transfer Students</th></tr>";
   echo "<tr><th>S.No.</th><th>Name of the Applicant</th><th>Date of Birth</th><th>Address</th><th>Mobile_Number</th><th>Email Id</th><th>College Studied</th><th>Branch</th><th>Joining Semester</th><th>Reason</th></tr>";
   while($row=mysqli_fetch_array($result))
   {
	   echo "<tr>";
 echo "<td>".$sno."</td>";

	   echo "<td>".$row[0]."</td>";
	   echo "<td>".$row[1]."</td>";
	   echo "<td>".$row[2].",".$row[3]."</td>";
	   echo "<td>".$row[4]."</td>";
	   echo "<td>".$row[5]."</td>";

	   echo "<td>".$row[6]."</td>";

	   echo "<td>".$row[7]."</td>";

	   echo "<td>".$row[8]."</td>";

echo "<td>".$row[9]."</td>";
   //$reg = $row[10];
	   //echo "<td><a href = 'onlineRequisitionForm.php?outhkey=$reg'><button>print</button></a></td>";
	   echo "</tr>";
$sno++;
	   
   }
   echo "<tr><td colspan='10'><center><input type='button' value='Print' onclick='window.print();'></center></td></tr>";

  }
  echo "</table>";
}
*/



?>
</body>
 
</html>

