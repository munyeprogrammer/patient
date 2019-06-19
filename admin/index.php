<?php




include ("../db_con.php");






if (isset($_POST['create'])) {

  $username = htmlentities(mysqli_real_escape_string($con, @$_POST['username']));
  $password = htmlentities(mysqli_real_escape_string($con, @$_POST['password']));
  $fullname = htmlentities(mysqli_real_escape_string($con, @$_POST['full_name']));
  $type = htmlentities(mysqli_real_escape_string($con, @$_POST['type']));
   
  if ($username =="") {

      echo "<script>alert('We can not verify your name')</script>";
      # code...
    }


    




     $check_username = "select * from users where user_name='$username'";
     $run_username = mysqli_query($con, $check_username);

     $check = mysqli_num_rows($run_username);

      if ($check == 1) {


       echo "<script>alert('This username already exist, please try again!')</script>";
              


      echo "<script>window.open('../admin/index.php' , '_self')</script>";
      exit();
     }



     $insert = "insert into users(user_name,user_password,fullname,type)values('$username','$password','$fullname','$type')";

     $query = mysqli_query($con, $insert);

     if ($query) {

         
          echo "<script>alert('Congratulation $username, your account has been created successfully')</script>";
              
               echo "<script>window.open('../index.php','_self')</script>";

       }



        else
       {

          echo "<script>alert('Creation of User Account failed, try again!')</script>";
              
         echo "<script>window.open('../admin/index.php','_self')</script>";


       }



         

     }











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




</style>




<!DOCTYPE html>







<html>
<head>
	<title>Create New Account</title>

<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Tangerine">

</head>



<body>


  
  	
   <form action="" method="post">

   	<div class="container">

   		

   	

    <div class="wrapper">

      <h2>Create New User</h2>
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Username</label><br>
      <input type="text" name="username" class="input_text" placeholder="Username....." autocomplete="off" required="true">

   

   
      
     <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Password</label><br>
      <input type="password" name="password" class="input_text" placeholder="Password....." autocomplete="off" required="true">

   


     
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Type</label><br>
      
      <select class="input_text" name="type" required="true">


        <option value=""> Select a Type User</option>
        <option>Admin</option>
        <option>User</option>
        

      </select>

  


    
      
      <label style="color:white;font-size: 20px;padding: 5px;margin-left: 10%;">Full Name</label><br>
      <input type="text" name="full_name" class="input_text" placeholder="Full Name" autocomplete="off" required="true"><br>

      <input type="submit" name="create" class="btn" value="Create">
      
   </form>


  

 </div>
</div>












</body>
</html>