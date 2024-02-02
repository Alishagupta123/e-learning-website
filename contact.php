<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contact</title>

    <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style1.css">

</head>
<body>
    
<!-- header section starts  -->

<header class="header">

    <a href="home.php" class="logo"> <i class="fas fa-graduation-cap"></i> edukin </a>

    <div id="menu-btn" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="home1.php">home</a></li>
            <li><a href="about.php">about</a></li>
            <li><a href="#">courses +</a>
                <ul>
                    <li><a href="course-1.php">course 01</a></li>
                    <li><a href="course-2.php">course 02</a></li>
                </ul>
            </li>
            <li><a href="teachers.php">teachers</a></li>


            <li><a href="contact.php">contact</a></li>

        </ul>
    </nav>

</header>

<!-- header section ends -->

<section class="heading">
    <h3>contact us</h3>
    <p> <a href="home.php">home >></a> contact </p>
</section>

<section class="contact">

    <div class="icons-container">

        <div class="icons">
            <i class="fas fa-phone"></i>
            <h3>our number</h3>
            <p>+123-456-7890</p>
            <p>+111-222-3333</p>
        </div>

        <div class="icons">
            <i class="fas fa-envelope"></i>
            <h3>our email</h3>
            <p>abc@gmail.com</p>
            <p>kfg@gmail.com</p>
        </div>

        <div class="icons">
            <i class="fas fa-map-marker-alt"></i>
            <h3>our address</h3>
            <p>Pune, india - 411039</p>
        </div>

    </div>

    <div class="row">

        

        <form action="contactus.php" method="post">
           
            <h3>Get in touch</h3>
        
            <input type="text" name="name" placeholder="your name" class="box ">
            <input type="number" name="phone" placeholder="your number" class="box">
            <input type="email"name="email" placeholder="your email" class="box">
            <textarea name="msg" placeholder="your message" id="" cols="30" rows="10"></textarea>
            <input type="submit" value="send" name="submit_form" class="btn">
        </form>
      
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d242117.70906786807!2d73.6981519283265!3d18.524870612080687!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bc2bf2e67461101%3A0x828d43bf9d9ee343!2sPune%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1681485428204!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>    </div>
</div>
</section>



<!-- footer section starts  -->

<section class="footer">

    <div class="box-container">

        <div class="box">
            <h3>explore</h3>
            <a href="home1.php"> <i class="fas fa-arrow-right"></i> home </a>
            <a href="about.php"> <i class="fas fa-arrow-right"></i> about </a>
            <a href="course-1.php"> <i class="fas fa-arrow-right"></i> course-1 </a>
            <a href="course-2.php"> <i class="fas fa-arrow-right"></i>course-2 </a>
            <a href="teachers.php"> <i class="fas fa-arrow-right"></i> teachers </a>
            <a href="contact.php"> <i class="fas fa-arrow-right"></i> contact </a>
        </div>

        <div class="box">
            <h3>categories</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> web design </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> graphic design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> UI / UX design</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> seo marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> digital marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> email marketing</a>
            <a href="#"> <i class="fas fa-arrow-right"></i> all courses</a>
        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#"> <i class="fas fa-arrow-right"></i> my account </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> feedback </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> help center </a>
            <a href="#"> <i class="fas fa-arrow-right"></i> certificates </a>
        </div>

        <div class="box">
            <h3>follow us</h3>
            <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
            <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
            <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
            <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
        </div>

    </div>


</section>

<!-- footer section ends -->

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>