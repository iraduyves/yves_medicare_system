<?php
require('comfig.php');
if(isset($_POST['book']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
   $password=$_POST['password'];
   $query="SELECT * from user_registration_form WHERE email='$email'";
   $save=mysqli_query($conn,$query);
   if(mysqli_num_rows($save) > 0){
    
          $row = mysqli_fetch_array($save);
    
    
          if( password_verify($password,$row['password']))
          {
    
             $_SESSION['user_name'] = $row['name'];
             $_SESSION['user_id'] = $row['use_id'];
             header("Location: http://localhost/project/appointment/appointment.php");
             echo "authonticated good! allowed to bookappointment!";
    
          }
         
       }else{
          $error[] = 'incorrect email or password!';
          echo "Not saved in db".mysqli_error($conn);
        }
}

?>
</br>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>yves MEDICAL CARE</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.css">
    <link rel="stylesheet" href="./landingpage.css">
    <script src="landingpage.js"></script>
</head>
<body>
    <!-- header-->
    <header class="header">
        <a href=" #  "class="logo"><i class="fas fa-heartbeat">Yves MEDICAL CARE</i></a>
        <nav class="navbar">
            <a href="#home">Home</a>
            <a href="#service">Service</a>
            <a href="#about">About</a>
            <a href="#doctors">Doctors</a>
            <a href="#book">book</a> 
            <a href="../contact/contact.php">Contact </a>
            <a href="../login/loginn.php">Sign in </a>
        </nav>
        <div id="menu-btn" class="fas fa-align-justify"></div>
    </header>
    <section class="home" id="home">
        <div class="row">
            <div class="image">
                <img src="../asset/homeimage1.jpg" alt="">
            </div>
            <div class="content">
                <h3 >We Take Care of your healthy</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                <a href="#" class="btn">Learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!-- icons section-->
    <section class="icon-container">
        <div class="icons">
            <i class="fas fa-user-md fa-3x ">
                <h3>250+</h3>
                <P>doctors at work</P>
            </i>
        </div>
        <div class="icons">
            <i class="fas fa-procedures fa-3x">
                <h3>255+</h3>
                <P>satified patients</P>
            </i>
        </div>
        <div class="icons">
            <i class="fas fa-hospital fa-3x">
                <h3>252+</h3>
                <P>availabe hospital</P>
            </i>
        </div>

    </section>
    <!--service section-->
    <section class="service" id="service">
        <h1 class="heading">our <span>Service</span></h1>
        <div class="box-container">
            <div class="box">
                <i class="fas fa-notes-medical fa-3x"></i>
                <h3>Free checkups</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-ambulance fa-3x"></i>
                <h3>24/7 Ambulance</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-heartbeat fa-3x"></i>
                <h3>Total Care</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-user-md fa-3x"></i>
                <h3>Proffesionaldoctors</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-comment-medical fa-3x"></i>
                <h3> ChartwithDoctors</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-microscope fa-3x"></i>
                <h3>Best Laboratory</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-capsules fa-3x"></i>
                <h3> Medecines</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
            <div class="box">
                <i class="fas fa-laptop-medical fa-3x"></i>
                <h3>Advanced Tech</h3>
                <P>Lorem ipsum dolor sit amet, consectetur adipiscing elit. </P>
                <a href="#" class="btn">Learn More <span class="fas chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!-- about section -->
    <section class="about" id="about">
        <h1 class="heading"><span>About</span>us</h1>
        <div class="row">
            <div class="image">
                <img src="../asset/doctor3.jpg" alt="">
            </div>
            <div class="content">
                <h3 >We Take Care of your healthy</h3>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. "</p>
                <a href="#" class="btn">Learn more<span class="fas fa-chevron-right"></span></a>
            </div>
        </div>
    </section>
    <!--doctor section-->
    {
        <section class="doctors" id="doctors">
            <h1 class="heading">Our <span>Doctors</span></h1>
            <div class="box-container">
                <div class="box">
                    <img src="../asset/doctor6.png" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="fab fa-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-github"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="../asset/doctor3.jpg" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="icon ion-social-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-github"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="../asset/doctor4.png" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="fab fa-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-github"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="../asset/doctor5.jpg" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="fab fa-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-github"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="../asset/doctor7.jpg" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="fab fa-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-github"></a>
                    </div>
                </div>
                <div class="box">
                    <img src="../asset/doctor3.jpg" alt="">
                    <h3>Yves IRADUKUNDA</h3>
                    <span>expert doctor</span>
                    <div class="share">
                        <a href="#"class="fab fa-facebook"></a>
                        <a href="#"class="fab fa-instagram"></a>
                        <a href="#"class="fab fa-twitter"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                        <a href="#"class="fab fa-linkedin"></a>
                    </div>
                </div>
            </div>
        </sction>
        <!-- booking section -->
        <section class="book" id="book">
             <h1 class="heading"><span>book</span> now!</h1>
             <div class="row">
                <div class="image">
                    <img src="../asset/doctor3.jpg" alt="">
                </div>
                <form action="" method="post">
                    <h3>book appointment<i class="fas fa-laptop-medical fa-1x"></i></h3>
                    <input type="text" name="name"placeholder="Your username"class="box">
                    <input type="email" name="email" placeholder="Your Email"class="box">
                    <input type="password" name="password" class="input-field"placeholder="Enter password" required>
                    <input type="date" name="date"class="box">
                    <input type="submit" name="book"value="Book now!"class="btn">
                </form>
             </div>
        </section>
       
        <!--footer section-->
        <section class="footer">
            <div class="box-containers">
                <div class="box">
                    <h3>Quick Links</h3>
                    <a href="#"><i class="fas fa-chevron-right"></i>Home</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>About</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Service</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Doctors</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>book</a>
                </div>
                <div class="box">
                    <h3>Our Services</h3>
                    <a href="#"><i class="fas fa-chevron-right"></i>Kemotherapy</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Radiotherapy</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Cardioloty</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>diagnosis</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Ambulance service</a>
                    <a href="#"><i class="fas fa-chevron-right"></i>Consultancy</a>
                </div>
                <div class="box">
                    <h3 id="contact">contact-info:</h3>
                    <a href="#"><i class="fas fa-phone"></i>+250782045468</a>
                    <a href="#"><i class="fas fa-phone"></i>+250725086514</a>
                    <a href="#"><i class="fas fa-envelope"></i>iradukundayves@gmail.com</a>
                    <a href="#"><i class="fas fa-envelope"></i>yvesmedicare@gmail.com</a>
                    <a href="#"><i class="fas fa-map-marker-alt"></i>Kimironko,Kigali,RWANDA,kg-st-6</a>
                </div>
                <div class="box">
                    <h3 id="contact">follow us:</h3>
                    <a href="#"><i class="fab fa-facebook"></i>Facebook</a>
                    <a href="#"><i class="fab fa-twitter"></i>Twitter</a>
                    <a href="#"><i class="fab fa-instagram"></i>Instagram</a>
                    <a href="#"><i class="fab fa-linkedin"></i>Linked In</a>
                    <a href="#"><i class="fab fa-youtube"></i>Youtube</a>
                    <a href="#"><i class="fab fa-pinterest"></i>Pinterest</a>
                </div>
            </div>
            <div   class="credit"><a href=" #  "class="logo"><i class="fas fa-heartbeat">Yves MEDICAL CARE</i></a> <i  class="fas fa-copyright fa-1x"></i><span id="copyrightt" > </span> all right are reserved</div>
        </section>
   
</body>
</html>