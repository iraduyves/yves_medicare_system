<?php
require('comfig.php');
//if Someone clicked on regster on regiter form
if(isset($_POST['register'])){
   echo "Button clicked";
   $name = $_POST['name'];
   $email = $_POST['email'];
   $pass = password_hash($_POST["password"],PASSWORD_DEFAULT);
//   $cpass = $_POST['cpassword'];
   $gender=$_POST['gender'];
   $district=$_POST['district'];
   $department=$_POST['department'];
   $userType = $_POST['user_type'];
   $date=$_POST['date'];
   $query="INSERT INTO user_registration_form (user_name,email,gender,district,department,user_type,password)VALUES('$name','$email','$gender','$district','$department','$userType','$pass')";
   $save=mysqli_query($conn,$query);
   if($save)
   {
      echo "Saved successfully";
   }
   else{
      echo "Not saved in db".mysqli_error($conn);
   }
}
if(isset($_POST['login']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
   $user_type=$_POST['user_type'];
   $password=$_POST['password'];
   $query="SELECT * from user_registration_form WHERE email='$email'";
   $save=mysqli_query($conn,$query);
   if(mysqli_num_rows($save) > 0){
    
          $row = mysqli_fetch_array($save);
    
          if(($row['user_type'] == 'admin') && password_verify($password,$row['password'])){
            echo "sucessfully1";
             $_SESSION['admin_name'] = $row['name'];
             $_SESSION['admin_id'] = $row['use_id'];
             header("Location: http://localhost/project/admin/admin.php");
    
          }
          elseif(($row['user_type'] == 'user') && password_verify($password,$row['password']))
          {
    
             $_SESSION['user_name'] = $row['name'];
             $_SESSION['user_id'] = $row['use_id'];
             header("Location: http://localhost/project/landingpage/landingpage.php");
             echo 'sucessfully2';
    
          }
         
       }else{
          $error[] = 'incorrect email or password!';
          echo "Not saved in db".mysqli_error($conn);
        }
}



?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <title>login </title>
    <link rel="stylesheet" href="loginn.css">
 </head>
 <body>
 <div class="form-container">
    <div class="overlay">

    </div>
    
  
    <div class="login">
        <div class="back">
            <a href="../landingpage/landingpage.php"><input type="submit"name="submit" class="send-btn"value="back" required></a>
        </div>
    
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn"onclick="login()">Login In</button>
                <button type="button" class="toggle-btn"onclick="register()">Registration</button>
            </div>
        <form  id="login" method="post" action="" class="form">
       
            <input type="text" name="name" class="input-field"placeholder=" name" required>
            <input type="text" name="email" class="input-field"placeholder=" email" required>
            <input type="password" name="password" class="input-field"placeholder="Enter password" required>
            <input type="checkbox" name="cpassword" class="check-box"><span>Remember Password</span>
            <select name="user_type" name="user_type" class="input-field" placeholder="field" id="" > User type
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <button type="submit" name="login"class="submit-btn"onclick="showalert()">Login</button>
        </form>    

        <form id="register" action="" class="form" method="POST">
           <input type="text" name="name" class="input-field"placeholder="user name" required >
            <input type="text" name="email" class="input-field"placeholder="email" required>
            <input type="date" name="date" class="input-field"placeholder="DD/MM/YY" required>
            <select name="gender" id=""class="input-field" placeholder="Gender">Gender
                <option value="">Gender</option>
                <option value="male">male</option>
                <option value="female">female</option>
                <option value="others">others</option>
            </select>
            <select name="district" id=""class="input-field" placeholder="District">district
                <option value="gasabo">Gasabo</option>
                <option value="kicukiro">Kicukiro</option>
                <option value="nyarugenge">Nyarugenge</option>
                <option value="other">others</option>
            </select>
            <select name="department" id=""class="input-field" placeholder="field">field
                <option value="diabets">Diabets</option>
                <option value="cancer">canser</option>
                <option value="hypotension">hypetension</option>
                <option value="others">others</option>
            </select>
            <select name="user_type" class="input-field" placeholder="field"id="" >User type
                <option value="user">user</option>
                <option value="admin">admin</option>
            </select>
            <input type="password" class="input-field"placeholder="Enter password" required name="password">
            <input type="password" class="input-field"placeholder="confirm password" required name="cpassword">  
            <input type="checkbox" class="check-box"><span>I accept to th terms and condition</span>
            <button type="register"class="submit-btn"name="register">REGISTER</button>
        </form>
        </div>
    </div>
 </div>
    <script>
        var x=document.getElementById("login");
        var y=document.getElementById("register");
        var z=document.getElementById("btn");
        function register(){
            x.style.left="-40rem";
            y.style.left="5rem";
            z.style.left="7rem"
        }
        function login(){
            x.style.left="5rem";
            y.style.left="40rem";
            z.style.left="0"
        }
    </script>
 </body>
 </html>