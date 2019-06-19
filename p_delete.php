<?php


include ("db_con.php");


$pid =$_REQUEST['pid'];






$sql = mysqli_query($con, "DELETE FROM patients WHERE pid='$pid'");





?>


<script type="text/javascript">
	

alert("Patient Name Deleted Successfuly")

window.location="patient.php";


</script>