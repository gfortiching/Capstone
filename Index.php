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
    <main class="main">
        <section id="landing" class="landing">
            <article class="landing-index" data-aos="fade-right">
                <h1>Landing Page</h1>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis blanditiis ab, doloribus ullam
                    vero
                    fugit consectetur itaque est et eos laborum debitis ad earum reprehenderit asperiores tempore
                    quaerat
                    in.</h3>
            </article>
        </section>

        <section id="services" class="landing">
            <article class="landing-services" data-aos="fade-right">
                <h1>Services Page</h1>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis blanditiis ab, doloribus ullam
                    vero
                    fugit consectetur itaque est et eos laborum debitis ad earum reprehenderit asperiores tempore
                    quaerat
                    in.</h3>
            </article>
        </section>

        <section id="about" class="landing">
            <article class="landing-about" data-aos="fade-right">
                <h1>About Page</h1>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis blanditiis ab, doloribus ullam
                    vero
                    fugit consectetur itaque est et eos laborum debitis ad earum reprehenderit asperiores tempore
                    quaerat
                    in.</h3>
            </article>
        </section>

        <section id="contact" class="landing">
            <article class="landing-contact" data-aos="fade-right">
                <h1>Contact Page</h1>
                <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae nobis blanditiis ab, doloribus ullam
                    vero
                    fugit consectetur itaque est et eos laborum debitis ad earum reprehenderit asperiores tempore
                    quaerat
                    in.</h3>
            </article>
        </section>
    </main>

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