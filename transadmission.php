<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta property="og:title" content="KCET - Online Event Registration 2020-2021" />
    <meta property="og:description" content="Online Events started for 2020-2021 at KCET" />
    <meta property="og:url" content="http://www.kamarajengg.edu.in/Events/index.php" />
    <meta property="og:image" content="http://www.kamarajengg.edu.in/Events/img/king.jpg" />
    
    <!-- Title Page-->
    <title>Transfer Admission Page</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">


    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
	
	
	
</head>

<body>
<div class="checkboxdiv">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
        <?php include "header.html"; ?>            
            <?php include "tabs.html"; ?>
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Transfer Admission</h2>
                </div>
                <div class="card-body" style="text-align: center;">                      
                	<iframe name="dis" frameborder=0 width="100%" height="800px" src="http://www.kamarajengg.edu.in/admission/transfer/index.php"></iframe>	
                </div>
            </div>
        </div>
        
        <!-- Jquery JS-->
        <script src="vendor/jquery/jquery.min.js"></script>
        <!-- Vendor JS-->
        <script src="vendor/select2/select2.min.js"></script>
        <script src="vendor/datepicker/moment.min.js"></script>
        <script src="vendor/datepicker/daterangepicker.js"></script>

        <!-- Main JS-->
        <script src="js/global.js"></script>
    </div>
</div>
</body>

<script>
limit = 0; //set limit
var selectedItems=[];
checkboxes = document.querySelectorAll('.checkboxdiv input[type="checkbox"]'); //select all checkboxes
for (i = 0; i < checkboxes.length; i++) {
  checkboxes[i].onclick = function() { 
    //call function on click and send current element as param
    var selchb=checker(this);
    document.getElementById("demo").innerHTML="You have selected "+selchb+" courses";
  }
}
function checker(elem) 
{
var selectedItems = [];
  if (elem.checked) 
  { //if checked, increment counter
    limit++;
  } 
  else 
  {
    limit--; //else, decrement counter
  }

  for (i = 0;i < checkboxes.length; i++) 
  { // loop through all 
    if (limit == 3) 
    {
      if (!checkboxes[i].checked) 
      {
        checkboxes[i].disabled = true; 
        // and disable unchecked checkboxes
      }
    } 
    else 
    { //if limit is less than two
      if (!checkboxes[i].checked) 
      {
        checkboxes[i].disabled = false; 
        // enable unchecked checkboxes
      }
    }
  
 if(checkboxes[i].checked==true)
 {
        
	selectedItems.push(checkboxes[i].value);

 }
}
return selectedItems;
}


function showhidediv()
{
  var chkyes=document.getElementById("chkyes");
  var dvMarks=document.getElementById("dvMarks");
  dvMarks.style.display=chkyes.checked?"block":"none";
  
  
  var chkno=document.getElementById("chkno");
  var dvNoMarks=document.getElementById("dvNoMarks");
  dvNoMarks.style.display=chkno.checked?"block":"none";
}


function showhidedivany()
{
 var chkany=document.getElementById("chkany");
 var dvany=document.getElementById("dvany");
 dvany.style.display=chkany.checked?"block":"none";
}


function showhidedivothers()
{
 var chkothers=document.getElementById("chkothers");
 var dvboard=document.getElementById("dvboard");
 dvboard.style.display=chkothers.checked?"block":"none";
}

function validateForm()
{
  
  var name=document.myForm.n.value;  
  var fname=document.myForm.f.value;  
  var dob=document.myForm.dob.value;  
  var address=document.myForm.address.value;  
  var place=document.myForm.ctv.value;  
  var district=document.myForm.district.value;  
  var pincode=document.myForm.pin.value;

  var mobile=document.myForm.mn.value;  
  var mob = /^[1-9]{1}[0-9]{9}$/;   
  
  var x=document.myForm.email.value;  
  var atposition=x.indexOf("@");  
  var dotposition=x.lastIndexOf(".");
  
  
  
  if(name==""||fname==""||dob==""||address==""||place==""||district==""||pincode=="")
  {
  document.getElementById("head1").innerHTML="Please Enter values for the Empty Fields";
  return false;   
  }  
    
  else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length)
  {  
  document.getElementById("head").innerHTML="Please Enter the Valid Email address";
  document.myForm.email.focus();
  return false;  
  }  
  
 
 else if (mob.test(mobile)==false) {
    document.getElementById("head2").innerHTML="Invalid number; must be ten digits";
    document.myForm.mn.focus();
    return false;
   }
  
  else 
  {
    return true;
  }
}
</script>
<script>
function show()
{
  var result = document.querySelector('input[name="yop"]:checked').value;
//  alert(result);
    if(result=="2021"){

       		document.getElementById("txtm").setAttribute('disabled', true);
		document.getElementById("txtc").setAttribute('disabled', true);
		document.getElementById("txtp").setAttribute('disabled', true);
    }
    else{
        	document.getElementById("txtm").removeAttribute('disabled');
		document.getElementById("txtc").removeAttribute('disabled');
		document.getElementById("txtp").removeAttribute('disabled');
    }

}
</script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(function () {
        $("#ddlPassport").change(function () {
            if ($(this).val() == 2019) {
                $("#dvPassport").show();
				$("#dvPassport1").hide();
				$("#dvPassport2").hide();
            } 
	    else if ($(this).val() == 2020) {
                $("#dvPassport1").show();
				$("#dvPassport").hide();
				$("#dvPassport2").hide();
            } 
	    else if($(this).val() == 2021) {
		        $("#dvPassport").hide();
                $("#dvPassport2").show();
				$("#dvPassport1").hide();
            }
        });
    });
</script>

</html>
<?php include 'Foot.php'; ?>                    
<!-- end document-->