<!doctype html>
<html lang="so">
<title>
	
 Home


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
<li><a href="patient.php"> Patient</a> </li>
<li><a href="emp_report.php"> Emp_Report </a> </li>
<li><a href="p_report.php"> P_Report </a> </li>
<li><a href="./calculator/calculator.php"> Calculator </a> </li>
</ul>
</div>
</div>
<div class="container" light>
<div class="wrapper">
<div id="slider_image">
<img src="Images/p3.jpg" width="930" height="323" onmouseover="this.src='Images/p2.jpg'" onmouseout="this.src='Images/p3.jpg'">
</div>
</div>
</div>
<div class="container light">
<div class="wrapper">
<div id="text_image">
<img src="Images/ve.png" width="120" height="120" onmouseover="this.src='Images/ve.png'" onmouseout="this.src='Images/ver.png'">
</div>
<h3> Welcome To Patient System</h3>
<div id="munye">
<p></p>
</div>
</body>
</html>