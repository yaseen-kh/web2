<?php
$con=mysqli_connect('localhost','root','')or die(mysql_error($con));
mysqli_select_db($con,'project_one') or die(mysqli_error($con));

?>


<html>
<head>

</head>

<div class="btn" align="right"><button class="rr"><a  href="index.php">Add Record</a></button></div>


  
<table border="1" align="center">
<h1 align="center">Retrieve Data from Database</h1>

   <tr>
   <th>S.no</th>
   <th>First Name</th>
   <th>Last Name</th>
   <th>Institute</th>
   <th>Email</th>
   <th>Area code</th>
   <th>Phone Number</th>
   <th>Subject</th>
   <th>Gender</th>
   <th colspan="2" style="text-align:center">Action</th>
   
  </tr>
  


<?php
$get_data = mysqli_query($con, "select * from students order by id ASC");
while ($row = mysqli_fetch_array($get_data))
{?>
 <tr>
          	  <td><?php echo $row['id']; ?></td> 	  
          	  <td><?php echo $row['first_name']; ?></td> 
          	  <td><?php echo $row['last_name']; ?></td> 
          	  <td><?php echo $row['Institute']; ?></td> 
          	  <td><?php echo $row['email']; ?></td> 
          	  <td><?php echo $row['area_code']; ?></td> 
          	  <td><?php echo $row['phone_number']; ?></td> 
          	  <td><?php echo $row['subject']; ?></td> 
          	  <td><?php echo $row['gender']; ?></td>
              <td style="text-align:center;">
              <button style="width:70px;" class="up" ><a href="update.php?id=<?php echo $row['id'] ?>">Update</a></button>
              </td>
              <td style="text-align:center;">
              <button style="width:50px;" class="de"> <a href="delete.php?id=<?php echo $row['id'] ?>">Delete</a></button>
              </td>
</tr>

<?php } ?>

</table>

</body>
</html>
<style>
  .de{background-color:red;
    padding: 3px;
    border-radius: 5px;
  }


.de a{color:white;
}


*{ padding:0; margin:0;}

.up{background-color: green;
    padding: 3px;
    border-radius: 5px;
}
.up a{color:white;

}
.rr{position:relative;
    right: 20px;
    top: 15px;
    padding: 10px;
    font-size: 16px;
    border-radius: 10px;

}
.rr:hover{background-color:#6699FF;
color:#FF0000; }

table {
  position: relative;
  left: 56px;
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
a {
    /* text-align: center; */
    text-decoration: none;
}
</style>

