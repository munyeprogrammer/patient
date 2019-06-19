<?php

include ("db_con.php");


?>

<style>

.tbl{
  
  border-top: 1px solid black;
  border-left: 1px solid black;
  border-collapse: collapse;
  font-size: 16px;
  padding: 5px 0;
  width: 100%; 
  border-collapse: collapse;

 




}





.tbl td{

border-right: 1px solid black;
border-bottom: 1px solid black;
padding: 5px;
font-weight: bold;

}

h1{
    color:black;
    text-align:center;
}







</style>

<script>


function printContent(el){
	var restorepage = document.body.innerHTML;
	var printcontent = document.getElementById(el).innerHTML;
	document.body.innerHTML = printcontent;
	window.print();
	document.body.innerHTML = restorepage;
}
</script>





<body>


<div id="div1">
<h1>Report About Patient</h1>
<table class="tbl">
     
    <tr id="row">
      

    <td>Patient ID</td>
    <td>Patient Name</td>
    <td>Phone</td>
    <td>Address</td>
    <td>Gender</td>
   




    </tr>




   <?php


     $sql = mysqli_query($con,"Select * from patients");


    while($row=mysqli_fetch_row($sql))

    {


       echo "<tr>";

       echo "<td>$row[0]</td>";
       echo "<td>$row[1]</td>";
       echo "<td>$row[2]</td>";
        echo "<td>$row[3]</td>";
         echo "<td>$row[4]</td>";

      ?>


      

      

    


     </tr>


     
     <?php

    }


    ?>

    </table>

    </div>

    


    <div id="div2">
    <button onclick="printContent('div1')" class="btn">Print</button>
    <button class="back"><a href="patient.php">Back</button></a>
    <div>

    <style>

    .btn{
        width:30%;
        background:orange;
        color:white;
        border:1px solid orange;
        font-size:20px;
        margin-left:35%;
        margin-top:2%;
    }

    .back{
        width:30%;
        background:blue;
        color:white;
        border:1px solid blue;
        font-size:20px;
        margin-left:35%;
        margin-top:2%;
    }

    a:link{
        text-decoration:none;
        color:white;
    }

    </style>

 </body>