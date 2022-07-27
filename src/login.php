<?php
include "connection.php";

 if(isset($_POST['submit'])){
    
     $email=$_POST['email'];
    
     $password=$_POST['password'];
    
     
     $check = "SELECT * FROM user WHERE email = '$email' AND password = '$password' " ;
     $select = mysqli_query($conn,$check);  
     $count = mysqli_num_rows($select);
      if($count!= 0) {
         $b ='Welcome user';
      }
     else {
         $b = "wrong credentials";
     }
}
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel ="stylesheet" href="index.css">
</head>
<body>
<div id="nav">
        <div id="nav1">
         <div id="registration"><a href = "/">Registration</a></div>
          
            <div id="login"><a href = "login.php">Login</a></div>
           
        </div>
    </div>
<div id="registrationdiv">
    <form method="post" action="">
     <input type="text" placeholder="email" name="email"><br>
      <input type="password" placeholder="password" name="password"><br>
     <input type="submit" value="submit" name="submit">
</form>
</div>
<div id="message">
     <?php
    echo $b;
    ?>
        </div>
</body>
</html>