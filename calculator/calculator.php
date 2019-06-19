<?php


?>

<style type="text/css">
 

</style>


<!doctype html>
<html lang="so">
<title>
	
Calculator

</title>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../st.css">
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
<img src="../Images/image.png" width="200" height="126">
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
<li><a href="../home.php"> Home </a> </li>
<li><a href="../employee.php"> Employee</a> </li>
<li><a href="../patient.php"> Patient</a> </li>
<li><a href="../emp_report.php"> Emp_Report </a> </li>
<li><a href="../p_report.php"> P_Report </a> </li>
<li><a href="../calculator/calculator.php"> Calculator </a> </li>
</ul>
</div>
</div>
<div class="container" light>
<div class="wrapper">
<div id="slider_image">

<link rel="stylesheet" type="text/css" href="../calculator/styl.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
		
 
		<div id="container">
			<div id="calculator">
				<div id="result">
					<div id="history">
						<p id="history-value"></p>
					</div>
					<div id="output">
						<p id="output-value"></p>
					</div>
				</div>
				<div id="keyboard">
					<button class="operator" id="clear">C</button>
					<button class="operator" id="backspace">CE</button>
					<button class="operator" id="%">%</button>
					<button class="operator" id="/">&#247;</button>
					<button class="number" id="7">7</button>
					<button class="number" id="8">8</button>
					<button class="number" id="9">9</button>
					<button class="operator" id="*">&times;</button>
					<button class="number" id="4">4</button>
					<button class="number" id="5">5</button>
					<button class="number" id="6">6</button>
					<button class="operator" id="-">-</button>
					<button class="number" id="1">1</button>
					<button class="number" id="2">2</button>
					<button class="number" id="3">3</button>
					<button class="operator" id="+">+</button>
					<button class="empty" id="empty"></button>
					<button class="number" id="0">0</button>
					<button class="empty" id="empty"></button>
					<button class="operator" id="=">=</button>
				</div>
			</div>
		</div>
		<script src="script.js"></script>
 

	</body>
</html>