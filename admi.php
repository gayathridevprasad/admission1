<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta property="og:title" content="KCET - Online Event Registration 2020-2021" />
    <meta property="og:description" content="Online Events started for 2020-2021 at KCET" />
    <meta property="og:url" content="http://www.kamarajengg.edu.in/Events/index.php" />
    <meta property="og:image" content="http://www.kamarajengg.edu.in/Events/img/king.jpg" />
    
    <!-- Title Page-->
    <title>B.E/B.Tech Admission Page</title>

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
                    <h2 class="title">B.E/B.Tech Admission</h2>
                </div>
                <div class="card-body" style="text-align: center;">                      
                <form name="myForm" action="adm.php" method="post" onsubmit="return validateForm()" enctype = "multipart/form-data">
                        
						<div class="form-row">
                            <div class="name">Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <!-- <input class="input--style-5" type="text" name="name" minlength="3" REQUIRED> -->
                                    <input class="input--style-5" type="text" name="n" placeholder="eg., Kamaraj.K" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Father's / Mother's / Guardian's Name</div>
                            <div class="value">
                                <div class="input-group">
                                    <!-- <input class="input--style-5" type="email" name="email" REQUIRED> -->
                                    <input class="input--style-5" type="text" name="f" REQUIRED>
                                </div>
                            </div>
                        </div>
                       
                        <div class="form-row">
                       
                            <div class="name">Male </div>
                            <div class="value">
                                <div class="input-group">
                                    <!-- <input class="input--style-5" type="tel" name="phone" pattern="^\d{10}$" REQUIRED> -->
                                    <input class="input--style-5" type="radio" name="gender" value="male" checked>                                                         
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Female</div>
                            <div class="value">
                                <div class="input-group">
                                    <!-- <input class="input--style-5" type="tel" name="phone" pattern="^\d{10}$" REQUIRED> -->                                                                        
                                    <input type="radio" name="gender" value="female">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Date of Birth</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="date" name="dob" placeholder="Select the date from calendar" min="1999-01-01" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Address for Contact</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="address" placeholder="Door No,Street Name" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">Name of the City/Town</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="ctv" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Name of the District</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="district" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Pincode</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="pin" required>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Parent's Mobile Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="mn" required><p id="head2" style="color:red"></p>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Email id (retype the same email id) </div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="email" name="email" ></td><p id="head" style="color:red">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row">
                            <div class="name">Year of passing 12'th Examination</div>
                            <div class="value">
                                <div class="input-group">
                                    <input  class="input--style-5" type="radio" name="yop" value="2019" checked onchange="show();">2019<input type="radio" name="yop" value="2020" onchange="show();">2020<input type="radio" name="yop" value="2021" onchange="show();">2021
                                </div>
                            </div>
                        </div>
                           
                        <br><h4><b>Kindly enter the marks secured in 12<sup>th</sup> standard:(Students of Batch 2021 need not enter your marks) </b></h4><br>
                        <div class="form-row">
                            <div class="name">Mathematics</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="m" id="txtm" placeholder="for 100" required min="1" max="100">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Chemistry</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="c" id="txtc" placeholder="for 100" required min="1" max="100">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Physics</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="p" id="txtp" placeholder="for 100" required min="1" max="100">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">12<sup>th</sup> registration Number</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="number" name="reg" required placeholder="7 digit number">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Medium of Study</div>
                            <div class="value">
                                <div class="input-group" >
                                <label for="mos"></label>
                                <select name="mos">
                                    <option value="Tamil" selected>Tamil</option>
                                    <option value="English">English</option>
                                    <option value="anymos">Other</option>
                                    </select>
                                    <input class="input--style-5"  type="text" name="omos">
                                </div>
                            </div>
                        </div>
                
                        <div class="form-row">
                            <div class="name">Board</div>
                            <div class="value">
                                <div class="input-group">
                                <label for="bos"></label>
                                <select name="bos">
                                    <option value="TN State Board" selected>TN State Board</option>
                                    <option value="CBSE">CBSE</option>
                                    <option value="ISC">ISC</option>
                                    <option value="anybos">Other</option>
                                </select>
                                <input class="input--style-5" type="text" name="obos">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Name of the School</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="sc" placeholder="School Name">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Place of School</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="scp" placeholder="Place">
                                </div>
                            </div>
                        </div>
                        <br><h4><b>Choose the Courses You prefer to apply for <br>(Max. 3 Courses can be selected.)</b></h4><br>
                        <input type="hidden" name="Extras" value="">

                        <div class="form-row">
                            <div class="name">B.E.Computer Science and Engineering<font color="green">(NBA Accredited)</font></div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="checkbox" name="Extras[]" value="CSE">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">B.E.Electronics and Communication Engineering<font color="green">(NBA Accredited)</font></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="ECE">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">B.Tech.Information Technology</div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="IT">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">B.Tech. Biotechnology<font color="green">(NBA Accredited)</font></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="BT">
                                </div>
                            </div>
                        </div>
                        

                        <div class="form-row">
                            <div class="name">B.E.Mechanical Engineering</label><font color="green">(NBA Accredited)</font></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="MECHANICAL">
                                </div>
                            </div>
                        </div>


                        <div class="form-row">
                            <div class="name">B.E.Civil Engineering</label></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="CIVIL">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">B.E.Electrical and Electronics Engineering</label></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="EEE">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">B.E.Mechatronics Engineering</label></div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="MTRE">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">B.Tech., Artificial Intelligence and Data Science </div>
                            <div class="value">
                                <div class="input-group">
                                <input type="checkbox" name="Extras[]" value="AI">
                                </div>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Any Specific Queries, you can post here!</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="input--style-5" name="comm"></textarea>
                                </div>
                            </div>
                        </div>

                        <div>
                            <button class="btn btn--radius-2 btn--blue" type="submit" name="sb">REGISTER</button>
                        </div>
                    </form>
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