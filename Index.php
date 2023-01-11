<?php

include_once("Connection/Connection.php");
$con = connection();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GoToda</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="navigation">
            <button class="navbar-toggler text-white border-0 p-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse hidden" id="navbarBasic">

                <ul class="navbar-nav">
                    <li class="nav-item hover me-5" onclick="Landing()">
                        GoTODA
                    </li>
                    <li class="nav-item hover me-4" onclick="Services()">
                        Services
                    </li>
                    <li class="nav-item hover me-4" onclick="About()">
                        About Us
                    </li>
                    <li class="nav-item hover me-4" onclick="Contact()">
                        Contact
                    </li>
                    <li class="nav-item ms-lg-auto me-5 d-none d-lg-inline">
                        <b>
                            <?php if (!isset($_SESSION)) {
                                session_start();
                            }

                            if (isset($_SESSION["UserLogin"])) {
                                echo "Hello, " . $_SESSION['UserLogin'] . "!";
                            } else {
                                echo "Welcome, Guest!";
                            } ?>
                        </b>
                    </li>

                    <li class="nav-item ms-lg-0 log">
                        <?php if (isset($_SESSION['UserLogin'])) { ?>
                            <a class="hover" href=" logout.php">Logout</a>
                        <?php } else { ?>
                            <a class="hover" href="login.php">Login</a>
                        <?php } ?>
                    </li>
                </ul>
                </span>
            </div>
        </div>
    </nav>
        <!-- <section class="top">
            <div class="title">
                <h3>Let's do Toda</h3>
                <h1>TRYCYCLE</h1>
            </div>
         </section> -->
         <section class="page" id="landing">
            <div class="parallax1">
            <div class="overlay"></div>
                <h1>WELCOME TO TODA</h1>
            </div>
            
            <div class="paragraph first">
                <p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>

            <div class="parallax2" id="services">
                <div class="overlay"></div>
                <h2>Featured Services</h2>
            </div>
            <div class="paragraph second">
                <p><span>O</span>rci porta non pulvinar neque laoreet suspendisse interdum. Nulla malesuada pellentesque elit eget gravida. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Ut lectus arcu bibendum at varius vel pharetra vel turpis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pharetra convallis posuere morbi leo urna molestie. Volutpat lacus laoreet non curabitur gravida. Ornare aenean euismod elementum nisi quis eleifend quam. Fames ac turpis egestas sed tempus urna. Nisl nisi scelerisque eu ultrices vitae auctor. A iaculis at erat pellentesque adipiscing commodo elit at. Nulla posuere sollicitudin aliquam ultrices. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Tortor at auctor urna nunc id cursus metus aliquam eleifend. Et molestie ac feugiat sed lectus. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Neque viverra justo nec ultrices dui sapien eget mi.</p>
            </div>

            <div class="parallax3" id="about">
                <div class="overlay"></div>
                <h2>About us</h2>
            </div>
            <div class="paragraph second">
                <p><span>O</span>rci porta non pulvinar neque laoreet suspendisse interdum. Nulla malesuada pellentesque elit eget gravida. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Ut lectus arcu bibendum at varius vel pharetra vel turpis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pharetra convallis posuere morbi leo urna molestie. Volutpat lacus laoreet non curabitur gravida. Ornare aenean euismod elementum nisi quis eleifend quam. Fames ac turpis egestas sed tempus urna. Nisl nisi scelerisque eu ultrices vitae auctor. A iaculis at erat pellentesque adipiscing commodo elit at. Nulla posuere sollicitudin aliquam ultrices. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Tortor at auctor urna nunc id cursus metus aliquam eleifend. Et molestie ac feugiat sed lectus. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Neque viverra justo nec ultrices dui sapien eget mi.</p>
            </div>

            <div class="parallax4">
                <div class="overlay"></div>
                <h2>FAQS</h2>
            </div>
            <div class="paragraph second">
                <p><span>O</span>rci porta non pulvinar neque laoreet suspendisse interdum. Nulla malesuada pellentesque elit eget gravida. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Ut lectus arcu bibendum at varius vel pharetra vel turpis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pharetra convallis posuere morbi leo urna molestie. Volutpat lacus laoreet non curabitur gravida. Ornare aenean euismod elementum nisi quis eleifend quam. Fames ac turpis egestas sed tempus urna. Nisl nisi scelerisque eu ultrices vitae auctor. A iaculis at erat pellentesque adipiscing commodo elit at. Nulla posuere sollicitudin aliquam ultrices. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Tortor at auctor urna nunc id cursus metus aliquam eleifend. Et molestie ac feugiat sed lectus. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Neque viverra justo nec ultrices dui sapien eget mi.</p>
            </div>

            <div class="parallax5" id="contact">
                <div class="overlay"></div>
                <h2>Contact Us</h2>
            </div>
            <div class="paragraph second">
                <p><span>O</span>rci porta non pulvinar neque laoreet suspendisse interdum. Nulla malesuada pellentesque elit eget gravida. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Ut lectus arcu bibendum at varius vel pharetra vel turpis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pharetra convallis posuere morbi leo urna molestie. Volutpat lacus laoreet non curabitur gravida. Ornare aenean euismod elementum nisi quis eleifend quam. Fames ac turpis egestas sed tempus urna. Nisl nisi scelerisque eu ultrices vitae auctor. A iaculis at erat pellentesque adipiscing commodo elit at. Nulla posuere sollicitudin aliquam ultrices. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Tortor at auctor urna nunc id cursus metus aliquam eleifend. Et molestie ac feugiat sed lectus. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Neque viverra justo nec ultrices dui sapien eget mi.</p>
            </div>
            
            <!-- <div class="parallax3"></div>
            <div class="paragraph third">
                <p><span>A</span>uctor neque vitae tempus quam pellentesque. In nibh mauris cursus mattis molestie a iaculis at. Sem integer vitae justo eget magna fermentum iaculis eu non. Eget velit aliquet sagittis id. Sed libero enim sed faucibus turpis in eu mi bibendum. Blandit libero volutpat sed cras. Ultricies integer quis auctor elit sed vulputate mi sit. Eget lorem dolor sed viverra ipsum nunc. Fringilla urna porttitor rhoncus dolor purus non enim praesent elementum. Ac placerat vestibulum lectus mauris ultrices eros in cursus. Integer vitae justo eget magna fermentum iaculis eu. Auctor elit sed vulputate mi sit amet mauris commodo.</p>
            </div> -->
            
        </section>
  

    <footer id="footer">
        <section class="footer-section">
            <div class="box">1</div>
            <div class="box">
                <ul>
                    <li>
                        <a href="">Home</a>
                    </li>
                    <li>
                        <a href="">Services</a>
                    </li>
                    <li>
                        <a href="">About</a>
                    </li>
                    <li>
                        <a href="">Contact</a>
                    </li>
                    <li>
                        <a href="">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class=" box">3
            </div>
        </section>
        <div class="copyright">Copyright &#169; 2022 - GoTODA</div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8b5c0695c.js" crossorigin="anonymous"></script>
    <!-- Animate on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>

        AOS.init();

        function Landing() {
            const landing = document.getElementById("landing");
            landing.scrollIntoView();
        };

        function Services() {
            const services = document.getElementById("services");
            services.scrollIntoView();
        };

        function About() {
            const about = document.getElementById("about");
            about.scrollIntoView();
        };

        function Contact() {
            const contact = document.getElementById("contact");
            contact.scrollIntoView();
        };
    </script>
</body>

</html>