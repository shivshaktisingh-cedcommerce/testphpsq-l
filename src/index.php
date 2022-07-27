<?php
include "connection.php";

 if(isset($_POST['submit'])){
     $name=$_POST['name'];
     $email=$_POST['email'];
     $contact=$_POST['contact'];
     $password=$_POST['password'];
    
     
     $check = "SELECT * FROM user WHERE email = '$email'";
     
     $select = mysqli_query($conn,$check);
      if(mysqli_num_rows($select) != 0) {
      $a='This username already exists';
      }
     else {
        $query = "INSERT into user(`name`,`mobile`,`email`,`password`) VALUES('$name','$contact','$email','$password')";
        $result = mysqli_query($conn,$query);
       $a ="You have successfully registered";
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
    <link rel = "stylesheet" href="index.css">
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
    <input type="text" placeholder="name" name="name"><br>
    <input type="text" placeholder="email" name="email"><br>
    <input type="text" placeholder="mobile" name="contact"><br>
    <input type="password" placeholder="password" name="password"><br>
    <input type="submit" value="submit" name="submit">
  
</form>
     </div>
     <div id="message">
     <?php
    echo $a;
    ?>
        </div>


</body>
</html>