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
   //$reg=$_POST["reg"];
   
   $sc=$_POST["sc"];
   $scp=$_POST["scp"];
   
   
   $mos=$_POST["mos"];
   
   $sem=$_POST["sem"];
   $semc=count($sem);
   
   $sn=$_POST["sn"];
   $snc=count($sn);
   
   $m=$_POST["m"];
   $mc=count($m);
   
   
   $bos=$_POST["bos"];
   //$bos1=$_POST["obos"];
   
   
   
   
   $courses=$_POST["Extras"];
   $courses1=implode(', ',$courses);
//   echo $courses1;
   
   
 //   $courses1 = implode(", ", $courses);
   
   // echo $courses1;
   
   
   $comments=$_POST["comm"];
   
   if($mos=='FTD')
   {
	    for($i=0,$j=0,$k=0;$i<$semc,$j<$snc,$k<$mc;$i++,$j++,$k++)
		{
			$semi=$sem[$i];
			$sni=$sn[$j];
			$mi=$m[$k];
			
			$count1=0;
			
	   $sql1="insert into admission_q1(Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,pc,pcp,mode,sem,nos,marks,branch,Course_Preference,Comments) values
	   ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",'".$sc."','".$scp."','".$mos."',".$semi.",".$sni.",".$mi.",'".$bos."','".$courses1."','".$comments."')";
	   $result1=mysqli_query($con,$sql1);
	   $count1++;
		}
   }
   
   if($mos=='LED')
   {
	    for($i=0,$j=0,$k=0;$i<$semc,$j<$snc,$k<$mc;$i++,$j++,$k++)
		{
			$semi=$sem[$i];
			$sni=$sn[$j];
			$mi=$m[$k];
			
			$count1=0;
			
	   $sql1="insert into admission_q1(Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,pc,pcp,mode,sem,nos,marks,branch,Course_Preference,Comments) values
	   ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",'".$sc."','".$scp."','".$mos."',".$semi.",".$sni.",".$mi.",'".$bos."','".$courses1."','".$comments."')";
	   $result1=mysqli_query($con,$sql1);
	   $count1++;
		}
   }

   if($mos=='SD')
   {
	    for($i=0,$j=0,$k=0;$i<$semc,$j<$snc,$k<$mc;$i++,$j++,$k++)
		{
			$semi=$sem[$i];
			$sni=$sn[$j];
			$mi=$m[$k];
			
			$count1=0;
			
	   $sql1="insert into admission_q1(Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,pc,pcp,mode,sem,nos,marks,branch,Course_Preference,Comments) values
	   ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",'".$sc."','".$scp."','".$mos."',".$semi.",".$sni.",".$mi.",'".$bos."','".$courses1."','".$comments."')";
	   $result1=mysqli_query($con,$sql1);
	   $count1++;
		}
   }
   if($mos=='PTD')
   {
	    for($i=0,$j=0,$k=0;$i<$semc,$j<$snc,$k<$mc;$i++,$j++,$k++)
		{
			$semi=$sem[$i];
			$sni=$sn[$j];
			$mi=$m[$k];
			
			$count1=0;
			
	   $sql1="insert into admission_q1(Name,Father_Name,Gender,DOB,Address,Place,District,Pincode,Mobile_Number,Email,Year_of_Passing,pc,pcp,mode,sem,nos,marks,branch,Course_Preference,Comments) values
	   ('".$name."','".$fname."','".$gender."','".$dob."','".$address."','".$place."','".$district."',".$pincode.",".$mobile.",'".$email."',".$year.",'".$sc."','".$scp."','".$mos."',".$semi.",".$sni.",".$mi.",'".$bos."','".$courses1."','".$comments."')";
	   $result1=mysqli_query($con,$sql1);
	   $count1++;
		}
   }


	if($count1>0)
   	{
	   echo "<div id='success'><font color='blue'><h4>Your data are successfully registered with us!..We will contact you soon... Thank You.</h4></font></div>";  
   	}
     
}
?>


</body>
</html>