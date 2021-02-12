<?php
$con=mysqli_connect('localhost','root','');
error_reporting(0);
mysqli_select_db($con,'project_one');

if (isset($_POST['submit']) && $_POST['submit']=="Update"){

	$id=$_GET['id'];
	$firstname=$_POST['first_name'];
	$lastname=$_POST['last_name'];
	$in=$_POST['company'];
    $em=$_POST['email'];
    $ar=$_POST['area_code'];
    $ph=$_POST['phone_number'];
    $su=$_POST['subject'];
    $gen=$_POST['gender'];


mysqli_query($con,"update students SET first_name='$firstname',last_name='$lastname',Institute='$in',email='$em',area_code='$ar',phone_number='$ph',subject='$su',gender='$gen' WHERE id='$id' ") or die (mysqli_error($con));
header("Location: listing.php");
exit;
}


    $wk=$_GET['id'];

$query ="select * from students where id=".$wk." ";
$get_data = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($get_data);


?>

<html>
<head>
</head>
<body>

<div class="regform"><h1>Updating Form</h1></div>
<div class="main">
<form method="post">
<div id="name"><h2 class="hhh">NAME</h2></div> 
<input  class="firstname"type="text" name="first_name" value="<?php echo $row['first_name']; ?>" /><br>
<label class="firstlabel">First Name:</label><br>
<input  class="lastname" type="text" value="<?php echo $row['last_name']; ?>" name="last_name" ><br>
<label class="lastlabel">Last Name:</label>

<h2 class="name" style="font-size:24px;">Institute</h2>
<input type="text" value="<?php echo $row['Institute']; ?>" name="company" class="company" >

<h2 class="name"  style="font-size:24px;">Email</h2>
<input type="email"  name="email" class="email" value="<?php echo $row['email']; ?>" >

<h2 class="name">Phone</h2>
<input type="text" name="area_code" class="area_code" value="<?php echo $row['area_code']; ?>"><br>
<label class="code" style="color:#FFFFFF;">Area code</label> 
<input type="text" name="phone_number" class="phone_number" value="<?php echo $row['phone_number']; ?>" ><br>
<label class="phone">Phone Number</label>

<h2 class="sub">Subject</h2>
 <select class="select" name="subject">
        <option value="">----choose any option</option>
		<option value="civil-enginerring" <?php if($row['subject'] =="civil-enginerring"){ ?> selected="selected" <?php } ?>>civil-enginerring</option>
		<option value="Medical" <?php if($row['subject'] =="Medical"){ ?> selected="selected" <?php } ?>>Medical</option>
		<option value="computer-science" <?php if($row['subject'] =="computer-science"){ ?> selected="selected" <?php } ?>>computer-science</option>

</select>
<h2 class="ge" align="center";>Gender</h2>
<div align="center" style="color:#FFFFFF; font-size:24px;"><input type="radio" name="gender" value="Male" class="gen" <?php if($row['gender'] =="Male"){ ?> checked <?php } ?>>&nbsp;Male 
&nbsp;
<input type="radio" name="gender" value="Female" class="gem" <?php if($row['gender'] =="Female"){ ?> checked <?php } ?>>&nbsp;Female
</div>
<br><br>
<input type="submit" name="submit" value="Update" class="button">

</form>
</div>
</body>
</html>
<style type="text/css">
*{ padding:0; margin:0;}
.hhh{ color:#FFFFFF;}
body{ background-image:url(images1997-5c2f99436aa28-1024x683.jpg); background-position:center; background-size:cover; font-family:Arial, Helvetica, sans-serif; margin-top:40px;}
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
.btn {
    text-align: right;
    margin-right: 20px;
    padding-bottom: 20px;
	}
.btn a {
    text-decoration: none;
    border: solid;
    padding: 10px;
    background-color: aquamarine;
    color: firebrick;
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
</style>
