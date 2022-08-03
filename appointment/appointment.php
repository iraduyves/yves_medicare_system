<?php
require('comfig.php');
//if Someone clicked on regster on regiter form
if(isset($_POST['book'])){
   echo "Button clicked";
   $name = $_POST['uname'];
   $email = $_POST['uemail'];
   $contact=$_post['ucontact'];
   $location = $_POST["district"];
   $department=$_POST['department'];
   $date=$_POST['date'];
   $time=$_POST['utime'];
   $message = $_POST['umessage'];
   $query="INSERT INTO user_appointment_form (user_name,user_email,user_contact,user_location,user_department,date,time,message)VALUES('$name','$email','$contact','$location','$department','$date','$time','$message')";
   $save=mysqli_query($conn,$query);
   if($save)
   {
      //echo "booked appointment sucessfully!";
   }
   else{
      echo "Not booked!!!".mysqli_error($conn);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="./appointment.css">
    
</head>
<body>
    <!-- header-->
     <!-- header-->
     <header class="header">
        <a href=" #  "class="logo"><i class="fas fa-heartbeat">Yves MEDICAL CARE</i></a>
        <nav class="navbar">
            <a href="../landingpage/landingpage.php">Home</a>
            <a href="#service">Service</a>
            <a href="#about">About</a>
            <a href="#doctors">Doctors</a>
            <a href="#blogs">Blogs</a> 
            <a href="#contact">Contact </a>
            <a href="../login/loginn.php">Sign in </a>
        </nav>
        <div id="menu-btn" class="fas fa-align-justify"></div>
    </header>
    <head>
        <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
      </head>
      <main id="wrapper">
          <div class="back">
            <a href="../landingpage/landingpage.html"><input type="submit"name="submit" class="send-btn"value="back" required></a>
          </div>
        <div class="container">
          <form action="#" id="appoint-form" method="POST">
            <h1 id="form-head">Book Your Appointment</h1>
            <label for="select city" id="city" class="format">SELECT CITY </label>
            <select name="district" id="dropdown">
              <option value="select your city"class="select" disabled selected>Select Your district </option>
              <option value="gasabo">Gasabo </option>
              <option value="kicukiro">kicukiri </option>
              <option value="nyarugenge>nyarugenge </option>
            </select>
            <label for="date and time" id="date-time" class="format">SELECT DATE AND TIME </label>
            <input type="date" id="date" name="date" class="dtt" value="2020-06-14" min="2020-06-13" max="2020-12-31">
            <input type="time" id="time" name="utime" min="8:00" max="20:00" value="8:00" class="dtt" required>
            <small id="note">(Note:Visiting hours are 8am to 8pm)</small>
            <label for="personal details" id="p-details" class="format">PERSONAL DETAILS</label>
            <input type="number" id="name" class="person-detail" placeholder="ID*" name="uid" maxlength="20" required>
            <input type="text" id="name" class="person-detail" placeholder="Full name*" name="uname" maxlength="20" required>
            <input type="tel" id="mobile" class="person-detail" name="ucontact" placeholder="Mobile number*" maxlength="10" required>
            <input type="email" placeholder="Email(optional)" id="email" class="person-detail" name="uemail" required>
            <textarea id="message" name="umessage" rows="5" cols="3" placeholder="Type text message" class="person-detail"></textarea>
            <label for="select city" id="city" class="format">SELECT Field </label>
            <select name="department"id="dropdown">
              <option value="select your city"class="select" disabled selected>Select Your field </option>
              <option value="diabets">diabets </option>
              <option value="canser">canser </option>
              <option value="hypotension">hypetension </option>
            </select>
            <button name="book" type="submit" id="submit" value="Submit" onclick="">Submit </button>
      
          </form>
        </div>
      </main>
</body>
</html>