<?PHP
 session_start();
  function cleanData(&$str)
  {
    if($str == 't') $str = 'TRUE';
    if($str == 'f') $str = 'FALSE';
    if(preg_match("/^0/", $str) || preg_match("/^\+?\d{8,}$/", $str) || preg_match("/^\d{4}.\d{1,2}.\d{1,2}/", $str)) {
      $str = "'$str";
    }
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
  }

// filename for download
//$filename=$_SESSION['filename'];
//$eventid= $_SESSION['eventid'];
//$district=$_SESSION['district'];
$filename="kcet"."_student_details_". date('Ymd') . ".csv";
//echo $eventid;
//echo $dept;
include 'db1config.php';
$query="SELECT t.rdate,t.name,t.bos,t.mobile_number,t.email,t.gender ,group_concat(distinct t.course_preference) pref_courses,t.district,t.school_name,t.scp,t.comments from admission_q t";
			
$result = mysqli_query($con, $query);
$row = mysqli_fetch_array($result);
			
if ($result = $con->query($query)) {
    while ($row = $result->fetch_assoc()) 
        {
     //print_r ($row);
	$array1[] = $row; 

	}
	//print_r($array1);
	}
 header("Content-Disposition: attachment; filename=\"$filename\"");
 header("Content-Type: text/csv");
  
  $out = fopen("php://output", 'w');

  $flag = false;
  foreach($array1 as $row) {
    if(!$flag) {
      // display field/column names as first row
      fputcsv($out, array_keys($row), ',', '"');
      $flag = true;
    }
    array_walk($row, __NAMESPACE__ . '\cleanData');
    fputcsv($out, array_values($row), ',', '"');
  }

  fclose($out);
           
  
  exit;
?>