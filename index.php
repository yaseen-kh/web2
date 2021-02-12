<?php
$connc = mysqli_connect('localhost', 'root' ,'') or die (mysqli_error ($connc));
mysqli_select_db($connc, 'project_one')  or die (mysqli_error ($connc));


if (isset($_POST['submit']) && $_POST['submit']=="Register"){

	$first= $_POST['first_name'];
	$last= $_POST['last_name'];
	$com= $_POST['company'];
	$eme=  $_POST['email'];
	$cod=  $_POST['area_code'];
	$ph=  $_POST['phone_number'];
	$sub=  $_POST['subject'];
	$gen=  $_POST['gender'];
   
mysqli_query($connc, "insert into students (first_name,last_name,Institute,email,area_code,phone_number,subject,gender) values('".$first."' , '".$last."' , '".$com."' , '".$eme."' ,'".$cod."' , '".$ph."' , '".$sub."' , '".$gen."')") or die ( mysqli_error ($connc));

	header("Location: listing.php");
	exit;
}



?>

<html>
<head>

<style type="text/css">
*{ padding:0; margin:0;}
.hhh{ color:#FFFFFF;}

body{ background-image:url(pexels-photo-947785.jpeg); background-position:center; background-size:cover; font-family:Arial, Helvetica, sans-serif; margin-top:40px;}
.regform{ width:750px; background-color:rgb(0,0,0,0.7); text-align:center; margin:auto; color:#FFFFFF; border-radius:15px 15px 0px 0px; padding:10px 0px 10px 0px;}
.main{ background-color:rgb(0,0,0,0.5); width:750px; margin:auto;}
form{ padding:15px;}
#name{ width:50%; height:10px;}
.name{ margin-left:25px; margin-top:30px; color:#FFFFFF; width:125px; font-weight:700; font-size:18px;}
.firstname{ position:relative; left:150px; top:30px; line-height:40px; border-radius:8px; padding:0px 10px; font-size:16px;}
.lastname{position:relative; left:400px; top:-34px; line-height:40px; border-radius:8px; padding:0px 22px; font-size:16px; color:#555;}
.firstlabel{ position:relative; left:150px; top:-33px;  font-size:16px; text-transform:capitalize; color:#FFFFFF;}
.lastlabel{position:relative; left:417px; top:-98px;  font-size:16px; text-transform:capitalize; color:#FFFFFF;}
.company{ position:relative; left:150px; top:-40px; width:492px; border-radius:8px; line-height:40px; font-size:16px; padding:0 22px;}
.email{position:relative; left:150px; top:-37px; width:500px; border-radius:8px; line-height:40px; font-size:16px; padding:0 22px;}
.area_code{ position:relative; left:150px; width:90px; top:-37px; line-height:40px; border-radius:8px; padding:0px 22px; font-size:16px;}
.phone_number{ position:relative; line-height:40px; padding:0 22px; left:180px; top:-81px; width:390px; border-radius:8px;}
.phone{ position:relative; left:260px; top:-79px; color:#FFFFFF;}
.code{ position:relative; left:155px; top:-49px;}
.sub{ color:#FFFFFF; top:-70px; padding:10px;}
.select{ position:relative; line-height:40px; padding:0 22px; width:500px; height:40px; left:150px; border-radius:8px; top:-46px; font-size:18px}
.ge{ color:#FFFFFF; top:-50px;}
.button{ background:#00CC00; color:#FFFFFF; text-align:center; margin:15px 0px 0px  20px; border-radius:10px; border:solid 2px #000000; padding:14px 100px;
font-size:20px; outline:none; display:block; cursor:pointer; transition:0.25px;}
input type{ font-size:30px;}
 .btn a{
    width: 200px;
    margin: 10px;
    height: 50;
    text-decoration: none;
    font-size: larger;}
button.bn {
    margin-bottom: 25px;
    padding-top: 10px;
    padding-bottom: 10px;
    background-color: aliceblue;
    border: solid 2px green;
	border-radius:10px;
}
.btn {
    margin-right: 100px;
}
</style>




</head>
<body>
<div class="btn" align="right">
<button class="bn"><a href="listing.php">Go to Listing Form</a></button>
</div>
<div class="regform"><h1>Registration Form</h1></div>
<div class="main">
<form method="post">
<div id="name"><h2 class="hhh">NAME</h2></div> 
<input  class="firstname"type="text" name="first_name" value="" /><br>
<label class="firstlabel">First Name:</label><br>
<input  class="lastname" type="text" value="" name="last_name" ><br>
<label class="lastlabel">Last Name:</label>

<h2 class="name" style="font-size:24px;">Institute</h2>
<input type="text" value="" name="company" class="company" >

<h2 class="name"  style="font-size:24px;">Email</h2>
<input type="email"  name="email" class="email" value="" >

<h2 class="name">Phone</h2>
<input type="text" name="area_code" class="area_code"><br>
<label class="code" style="color:#FFFFFF;">Area code</label> 
<input type="text" name="phone_number" class="phone_number" ><br>
<label class="phone">Phone Number</label>

<h2 class="sub">Subject</h2>
<select class="select" name="subject">
<option disabled="disabled" selected="selected">----choose any option</option>
		<option>civil-enginerring</option>
		<option>Medical</option>
		<option>computer-science</option>

</select>
<h2 class="ge" align="center";>Gender</h2>
<div align="center" style="color:#FFFFFF; font-size:24px;"><input type="radio" name="gender" value="Male" class="gen">&nbsp;Male 
&nbsp;
<input type="radio" name="gender" value="Female" class="gem">&nbsp;Female
</div>
<br><br>
<input type="submit" name="submit" value="Register" class="button">

</form>
</div>
</body>
</html>