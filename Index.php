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
    <title>GoToda!</title>
    <link rel="stylesheet" href="styles.css">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@700&family=PT+Sans&display=swap"
        rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-expand-lg p-0">
        <div class="navigation">
            <div class="d-flex justify-content-between d-lg-none">
                <a class="order-0" href="index.php"><img class="logo me-5" src="Images/GoToda.png" alt="GoToda" /></a>
                <button class="navbar-toggler text-white border-0 order-1 me-3" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarBasic" aria-controls="navbarBasic" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <i class="fa-solid fa-bars"></i>
                </button>
            </div>
            <div class="collapse navbar-collapse hidden" id="navbarBasic">
                <ul class="navbar-nav pt-sans">
                    <li class="d-none d-lg-inline">
                        <a class="order-0" href="index.php"><img class="logo me-5" src="Images/GoToda.png"
                                alt="GoToda" /></a>
                    </li>
                    <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0" onclick="Hero()">
                        Home
                    </li>
                    <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0" onclick="Services()">
                        Services
                    </li>
                    <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0" onclick="About()">
                        About
                    </li>
                    <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0" onclick="Contact()">
                        Contact
                    </li>
                    <li class="nav-item ms-lg-auto m-0 me-lg-5 mt-3 mt-lg-0 d-none d-lg-inline">
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

                    <li class="nav-item hover m-0 me-lg-5 mt-3 mt-lg-0">
                        <?php if (isset($_SESSION['UserLogin'])) { ?>
                            <a class="hover m-0" href="logout.php">Logout</a>
                        <?php } else { ?>
                            <a class="hover m-0" href="login.php">Login</a>
                        <?php } ?>
                    </li>
                </ul>
                </span>
            </div>
        </div>
    </nav>

    <section id="hero">
        <div class="container" data-aos="fade-up">
            <div class="row" data-aos="fade-up" data-aos-delay="150">
                <div class="open-sans">
                    <img class="hero-logo" src="Images/GoToda.png" alt="GoToda" />
                    <h1>WELCOME TO GOTODA</h1>
                    <h2>Convenient and Reliable Tricycle Monitoring Service.</h2>
                </div>
            </div>
            <div class="row row-cols-2 gy-4 my-5 justify-content-center pt-sans" data-aos="zoom-in"
                data-aos-delay="250">
                <div class="col-xl-2 col-md-4" onclick="Services()">
                    <div class="icon-box">
                        <i class="fa-solid fa-toolbox"></i>
                        <h3>Services</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="About()">
                    <div class="icon-box">
                        <i class="fa-regular fa-address-card"></i>
                        <h3>About</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="Statistics()">
                    <div class="icon-box">
                        <i class="fa-solid fa-check"></i>
                        <h3>Statistics</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="Contact()">
                    <div class="icon-box">
                        <i class="fa-regular fa-address-book"></i>
                        <h3>Contact</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="paragraph first pt-sans">
            <p><span>E</span>xperience the convenience of monitoring all your important assets with our user-friendly
                and reliable web service.
            </p>
        </div>
    </section>

    <section>
        <div class="parallax2" id="services">
            <div class="overlay"></div>
            <h2 class="open-sans">Featured Services</h2>
        </div>
    </section>

    <section id="pricing" class="pricing section-bg">
        <div class="container mb-4">

            <div class="section-title">
                <p class="pt-sans">Check out some of our amazing services!</p>
            </div>

            <div class="row justify-content-center pt-sans">
                <div class="col-lg-4 col-md-6">
                    <div class="box-services">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/5511/5511414.png'
                            alt="Book GoToda" />
                        <h3>GoToda Booking</h3>

                        <h5 class="text-white">Book a ride using our GoToda App!</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box-services">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3437/3437364.png'
                            alt="Book GoToda" />
                        <h3>Gotoda App</h3>
                        <h5 class="text-white">Locate your nearest GoToda Driver!</h5>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box-services">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3408/3408591.png'
                            alt="Book GoToda" />
                        <h3>Admin Dashboard</h3>
                        <h5 class="text-white">Data Monitoring all in our GoToda App! (<em>Exclusive for
                                GoToda
                                Admins, Operators and Drivers only.</em>)</h5>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="parallax2" id="services">
            <div class="overlay"></div>
            <h2 class="open-sans">Driver Exclusives</h2>
        </div>
    </section>

    <section id="pricing" class="pricing section-bg">
        <div class="container mb-4 pt-sans">

            <div class="section-title">
                <p>We provide a variety of benefits for our GoToda Drivers.</p>
            </div>

            <div class="row justify-content-center">

                <div class="col-lg-4 col-md-6">
                    <div class="box">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3932/3932368.png'>
                        <h3>PACKAGE FEES</h3>
                        <h4><sup>₱</sup>10,000</h4>
                        <ul>
                            <li></li>
                            <li>Driver Welcome Kit & Insurance</li>
                            <li>Access to Website & Dashboard</li>
                            <li>Monthly and Annual Bonuses</li>
                            <li>Unlimited Booking from Customers</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                    <div class="box">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3146/3146444.png'>
                        <h3>MEMBERSHIP LOANS</h3>
                        <h4>0.5% - 1%<span> / month</span></h4>
                        <ul>
                            <li>Personal Loan</li>
                            <li>Educational Loan</li>
                            <li>Medical Loan</li>
                            <li>Housing Loan</li>
                            <li>Gadget Loan</li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                    <div class="box">
                        <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3076/3076656.png'>
                        <h3>MEMBERSHIP INSURANCE</h3>
                        <h4><sup>₱</sup>2k</h4>
                        <ul>
                            <li>Annual HMO</li>
                            <li>Accidental Benefit</li>
                            <li>Disabiliy Benefit</li>
                            <li>Life Insurance</li>
                            <li>Daily Hospitalization</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <section>
        <div class="parallax3" id="about">
            <div class="overlay"></div>
            <h2 class="open-sans">About Us</h2>
        </div>
    </section>

    <section id="about" class="about">
        <div class="container pt-sans">
            <h1 class="text-center mt-5">Our Core Values</h1>
            <div class="core-values">
                <div class="values">
                    <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/3062/3062359.png'>
                    <p>Compassionate</p>
                </div>
                <div class="values">
                    <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/5640/5640426.png'>
                    <p>Unity</p>
                </div>
                <div class="values">
                    <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/1161/1161388.png'>
                    <p>Security</p>
                </div>
                <div class="values">
                    <img class="services-icon" src='https://cdn-icons-png.flaticon.com/512/1535/1535019.png'>
                    <p>Growth</p>
                </div>
            </div>
            <div class="section-title my-5">
                <p>GoToda was founded last December 2023. Founded by a group of web developers, we have partnered with
                    some of the major organizations here in the Philippines to come up with a solution to one of their
                    ongoing problems. Our goal is to serve and support our community while
                    preserving
                    one of the
                    best and flexible modes of transportation.</p>
            </div>
            <div class="section-title2 mt-4 mb-4">
                <div class="row content my-5">
                    <div class="col-lg-6">
                        <ul>
                            <li><i class="fa-solid fa-check-double"></i>Convenient</li>
                            <li><i class="fa-solid fa-check-double"></i>24/7 Customer Support</li>
                            <li><i class="fa-solid fa-check-double"></i>Safe and Secure</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 pt-4 pt-lg-0">
                        <p>
                            Welcome to our GoToda monitoring service website! We are dedicated to providing reliable and
                            accurate
                            monitoring solutions for businesses of all sizes. Our team of experts uses the latest
                            technology
                            to
                            ensure that our clients' systems are always running at peak performance.

                            <br>
                            <br>We offer a wide
                            range
                            of
                            services, including network monitoring, server monitoring, and application monitoring,
                            to name a
                            few. Our user-friendly platform allows clients to easily access and manage their data,
                            and our
                            24/7
                            support team is always available to assist with any questions or concerns.
                        </p>
                    </div>
                </div>
            </div>
    </section>

    <section id="counts" class="counts">
        <div class="container">

            <div class="text-center title">
                <h3 class="open-sans">GoToda Nationwide Statistics</h3>
            </div>

            <div class="row counters position-relative pt-sans">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="247" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Members</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Operators</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="217" data-purecounter-duration="1"
                        class="purecounter"></span>
                    <p>Tricycle Diver</p>
                </div>

            </div>

        </div>
    </section>
    <section>
        <article class="container">
            <div class="section-title my-5">
                <p class="open-sans">Be part of our growing community and leverage technology with us.</p>
            </div>
        </article>

        <div class="parallax5" id="contact">
            <div class="overlay"></div>
            <h2 class="open-sans">Contact Us</h2>
        </div>
    </section>

    <section id="contact" class="contact">
        <div class="container mb-4" data-aos="fade-up">
            <article class="container">
                <div class="section-title my-5 open-sans">
                    <p><strong>Want to apply as an Operator or a Driver?</strong></p>
                    <p><strong>Send us a message below for more details. &#128071;
                        </strong></p>
                </div>
            </article>
            <div>
                <iframe class="mt-4" style="border:0; width: 100%; height: 270px;"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.802458172892!2d121.04663401451558!3d14.553286282136785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8efd99aad53%3A0xb64b39847a866fde!2skodego!5e0!3m2!1sen!2sph!4v1673536261491!5m2!1sen!2sph"
                    allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="row mt-5">

                <div class="col-lg-4 pt-sans">
                    <div class="info">
                        <div class="address">
                            <i class="fa-solid fa-location-dot"></i>
                            <h4>Location:</h4>
                            <p>18th floor, The W Fifth Avenue, 5th Ave, Taguig, 1630 Metro Manila</p>
                        </div>

                        <div class="email">
                            <i class="fa-solid fa-envelope"></i>
                            <h4>Email:</h4>
                            <p>gotoda@edu.ph</p>
                        </div>

                        <div class="phone">
                            <i class="fa-solid fa-phone"></i>
                            <h4>Call:</h4>
                            <p>+63 0999 999 9999</p>
                        </div>

                    </div>

                </div>

                <div class="col-lg-8 mt-5 mt-lg-0 pt-sans">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                    required>
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                                required>
                        </div>
                        <div class="form-group mt-3">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                required></textarea>
                        </div>
                        <div class="my-3">
                            <div class="loading">Loading</div>
                            <div class="error-message"></div>
                            <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>

                </div>

            </div>

        </div>
    </section>


    <!-- Footer Section Start -->
    <footer class="footer-section pt-sans">
        <div class="row container-fluid row-cols-1 row-cols-md-3 m-auto footer-content mt-5">
            <div class="col text-white text-center d-flex flex-column justify-content-center p-0">
                <img class="logo m-auto" src="Images/GoToda.png" alt="GoToda" />
                <div class="footer-social-icon mt-5">
                    <h4 class="text-white text-center">Our Social Media</h4>
                    <div class="socmedIcons m-auto mt-3">
                        <a href="#"><i class="fa-brands fa-facebook-f facebook-bg"></i></a>
                        <a href="#"><i class="fa-brands fa-discord discord-bg"></i></a>
                        <a href="#"><i class="fa-brands fa-instagram instagram-bg"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter twitter-bg"></i></a>
                    </div>
                </div>
            </div>

            <div class="col text-white text-center d-flex justify-content-center p-0 mt-5 mt-md-0">
                <div class="quick-links">
                    <h4 class="mb-5">Quick Links</h4>
                    <p onclick="Hero()">Home</p>
                    <p onclick="Services()">Services</p>
                    <p onclick="About()">About</p>
                    <p onclick="Contact()">Contact</p>
                </div>
            </div>
            <div class="col text-white text-center d-flex justify-content-center p-0 mt-5 mt-md-0">
                <div>
                    <h4 class="mb-5">Be Our Partner</h4>
                    <p>Administrator</p>
                    <p>Operator</p>
                    <p>GoToda Driver</p>
                </div>
            </div>
        </div>
        <div class="container copyright-area mt-3">
            <div class="text-center text-lg-left">
                <div class="copyright-text">
                    <p>Copyright &copy; 2022, All Rights Reserved GoToda</p>
                </div>
            </div>
        </div>
    </footer>


    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/b8b5c0695c.js" crossorigin="anonymous"></script>
    <!-- Animate on Scroll -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>


    <!-- purecounter js -->
    <script src="js/purecounter/purecounter_vanilla.js"></script>
    <script src="js/glightbox/js/glightbox.min.js"></script>
    <script src="js/swiper/swiper-bundle.min.js"></script>

    <script src="js/js/main.js"></script>

    <script>
        AOS.init();

        function Hero() {
            const landing = document.getElementById("hero");
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

        function Statistics() {
            const contact = document.getElementById("counts");
            contact.scrollIntoView();
        };
    </script>
    <script src="https://kit.fontawesome.com/6736942ab4.js" crossorigin="anonymous"></script>
</body>

</html>