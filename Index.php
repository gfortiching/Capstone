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

    <script src="https://kit.fontawesome.com/6736942ab4.js" crossorigin="anonymous"></script>
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
                    <li class="nav-item hover me-5" onclick="Hero()">
                        GoTODA<span>.</span>
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
         <section id="hero" class="d-flex align-items-center justify-content-center">
            <div class="container" data-aos="fade-up">

            <div class="row justify-content-center" data-aos="fade-up" data-aos-delay="150">
                <div class="col-xl-6 col-lg-8">
                    <h1>WELCOME TO GoTODA<span>.</span></h1>
                    <h2>Easy way sa mga tricycle driving gwapito</h2>
                </div>
            </div>

            <div class="row gy-4 mt-5 justify-content-center" data-aos="zoom-in" data-aos-delay="250">
                <div class="col-xl-2 col-md-4" onclick="Services()">
                    <div class="icon-box">
                        <i class="fa-solid fa-toolbox"></i>
                        <h3>Services</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="About()">
                    <div class="icon-box">
                        <i class="fa-regular fa-address-card"></i>
                        <h3>About US</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="Faqs()">
                    <div class="icon-box">
                        <i class="fa-solid fa-check"></i>
                        <h3>FAQS</h3>
                    </div>
                </div>

                <div class="col-xl-2 col-md-4" onclick="Contact()">
                    <div class="icon-box">
                        <i class="fa-regular fa-address-book"></i>
                        <h3>CONTACTS</h3>
                    </div>
                </div>
            </div>

            </div>
        </section>
        
        <section class="page">
            <div class="paragraph first">
                <p><span>L</span>orem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>          
        </section>

        <section class="page">
            <div class="parallax2" id="services">
                <div class="overlay"></div>
                <h2>Featured Services</h2>
            </div>
        </section>

        <section id="pricing" class="pricing section-bg">
            <div class="container mb-4">

                <div class="section-title">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quis error, provident in maiores eum dolore, quidem ut harum ratione, temporibus odio ex voluptatem ad voluptates velit mollitia aspernatur eos iste Lorem ipsum dolor sit amet consectetur.</p>
                </div>

                <div class="row">

                    <div class="col-lg-4 col-md-6">
                        <div class="box">
                            <h3>Fee</h3>
                            <h4><sup>$</sup>200</h4>
                            <ul>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum dolor</li>
                                <li>Lorem, ipsum dolor sit</li>
                                <li class="na">Lorem, ipsum</li>
                                <li class="na">Lorem ipsum dolor</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-md-0">
                        <div class="box featured">
                            <h3>Loan</h3>
                            <h4><sup>$</sup>100<span> / 6 month</span></h4>
                            <ul>
                                <li>Lorem ipsum</li>
                                <li>Lorem ipsum dolor</li>
                                <li>Lorem ipsum dolor sit</li>
                                <li>Lorem ipsum dol</li>
                                <li class="na">Lorem ipsum dolor</li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 mt-4 mt-lg-0">
                        <div class="box">
                            <h3>Inssurance </h3>
                            <h4><sup>$</sup>2k</h4>
                            <ul>
                                <li>Lorem, ipsum</li>
                                <li>Lorem ipsum do</li>
                                <li>Lorem ipsum dolor sit </li>
                                <li>Lorem ipsum, d</li>
                                <li>Lorem ipsum dolor</li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>
        </section>

        <section class="page">
            <div class="parallax3" id="about">
                <div class="overlay"></div>
                <h2>About us</h2>
            </div>
        </section>

        <section id="about" class="about">
            <div class="container">

                <div class="section-title2 mt-4 mb-4">
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aperiam unde tenetur quaerat cumque ab. Quod magni ratione nisi eaque nam ipsa, qui recusandae mollitia distinctio accusamus eos perspiciatis eligendi illum.</p>
                </div>

                <div class="row content">
                <div class="col-lg-6">
                    <p>
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                    magna aliqua.
                    </p>
                    <ul>
                    <li><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit.</li>
                    <li><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet, consectetur adipisicing elit.</li>
                    <li><i class="fa-solid fa-check-double"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Sus.</li>
                    </ul>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0">
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Est corrupti obcaecati exercitationem ea deleniti minus.
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum iusto impedit magnam repellat reiciendis modi.
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                    </p>
                    <a href="#" class="btn-learn-more">Learn More</a>
                </div>
                </div>

            </div>
        </section>

        <section id="counts" class="counts">
            <div class="container">

                <div class="text-center title">
                <h3>Faqs what we have achieved so far</h3>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Enim rem voluptas, ex velit.</p>
                </div>

                <div class="row counters position-relative">

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="247" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Members</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Operators</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="1463" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Hours Of Support</p>
                </div>

                <div class="col-lg-3 col-6 text-center">
                    <span data-purecounter-start="0" data-purecounter-end="217" data-purecounter-duration="1" class="purecounter"></span>
                    <p>Tricycle Diver</p>
                </div>

                </div>

            </div>
        </section>
        <section class="page">
            <div class="paragraph second">
                <p><span>O</span>rci porta non pulvinar neque laoreet suspendisse interdum. Nulla malesuada pellentesque elit eget gravida. Ac orci phasellus egestas tellus rutrum tellus pellentesque eu tincidunt. Ut lectus arcu bibendum at varius vel pharetra vel turpis. Eleifend quam adipiscing vitae proin sagittis nisl rhoncus. Aliquet eget sit amet tellus cras adipiscing enim eu turpis. Pharetra convallis posuere morbi leo urna molestie. Volutpat lacus laoreet non curabitur gravida. Ornare aenean euismod elementum nisi quis eleifend quam. Fames ac turpis egestas sed tempus urna. Nisl nisi scelerisque eu ultrices vitae auctor. A iaculis at erat pellentesque adipiscing commodo elit at. Nulla posuere sollicitudin aliquam ultrices. Semper feugiat nibh sed pulvinar proin gravida hendrerit lectus. Tortor at auctor urna nunc id cursus metus aliquam eleifend. Et molestie ac feugiat sed lectus. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Neque viverra justo nec ultrices dui sapien eget mi.</p>
            </div>

            <div class="parallax5" id="contact">
                <div class="overlay"></div>
                <h2>Contact Us</h2>
            </div>   
        </section>
        
        <section id="contact" class="contact">
            <div class="container mb-4" data-aos="fade-up">
                <div>
                    <iframe class="mt-4" style="border:0; width: 100%; height: 270px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3861.802458172892!2d121.04663401451558!3d14.553286282136785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c8efd99aad53%3A0xb64b39847a866fde!2skodego!5e0!3m2!1sen!2sph!4v1673536261491!5m2!1sen!2sph" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

                <div class="row mt-5">

                <div class="col-lg-4">
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

                <div class="col-lg-8 mt-5 mt-lg-0">

                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                    <div class="row">
                        <div class="col-md-6 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                        </div>
                        <div class="col-md-6 form-group mt-3 mt-md-0">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                        </div>
                    </div>
                    <div class="form-group mt-3">
                        <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                    </div>
                    <div class="form-group mt-3">
                        <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
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

        function Faqs() {
            const about = document.getElementById("faqs");
            about.scrollIntoView();
        };

        function Contact() {
            const contact = document.getElementById("contact");
            contact.scrollIntoView();
        };
    </script>
</body>

</html>