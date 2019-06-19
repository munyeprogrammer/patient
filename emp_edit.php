<?php

include ("db_con.php");

$eid=@$_REQUEST['eid'];
$sql=mysqli_query($con,"select * from employee where emp_id='$eid'");
$row=mysqli_fetch_array($sql);

?>

<style type="text/css">
 

</style>


<!doctype html>
<html lang="so">
<title>
	
	Edit Employee

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
<form>
<input id="textstyle" type="text" name="textbox">
<input id="button" type="button" name="search" value="Search">
</form>
</div>
<div id="clear">
</div>
</div>
</div>
<div class="container dark">
<div class="wrapper">
<ul>
<<li><a href="home.php"> Home </a> </li>
<li><a href="employee.php"> Employee</a> </li>
<li><a href="patient.php"> Patient</a> </li>
<li><a href="calculator.php"> Emp_Report </a> </li>
<li><a href="calculator.php"> P_Report </a> </li>
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

      <h2>Edit Employee</h2>

      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Employee Name</label><br>
      <input type="text" name="emp_id" class="input_text"  autocomplete="off" required="true" value="<?php echo $row[0];?>">

      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Employee Name</label><br>
      <input type="text" name="emp_name" class="input_text"  autocomplete="off" required="true" value="<?php echo $row[1];?>">

   

   
      
     <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Address</label><br>
      <input type="text" name="address" class="input_text"  autocomplete="off" required="true" value="<?php echo $row[2];?>" >

   


     
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Section</label><br>
      
      <select class="input_text" name="section" required="true">


      <option>

      <?php  echo $row[3]; ?>

      </option>


      <option>Bacholer</option>
        <option>Master</option>
        <option>PHD</option>



        

      </select>


       <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Gender</label><br>
      
      <select class="input_text" name="gender" required="true">


        <option>
        <?php  echo $row[4]; ?>
        </option>
        <option>Male</option>
        <option>Female</option>
        <option>Others</option>
        

      </select>

  


    
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Phone Number</label><br>
      <input type="text" name="phone" class="input_text" value="<?php echo $row[5];?>" autocomplete="off" required="true"><br>

      <input type="submit" name="update" class="create" value="Update">


      <?php

if (isset($_POST['update'])) {



if (empty($_POST['emp_name'])) {


 

 echo '<p>Please Enter Employee Name</p>';
}

else

    {

    $emp_name = @$_POST['emp_name'];
    $address = @$_POST['address'];
    $section=@$_POST['section'];
    $gender=@$_POST['gender'];
    $phone = @$_POST['phone'];

$sql = mysqli_query($con,"Update employee SET 
emp_name='".$_POST['emp_name']."',
address='".$_POST['address']."',
section='".$_POST['section']."',
gender='".$_POST['gender']."',phone='".$_POST['phone']."' where emp_id='".$_POST['emp_id']."'")or die(mysqli_error($con));

echo "<script>


alert('Employee has been updated successfuly')
window.location='employee.php'
 

</script>";



}




}



?>
      
   </form>



     
  

 </div>
</div>


</div>
</div>
</div>



   


<div class="container light">
</div>

</body>
</html>