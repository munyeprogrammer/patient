<?php




include ("db_con.php");






?>



     
<style type="text/css">
  

body{

margin: auto 0;

}
.container{
  width: 80%;
  margin-left: 10%;
  padding-top: 5%;
  padding-bottom: 5%;
}

h2{
  background: black;
  color: orange;
  padding: 3px;
  width: 40%;
  margin-left: 30%;
  text-align: center;

}

.wrapper{
  background: black;
  width: 50%;
  padding: 15px;
  margin-left: 25%;
}
.input_text{
  width: 80%;
  font-size: 20px;
  margin-left: 10%;
  padding: 5px;

}

.btn{
  width: 80%;
  font-size: 20px;
  margin-left: 10%;
  margin-top: 2%;
  background: orange;
  color: white;
  border: 1px solid orange;
}

.alert{
    color:white;
    text-align:center;
    margin-top:2%;
    background:red;

}




</style>




<!DOCTYPE html>







<html>
<head>
	<title>Login Page</title>

<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

</head>



<body>


  
  	
   <form action="" method="post">

   	<div class="container">
    <div class="wrapper">

      <h2>Login</h2>
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Username</label><br>
      <input type="text" name="username" class="input_text" placeholder="Username....." autocomplete="off" required="true"> 
     <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Password</label><br>
      <input type="password" name="password" class="input_text" placeholder="Password....." autocomplete="off" required="true">
      <input type="submit" name="sign_in" class="btn" value="Login">



      <?php

if (isset($_POST['sign_in'])) {
    $sql=mysqli_query($con, "select * from users where 
    user_name='".$_POST['username']."'and
    user_password='".$_POST['password']."'");
    if (mysqli_num_rows($sql)>0){
        $row=mysqli_fetch_array($sql);
         $type=$row['type'];
         switch($type){
         case "User":

        
        $_SESSION['user_name']=$_POST['username'];
        
      

      header("location:home.php");

      break;
      
    
       default:


      


    }

    }
    else{
       echo "<div class='alert'><strong>Check your username and password</strong></div>";
}
}
?>




      
   </form>

   


  

 </div>
</div>












</body>
</html>