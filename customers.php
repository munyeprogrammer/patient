<?php

include ("db_con.php");

if (isset($_POST['create'])) {

  $emp_name = htmlentities(mysqli_real_escape_string($con, @$_POST['emp_name']));
  $address = htmlentities(mysqli_real_escape_string($con, @$_POST['address']));
  $section = htmlentities(mysqli_real_escape_string($con, @$_POST['section']));
  $gender = htmlentities(mysqli_real_escape_string($con, @$_POST['gender']));
  $phone = htmlentities(mysqli_real_escape_string($con, @$_POST['phone']));
   
  if ($emp_name =="") {

      echo "<script>alert('We can not verify your name')</script>";
      # code...
    }

     $insert = "insert into employee(emp_name,address,section,gender,phone)values('$emp_name','$address','$section','$gender','$phone')";

     $query = mysqli_query($con, $insert);

     if ($query) {

         
          echo "<script>alert('Congratulation $emp_name your employee name has been created successfully')</script>";
              
               echo "<script>window.open('employee.php','_self')</script>";

       }



        else
       {

          echo "<script>alert('Registeration of Employee failed, try again!')</script>";
              
         echo "<script>window.open('employee.php','_self')</script>";


       }



         

     }











?>

<style type="text/css">
 

</style>


<!doctype html>
<html lang="so">
<title>
	
	 Patient Registeration

</title>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="st.css">
<script src="jquery.js" type="text/javascript"></script>
<script src="jquery.cycle.all.js" type="text/javascript"></script>
<script type="text/javascript">
$(document).ready(function()
{
$('#slider_image').cycle('fade);
}
);
</script>
</head>
<body>
<div class="container dark ">
<div class="wrapper dark" id="top_div">
<div id="top_left">
</div>
<div id="top_right">
<div id="clear">
</div>
</div>

</div>
<div class="container light">
<div class="wrapper">
<div id="logo_left">
<img src="Images/image.png" width="200" height="126">
</div>
<div id="logo_right">
</div>
<div id="clear">
</div>
</div>
</div>
<div class="container dark">
<div class="wrapper">
<ul>
<li><a href="home.php"> Home </a> </li>
<li><a href="employee.php"> Employee</a> </li>
<li><a href="patient.php"> Customer</a> </li>
<li><a href="calculator.php"> Calculator </a> </li>
</ul>
</div>
</div>
<div class="container" light>
<div class="wrapper">
<div id="slider_image">
<style type="text/css">
  
  .munye{
  width: 100%;
  margin-left: 5%;
  padding-top: 5%;
  padding-bottom: 5%;
}

h2{
  background: black;
  color: orange;
  padding: 3px;
  width: 60%;
  margin-left: 25%;
  text-align: center;

}

.ali{
  background: black;
  width: 50%;
  padding: 15px;
  margin-left: 20%;
}
.input_text{
  width: 100%;
  font-size: 20px;
  margin-left: 10%;
  padding: 5px;

}

.create{
  width: 100%;
  font-size: 20px;
  margin-left: 10%;
  margin-top: 2%;
  background: orange;
  color: white;
  border: 1px solid orange;
}

.tbl{
  
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-collapse: collapse;
  font-size: 16px;
  margin-top: -45px;
  padding: 5px;
  width: 100%; 
  border-collapse: collapse;

 




}





.tbl td{

border-right: 1px solid black;
border-bottom: 1px solid black;
padding: 5px;
font-weight: bold;

}



.tbl tr:nth-child(even)
{


background:black;
color: white;


}


.tbl tr:nth-child(odd)

{

 background: grey;
 color: black;

}

#row{

 
 background:white;
 color: black;
 opacity: 1;



}


 






</style>
 <form action="" method="post">

    <div class="munye">

      

    

    <div class="ali">

      <h2>Create New Patient</h2>
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Patient Name</label><br>
      <input type="text" name="cname" class="input_text" placeholder="Patient Name" autocomplete="off" required="true">

   

   
      
     <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Phone</label><br>
      <input type="text" name="phone" class="input_text" placeholder="+25261" autocomplete="off" required="true">


       
     <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Address</label><br>
      <input type="text" name="address" class="input_text" placeholder="+25261" autocomplete="off" required="true">



       <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Gender</label><br>
      
      <select class="input_text" name="gender" required="true">


        <option value=""> Select Gender </option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
        

      </select>

  


    
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Phone Number</label><br>
      <input type="text" name="phone" class="input_text" placeholder="+252612454545" autocomplete="off" required="true"><br>

      <input type="submit" name="create" class="create" value="Create">
      
   </form>



     
  

 </div>
</div>


</div>
</div>
</div>
<table class="tbl">
     
    <tr id="row">
      

    <td>Employee ID</td>
    <td>Employee Name</td>
    <td>Address</td>
    <td>Section</td>
    <td>Gender</td>
    <td>Phone</td>
    <td>Edit</td>
    <td>Delete</td>
   




    </tr>




   <?php


     $sql = mysqli_query($con,"Select * from employee");


    while($row=mysqli_fetch_row($sql))

    {


       echo "<tr>";

       echo "<td>$row[0]</td>";
       echo "<td>$row[1]</td>";
       echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
         echo "<td>$row[4]</td>";
          echo "<td>$row[5]</td>";

      ?>

      <td><a href="emp_edit.php?eid=<?php echo $row[0];?>">
      <input type="submit" name="edit" value="Edit" class="edit">
      </a>
     </td>

      <td><a href="emp_delete.php?eid=<?php echo $row[0];?>" onclick="return confirm('are you sure to Delete <?php echo $row[1];?>')">
        <input type="submit" name="delete" value="Delete" class="delete">
      </a></td>

      

      

    


     </tr>


     
     <?php

    }


    ?>



<div class="container light">
</div>

</body>
</html>