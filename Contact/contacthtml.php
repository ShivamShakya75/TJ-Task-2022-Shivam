<!DOCTYPE html>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="contact.css">
    <link rel="stylesheet" type="text/css"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <title>Contact | Shivam Shakya | Portfolio</title>
</head>
<body>
   
  

    <div class="firstpage">
        <div class="hori-box">
            <span class="stranger intro-center">Don't Be A Stranger</span><br>
            <span class="intro-contact ">Contant Me.</span>
        </div>
    </div>
    <div class="page2">
        <div class="secondpage">
            <div class="big-text">
                <div class="title">Let's Work Together.</div>
                <div class="drop">Drop Me A Line.</div>

            </div>
            <div class="contact">
                <div class="mail">
                    <span class="bolder">Email Address</span><br>
                    <span>shivamshakya13@outlook.com</span>
                </div>
                <div class="phone">
                    <span class="bolder">Phone Number</span><br>
                    <span>+917988728871</span>
                </div>
                <div class="address">
                    <span class="bolder">My Address</span><br>
                    <span>Manesar, Gurugram, Haryana, India</span>
                </div>
            </div>
        </div>
    </div>

    <div class="page3">
        <div class="photo">
            <div class="picture">
                <img class="sector" src="contactus1.jpg" alt="" srcset="">
            </div>


        </div>
        <div class="form">
            <h1>Contact Me</h1>
            <div class="hori-line"></div>
            <form action="" method="POST">
                <div class="inputs">
                    <div class="inputname inputdesign">
                        <input  type="text" required="required" name="username">
                        <span>Full Name</span>
                    </div>
                    <div class="inputphone inputdesign">
                        <input class="phone-form" type="text" required="required" name="usermobileno">
                        <span>Phone No.</span>
                    </div> 
                   
                </div>

                <div class="inputs2alone">
                    <div class="inputmail inputdesign">
                        <input class="email-form" type="text" required="required" name="useremail">
                        <span>Email Address</span>  
                    </div> 
                </div>

                <div class="textarea">
                    <textarea class="message-box" id="" cols="65" rows="10" required="required" name="textmessage"></textarea>
                    <span>Message</span>
                </div>
                <div class="container-submit">
                <div class="button-container">
                <!-- <button class="button" name="Submit" type="submit">Submit</button> -->
                <input type="submit" class="button" name="submit" value="Submit"/> 
            </div>
        </div>
        </form>
            <div class="vertical-line"></div>
        </div>
    </div>

    <footer>
        <div class="page7">
            <div class="upperfooter">
            <div class="heading">
                Let's <br> Get <br> Creative
            </div>
            <div class="yellow-line"></div>
            <div class="footer-email ml50">
                <div>Drop me a</div><br>
                <div class="bt5">shivamshakya13@outlook.com</div>
            </div>
            <div class="footer-contact ml50">
                <div>Contact</div><br>
                <div class="bt5">+917988728871</div>
            </div>
            <div class="footer-address ml50">
                <div>Address</div><br>
                <div class="bt5">Manesar, Gurugram, India</div>
            </div>
        </div>

        <div class="socialize">
            
            <div class="footer-linkedin socialize-animation ">
                <a href="https://www.linkedin.com/in/shivam-shakya-5a760122a/"><i class="fa-brands fa-linkedin"></i></a>
            </div>
            <div class="footer-twitter ml15 socialize-animation">
                <a href="https://twitter.com/ShivamS22376172"><i class="fa-brands fa-twitter"></i></a>
            </div>
            <div class="footer-github ml15 socialize-animation">
                <a href="https://github.com/ShivamShakya75"><i class="fa-brands fa-github"></i></a>
            </div>
            <div class="instagram ml15 socialize-animation">
                <a href="https://www.instagram.com/__shivam_shakya/"><i class="fa-brands fa-instagram"></i></a>
            </div>
    </div>
        <div class="sign">shivamshakya...  </div>
        </div>
    </footer>


    
</body>
</html> 


<?php

use PHPMailer\PHPMailer\PHPMailer;

include 'connect.php'; 

if(isset($_POST['submit'])){

    $fullname = $_POST['username'];
    $phoneno = $_POST['usermobileno'];
    $email = $_POST['useremail'];
    $textarea = $_POST['textmessage'];


    $insertquery = "INSERT INTO `portfolio-table`(`Name`, `Phone no.`, `Email`, `Message`) VALUES ('$fullname','$phoneno','$email','$textarea')"; 

    $finalinsert = mysqli_query($connection, $insertquery);

    if($finalinsert){
        ?>
        <script>alert("Thanks for Message! I'll Contact soon..");</script>
        <?php
    }
    else{
        ?>
        <script>alert("Message Not Sent! Technical Error!");</script>
        <?php
    }

   
    $email="shivamshakya1770@gmail.com";
    $subject = "New Message  |  Portfolio";
    $body="Recieve New message from New User";
    $Header = "From:shivamshakya1770@gmail.com";

    mail($email, $subject, $body, $Header);
        




};

?>

