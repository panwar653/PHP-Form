<?php

if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con= mysqli_connect($server,$username,$password);

    if(!$con){
        die("connection to this database is failed due to ".mysqli_connect_error());
    }

   // echo "success connecting to db harsh  panwar  ";

     $name=$_POST['name'];
     $gender=$_POST['gender'];
     $age=$_POST['age'];
     $email=$_POST['email'];
     $phone=$_POST['phone'];
     $desc=$_POST['desc'];
     $sql= "INSERT INTO `hackathon details`.`hey` ( `name`, `age`, `gender`, `email`, `phone`, `other`, `dt`) VALUES ( '$name ', '$age', '$gender', '$email', '$phone', '$desc', current_timestamp());";

     echo $sql;


     if($con->query($sql)==true){
        echo "succeful inserted";
     }

     else{
        echo "ERROR:$sql <br> $con->error";
     }
    $con->close();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Harsh</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <img class="bg" src="bg7.jpg" alt="Global Institute of Technology">
    <div class="container">
        <h1>Welcome to Global Institute of Technology for Hackathon </h1>
        <p>Please fill this form to participate in this event by taking a step ahead </p>
        <p class="submitmsg">Thanks for submitting this form, your response has been recorded </p>

        <form action="index.php" method="post">
        <input type="text" name="name" id="name" placeholder="Enter your name">
        <input type="text" name="age" id="age" placeholder="Enter your age">
        <input type="text" name="gender" id="gender" placeholder="Enter your gender ">
        <input type="email" name="email" id="email" placeholder="Enter your email">
        <input type="phone" name="phone" id="phone" placeholder="Enter your number">
        <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Enter your information "></textarea>
        <button class="btn" >Submit</button>
        

    </form>
    </div>
    <script src="index.js"></script>
</body>
</html>