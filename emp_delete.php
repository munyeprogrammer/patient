<?php


include ("db_con.php");


$emp_id =$_REQUEST['eid'];






$sql = mysqli_query($con, "DELETE FROM employee WHERE emp_id='$emp_id'");





?>


<script type="text/javascript">
	

alert("Employee Name Deleted Successfuly")

window.location="employee.php";


</script>