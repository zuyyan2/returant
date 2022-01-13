<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel="stylesheet" href="assets/css/style.css">
<link rel="stylesheet" href="css/style1.css">
<title>Apply</title>
<style>
body{
  background-image: url(images/apply.jpg);

}
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/2.9.2/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.min.js"></script>

<script type="text/javascript">
function ValidateForm(frm) {
if (frm.First_Name.value == "") {alert('First name is required.');frm.First_Name.focus();return false;}
if (frm.Last_Name.value == "") {alert('Last name is required.');frm.Last_Name.focus();return false;}
if (frm.Email_Address.value == "") {alert('Email address is required.');frm.Email_Address.focus();return false;}
if (frm.Email_Address.value.indexOf("@") < 1 || frm.Email_Address.value.indexOf(".") < 1) {alert('Please enter a valid email address.');frm.Email_Address.focus();return false;}
if (frm.Position.value == "") {alert('Position is required.');frm.Position.focus();return false;}
if (frm.Phone.value == "") {alert('Phone is required.');frm.Phone.focus();return false;}
if (frm.skip_CaptchaCode.value == "") {alert('Enter security code.');frm.skip_CaptchaCode.focus();return false;}
return true; }
function ReloadCaptchaImage(captchaImageId) {
var obj = document.getElementById(captchaImageId);
var src = '' + obj.src;
obj.src = '';
var date = new Date();
var pos = src.indexOf('&rad=');
if (pos >= 0) { src = src.substr(0, pos); }
obj.src = src + '&rad=' + date.getTime();
return false; }
</script>
<hr />
<center>
</head>
<body>
<div class="container">
			<nav class="navbar navbar-expand-lg ftco_navbar ftco-navbar-light" id="ftco-navbar">
		    <div class="container">
		    	<a class="navbar-brand" href="#"><i><u><b> Job Finder</b></u></i></a>
		      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
		        <span class="fa fa-bars"></span> Menu
		      </button>
		      <div class="collapse navbar-collapse" id="ftco-nav">
		        <ul class="navbar-nav ml-auto">
							<li class="nav-item"><a href="homepage.php" class="nav-link">Home</a></li>
		        
		        	<li class="nav-item dropdown position-static">
	              <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Jobs</a>
	              <div class="dropdown-menu p-2" aria-labelledby="dropdown04">
	              	<div class="row">
	              		<div class="col-md-6">
	              			<a class="dropdown-item" href="Teacher.php">TEACHER</a>
			                <a class="dropdown-item" href="doctor.php">DOCTOR</a>
			                <a class="dropdown-item" href="lawyer.php">LAWYER</a>
			                <a class="dropdown-item" href="engineer.php">ENGINEER</a>
	              		</div>
	              		<div class="col-md-6">
	              			<a class="dropdown-item" href="accountant.php">ACCOUNTANT</a>
			                <a class="dropdown-item" href="web developer.php">WEB DEVELOPER</a>
			                <a class="dropdown-item" href="android developer.php">ANDROID DEVELOPER</a>
			                <a class="dropdown-item" href="sales man.php">SALES MAN</a>
	              		</div>
	              	   	</div>
	              </div>
	            </li>
                <li class="nav-item"><a href="package.php" class="nav-link">Packages</a></li>
		        	<li class="nav-item"><a href="About Us.php" class="nav-link">About us</a></li>
                    <li class="nav-item"><a href="Contact.php" class="nav-link">Contact us</a></li>
					<li class="nav-item"><a href="login.php" class="nav-link">Logout</a></li>
				</ul>
		      </div>
		    </div>
		  </nav>
    <!-- END nav -->
<br>
    <h1><b><i><u>Apply form</u></i></b></h1>
    <br>
<form action="dataccess.php" id="ContactUsCaptchaWebForm" method="post" onsubmit="return ValidateForm(this);" target="_top">
<input id="skip_WhereToSend" name="skip_WhereToSend" type="hidden" value="your@email.com" />
<input id="skip_SnapHostID" name="skip_SnapHostID" type="hidden" value="NKRWYMUPYSUU" />
<input id="skip_WhereToReturn" name="skip_WhereToReturn" type="hidden" value="http://www.YourWebsiteAddress.com/ThankYouPage.htm" />
<input id="skip_Subject" name="skip_Subject" type="hidden" value="Employment Application" />
<input id="skip_ShowUsersIp" name="skip_ShowUsersIp" type="hidden" value="1" />
<input id="skip_SendCopyToUser" name="skip_SendCopyToUser" type="hidden" value="1" />
<table border="0" cellpadding="5" cellspacing="0">
<tr>
   
<td style="width:50%; font-size:20px; color:Black">
<b><i>First name: </i></b><br />
<input name="FirstName" type="text" maxlength="50" style="width:280px" height="50px" />
</td>
<td style="width:50%; font-size:20px; color:Black">
<b><i>Last name:</i> </b><br />
<input name="LastName" type="text" maxlength="50" style="width:260px" />
</td>
</tr>
<tr>
<td colspan="2" style="width:50%; font-size:20px; color:Black">
<b><i>Email: </i></b><br />
<input name="EmailAddress" type="text" maxlength="100" style="width:550px" />
</td>
</tr>
<tr>
<td colspan="2" style="width:50%; font-size:20px; color:Black">
<b><i>Position you are applying for: </i></b><br />
<input name="Position" type="text" maxlength="100" style="width:550px" />
</td>
</tr>
<tr>
<td style="width:50%; font-size:20px; color:Black">
<b><i>Education</i></b><br />
<input name="Salary" type="text" maxlength="50" style="width:260px" />
</td>
<td style="width:50%; font-size:20px; color:Black">
<b><i>When can you start?</i></b><br />
<input name="StartDate" type="text" maxlength="50" style="width:260px" />
</td>
</tr>
<tr>
<td style="width:50%; font-size:20px; color:Black">
<b><i>Phone number: </i></b><br />
<input name="Phone" type="int" maxlength="50" style="width:260px" />
</td>
<td style="width:50%; font-size:20px; color:Black">
<b><i>Fax</i></b><br />
<input name="Fax" type="int" maxlength="50" style="width:260px" />
</td>
</tr>
<tr>
<td colspan="2" style="width:50%; font-size:20px; color:Black">
<b><i>Are you willing to relocate? </i></b><br />
<input name="Relocate" type="radio" value="Yes" checked="checked" /> Yes &nbsp; &nbsp; &nbsp;
<input name="Relocate" type="radio" value="No" /> No &nbsp; &nbsp; &nbsp;
<input name="Relocate" type="radio" value="NotSure" /> Not sure
</td>
</tr>
<tr>
<td colspan="2" style="width:50%; font-size:20px; color:Black"> 
<b><i>Last company you worked for</i></b><br />
<input name="Organization" type="text" maxlength="100" style="width:550px" />
</td>
</tr>
<tr>
<td colspan="2" style="width:50%; font-size:20px; color:Black">
<b><i>Reference / Comments / Questions</i></b><br />
<textarea name="Reference" rows="7" cols="40" style="width:550px"></textarea>
</td>
</tr>
</table>
<br />
<input type="submit" class="btn btn-default" name="btnapply" value="Apply" style="background-color:blue; color:white">
</div>
</br>
</br>
</form>
</form>
</div>
</center>
 <script src="js/jquery.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/main.js"></script>

  <?php
include("footer.php")
  ?>
</body>
</html> 