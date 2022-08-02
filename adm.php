<?php

include 'db1config.php';

if(isset($_POST["sb"]))
{
   $name=$_POST["n"];
   $fname=$_POST["f"];
   //$bg=$_POST["bg"];
   $gender=$_POST["gender"];
   $dob=$_POST["dob"];
   $address=$_POST["address"];
   $place=$_POST["ctv"];
   $district=$_POST["district"];
   $pincode=$_POST["pin"];
   $mobile=$_POST["mn"];
   $email=$_POST["email"];
   $year=$_POST["yop"];
   $reg=$_POST["reg"];
   
  
   
   if($_POST["m"]=='' || $_POST["c"]=='' || $_POST["p"]=='')
   {
   $m=0;
   $c=0;
   $p=0;  
   }
   $maths=$_POST["m"];
   $chemistry=$_POST["c"];
   $physics=$_POST["p"];
     

   $medium=$_POST["mos"];
   $medium1=$_POST["omos"];
   
   
   $bos=$_POST["bos"];
   $bos1=$_POST["obos"];
   
   
   $sc=$_POST["sc"];
   $scp=$_POST["scp"];
   
   $courses=$_POST["Extras"];
   $comments=$_POST["comm"];
   $b=count($courses);
   
   $mp="hi";
   $ma=0;
   $ch=0;
   $ph=0;
   $rdate="now()";
   if($year=='2021')
   {
	
	   if($medium=="anymos" || $bos=="anybos")
	   {
	   for($i=0;$i<$b;$i++)
	   {
	   $count1=0;
	   $c2=$courses[$i];
	   $sql1="insert into admission_q(rdate,Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,Maths,Chemistry,Physics,Reg,Medium,BOS,School_Name,SCP,Course_Preference,Comments,mp) values
	   (".$rdate.",'".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",".$ma.",".$ch.",".$ph.",".$reg.",'".$medium1."','".$bos1."','".$sc."','".$scp."','".$c2."','".$comments."','".$mp."')";
	   $result1=mysqli_query($con,$sql1);
          
	   $count1++;
	   }
	   }
	   else
	   {
		    for($i=0;$i<$b;$i++)
	   {
	   $count1=0;
	   $c2=$courses[$i];
	   $sql1="insert into admission_q(rdate,Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,Maths,Chemistry,Physics,Reg,Medium,BOS,School_Name,SCP,Course_Preference,Comments,mp) values
	   (".$rdate.",'".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",".$ma.",".$ch.",".$ph.",".$reg.",'".$medium."','".$bos."','".$sc."','".$scp."','".$c2."','".$comments."','".$mp."')";
	   $result1=mysqli_query($con,$sql1);
	   $count1++;
	   }
	   }	   
      
   if($count1>0)
   {
	   //echo "<div id='success'><font color='blue'><h4>Your data are successfully registered with us!..We will contact you soon... Thank You.</h4></font></div>";  
	   echo "<script> window.location = 'LP3.php'</script>";
   }
   
  }//end of if 

    else if($year=='2020' || $year=='2019')
   {
	    if($medium=="anymos" || $bos=="anybos")
	   {
			for($i=0;$i<$b;$i++)
			{
				$count=0;
				$c1=$courses[$i];
	  
	   $sql="insert into admission_q(rdate,Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,Maths,Chemistry,Physics,Reg,Medium,BOS,School_Name,SCP,Course_Preference,Comments,mp) values
	   (".$rdate.",'".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",".$maths.",".$chemistry.",".$physics.",".$reg.",'".$medium1."','".$bos1."','".$sc."','".$scp."','".$c1."','".$comments."','".$mp."')";
	   $result=mysqli_query($con,$sql);
	   $count++;
	   }
	   }
	   else
	   {
		   	for($i=0;$i<$b;$i++)
			{
				$count=0;
				$c1=$courses[$i];
		   $sql="insert into admission_q(rdate,Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,Maths,Chemistry,Physics,Reg,Medium,BOS,School_Name,SCP,Course_Preference,Comments,mp) values
	   (".$rdate.",'".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",".$maths.",".$chemistry.",".$physics.",".$reg.",'".$medium."','".$bos."','".$sc."','".$scp."','".$c1."','".$comments."','".$mp."')";
	   $result=mysqli_query($con,$sql);
	   $count++;
			}
	   }
	   
   if($count>0)
   {
	//echo "<div id='success'><h4>Your data are successfully registered with us!..We will contact you soon... Thank You.</h4></div>";
	echo "<script> window.location = 'LP3.php'</script>";
   }
   }//end of if
     
}//end of start
?>


</body>
</html>