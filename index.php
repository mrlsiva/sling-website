
<php lang="en">

<head>

    <meta charset="utf-8">
    <meta content="IE=edge,chrome=1" http-equiv="X-UA-Compatible">

    <title>Sling Software Solutions | Transforming Digital Experiences</title>
    
    <meta name="description" content="Sling Software Solutions - Your partner for UI-UX design, web development, digital marketing, and mobile apps. Elevate your digital presence with our innovative solutions.">
    
    <meta name="keywords" content="Sling Software Solutions, UI-UX design, web development, digital marketing, mobile apps, innovation, technology, digital solutions">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- Optimize resource loading to prevent preload warnings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="referrer" content="strict-origin-when-cross-origin">

    <!-- Open Graph Tags -->
    <meta property="og:title" content="Sling Software Solutions">
    <meta property="og:description" content="Transforming Digital Experiences with UI-UX design, web development, digital marketing, and mobile apps.">
    <meta property="og:image" content="sling-assets/img/Share.png">
    <meta property="og:url" content="slinggroups.in">
    <!-- Twitter Card Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Sling Software Solutions">
    <meta name="twitter:description" content="Transforming Digital Experiences with UI-UX design, web development, digital marketing, and mobile apps.">
    <meta name="twitter:image" content="sling-assets/img/Share.png">

    <link rel='icon' href="sling-assets/img/Share.png" type='image/x-icon'>

    <!-- Favicons -->
    <link href="sling-assets/img/favicon.png?v1" rel="icon">
    <link href="sling-assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800|Montserrat:300,400,700" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    
    <!-- Fallback to local Bootstrap CSS -->
    <script>
    if (typeof(window.getComputedStyle) !== 'undefined') {
        var bootstrapTest = document.createElement('div');
        bootstrapTest.className = 'container';
        document.body.appendChild(bootstrapTest);
        if (window.getComputedStyle(bootstrapTest).width.indexOf('px') === -1) {
            document.write('<link href="sling-assets/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">');
        }
        document.body.removeChild(bootstrapTest);
    }
    </script>

    <!-- Libraries CSS Files -->
    <link href="sling-assets/lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="sling-assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="sling-assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">
    <link href="sling-assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="sling-assets/lib/magnific-popup/magnific-popup.css" rel="stylesheet">
    <link href="sling-assets/lib/ionicons/css/ionicons.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="sling-assets/css/style.css?v2" rel="stylesheet">
    
    <!-- Font CORS Issue Fix for Callbell Widget -->
    <style>
    /* Override Callbell font loading to use system fonts and prevent CORS errors */
    @font-face {
        font-family: 'ProximaNova-Regular';
        src: local('Open Sans'), local('Helvetica Neue'), local('Arial'), local('sans-serif');
        font-weight: normal;
        font-style: normal;
        font-display: swap;
    }
    @font-face {
        font-family: 'ProximaNova-Bold';
        src: local('Open Sans Bold'), local('Helvetica Neue Bold'), local('Arial Bold'), local('sans-serif');
        font-weight: bold;  
        font-style: normal;
        font-display: swap;
    }
    /* Force Callbell to use system fonts */
    [data-callbell-widget] *,
    .callbell-widget *,
    #callbell-widget *, 
    iframe[src*="callbell"] {
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif !important;
    }
    /* Hide font loading errors in console by preventing external font requests */
    .callbell-widget {
        font-family: inherit !important;
    }
    </style>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-186097640-1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-186097640-1');
    </script>
</head>

<body id="body">

    <!--==========================
    Top Bar
  ============================-->
    <section id="topbar" class="d-none d-lg-block">
        <div class="container d-flex">
            <div class="contact-info float-left col-12 col-md-6">
                <i class="fa fa-envelope-o"></i> <a href="mailto:slinggroups@gmail.com">slinggroups@gmail.com</a>
                <i class="fa fa-phone"></i> +91 9994090424
            </div>
            <div class="social-links float-right col-12 col-md-6 text-md-end">
                <a href="https://twitter.com/SlingSoftware" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a>
                <a href="https://www.facebook.com/pg/Slingsoftwaresolutions" class="facebook" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="#" target="_blank" class="instagram"><i class="fa fa-instagram"></i></a>

                <!-- <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a> -->
                <!-- <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a> -->
            </div>
        </div>
    </section>

    <!--==========================
    Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <h1>
                    <a href="#body" class="scrollto"><img src="sling-assets/img/logo.png" class="logo_img" alt="" /></a>
                </h1>
                <!--        <h1><a href="#body" class="scrollto">Sling<span>Groups</span></a></h1>-->
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="#body"><img src="img/logo.png" alt="" title="" /></a>-->
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#body">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#clients">Clients</a></li>
                    <!-- <li><a href="#portfolio">Portfolio</a></li> -->
                    <!--          <li><a href="#team">Team</a></li>-->
                    <!-- <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li> -->
                    <li><button type="button" class="nav-cta" data-bs-toggle="modal" data-bs-target="#enquiryModal">Enquiry</button></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--==========================
    Intro Section
  ============================-->
    <section id="intro-container">
        <div id="intro">
            <div class="container">
                <div class="intro-inner">
                    <div class="intro-content">
                        <span class="eyebrow">Sling Software Solutions</span>
                        <h2>We Make Your <span>e - dreams</span><br>Live!</h2>
                        <p class="intro-lede">Delivering cutting-edge IT solutions since 2020 &mdash; UI-UX design, web development, digital marketing, and mobile apps.</p>
                        <div class="intro-badges">
                            <span class="badge-pill">Est. 2020</span>
                            <span class="badge-pill">4 Core Services</span>
                        </div>
                        <div class="intro-cta">
                            <button type="button" class="btn-flat-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Get In Touch</button>
                            <a href="#services" class="btn-watch scrollto">
                                <span class="btn-watch-icon"><i class="fa fa-play"></i></span>
                                Our Services
                            </a>
                        </div>
                    </div>

                    <div class="intro-visual">
                        <div class="about-img-frame">
                            <img src="sling-assets/img/banner.png" class="img-fluid" alt="">
                            <!-- <span class="badge-pill about-badge">Est. 2020</span> -->
                        </div>
                        <!-- <span class="intro-blob intro-blob-1"></span>
                        <span class="intro-blob intro-blob-2"></span>
                        <div class="intro-visual-frame">
                            <div id="intro-carousel" class="owl-carousel">
                                <div class="item" style="background-image: url('sling-assets/img/intro-carousel/1.jpg');"></div>
                                <div class="item" style="background-image: url('sling-assets/img/intro-carousel/2.jpg');"></div>
                                <div class="item" style="background-image: url('sling-assets/img/intro-carousel/3.jpg');"></div>
                                <div class="item" style="background-image: url('sling-assets/img/intro-carousel/4.jpg');"></div>
                                <div class="item" style="background-image: url('sling-assets/img/intro-carousel/5.jpg');"></div>
                            </div>
                        </div>
                        <svg class="intro-visual-deco" width="70" height="70" viewBox="0 0 70 70" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                            <path d="M5 55 L5 40 L20 40" stroke="#1b1e2c" stroke-width="2"/>
                            <path d="M20 60 L20 45 L35 45" stroke="#1b1e2c" stroke-width="2"/>
                            <path d="M35 65 L35 50 L50 50" stroke="#1b1e2c" stroke-width="2"/>
                        </svg> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- #intro-container -->

    <main id="main">

        <!--==========================
      About Section
    ============================-->
        <section id="about" class="wow fadeInUp">
            <div class="container">
                <div class="row">
                    <div class="col-lg-5 about-img">
                        <div class="about-img-frame">
                            <img src="sling-assets/img/about-us.png" alt="">
                            <!-- <span class="badge-pill about-badge">Est. 2020</span> -->
                        </div>
                    </div>

                    <div class="col-lg-7 content">
                        <span class="eyebrow">About Us</span>
                        <h2>Delivering <span>Smart IT Solutions</span> for Your Business</h2>
                        <p class="about-lede">Since 2020, Sling Software Solutions has helped businesses across industries with UI-UX design, web development, digital marketing, and mobile apps &mdash; pairing technical expertise with a genuine focus on client success.</p>

                        <div class="about-timeline">
                            <div class="about-timeline-item">
                                <span class="about-timeline-dot"></span>
                                <p>Sling Software Solutions is a leading and globally accepted IT solution provider, delivering cutting-edge solutions since 2020.</p>
                            </div>
                            <div class="about-timeline-item">
                                <span class="about-timeline-dot"></span>
                                <p>Founded with a robust team in technical and management domains, we bring expertise and innovation to every project.</p>
                            </div>
                            <div class="about-timeline-item">
                                <span class="about-timeline-dot"></span>
                                <p>Our primary motive is to understand client requirements thoroughly and provide tailored solutions, ensuring utmost client satisfaction.</p>
                            </div>
                        </div>

                        <button type="button" class="btn-flat-primary" data-bs-toggle="modal" data-bs-target="#enquiryModal">Let's Start</button>
                    </div>
                </div>

            </div>
        </section>
        <!-- #about -->

        <!--==========================
      Services Section
    ============================-->
        <section id="services">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">What We Do</span>
                    <h2>Services</h2>
                    <!-- <p>Sed tamen tempor magna labore dolore dolor sint tempor duis magna elit veniam aliqua esse amet veniam enim export quid quid veniam aliqua eram noster malis nulla duis fugiat culpa esse aute nulla ipsum velit export irure minim illum
                        fore
                    </p> -->
                </div>

                <div class="row g-4 services-grid">

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card wow fadeInUp">
                            <div class="service-icon"><i class="fa fa-vcard-o"></i></div>
                            <h4 class="service-title">UI-UX Design</h4>
                            <p class="service-desc">Transforming visions into digital masterpieces with top-notch tools: Figma, Photoshop, Adobe XD, Illustrator, CorelDRAW, and more &mdash; precision and style converge to create impactful designs for your brand.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-delay="0.1s">
                            <div class="service-icon"><i class="fa fa-cloud"></i></div>
                            <h4 class="service-title">Web Development</h4>
                            <p class="service-desc">We specialize in PHP, .Net, and Node technologies. From secure web hosting to crafting dynamic web applications, including E-Commerce, Billing Software, and Blog Websites, we bring your digital vision to life.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="service-icon"><i class="fa fa-share-alt"></i></div>
                            <h4 class="service-title">Digital Marketing</h4>
                            <p class="service-desc">Amplify your brand's digital footprint with our dynamic marketing strategies. From SEO mastery to impactful social campaigns, we drive engagement and boost visibility online.</p>
                        </div>
                    </div>

                    <div class="col-lg-3 col-md-6">
                        <div class="service-card wow fadeInUp" data-wow-delay="0.3s">
                            <div class="service-icon"><i class="fa fa-support"></i></div>
                            <h4 class="service-title">Mobile Apps</h4>
                            <p class="service-desc">Crafting seamless experiences for Android and iPhone users. Our mobile apps marry innovation and functionality, ensuring users engage effortlessly with expert development.</p>
                        </div>
                    </div>

                </div>

                <div class="how-it-works">
                    <div class="how-step">
                        <span class="how-step-number">1</span>
                        <h5>Discover</h5>
                        <p>We learn your goals and requirements.</p>
                    </div>
                    <div class="how-step">
                        <span class="how-step-number">2</span>
                        <h5>Design</h5>
                        <p>We map out the UX and visual direction.</p>
                    </div>
                    <div class="how-step">
                        <span class="how-step-number">3</span>
                        <h5>Develop</h5>
                        <p>We build and test the solution end to end.</p>
                    </div>
                    <div class="how-step">
                        <span class="how-step-number">4</span>
                        <h5>Launch</h5>
                        <p>We deploy and support you post-launch.</p>
                    </div>
                </div>

            </div>
        </section>
        <!-- #services -->

        <!--==========================
      Clients Section
    ============================-->
        <section id="clients" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">Our Clients</span>
                    <h2>Clients</h2>
                    <p>At Sling Software Solutions, we're privileged to collaborate with a diverse range of clients across industries &mdash; from new startups to established brands &mdash; delivering tailored solutions that meet unique challenges and drive success.</p>
                </div>
                <?php
        // Include the database configuration file
        include('sling-assets/admin-panel/Dbconfig.php');

        $query = "SELECT * FROM tbl_image WHERE status = 'enabled' ORDER BY sort_order ASC, image_id DESC";
        $statement = $connect->prepare($query);
        $statement->execute();
        $result = $statement->fetchAll();
        $number_of_rows = $statement->rowCount();
        $output = '';

        if ($number_of_rows > 0) {
            $output .= '<div class="clients-grid">';

            foreach ($result as $row) {
                $imageDescriptionUrl = htmlspecialchars($row["image_description"], ENT_QUOTES, 'UTF-8');
                $imageName = htmlspecialchars($row["image_name"], ENT_QUOTES, 'UTF-8');

                $output .= '
                    <a href="' . $imageDescriptionUrl . '" target="_blank" rel="noopener noreferrer" class="client-card">
                        <img src="sling-assets/admin-panel/files/' . $imageName . '" alt="" loading="lazy">
                        <span class="client-card-overlay"><i class="fa fa-link" aria-hidden="true"></i></span>
                    </a>
                ';
            }

            $output .= '</div>';
        } else {
            $output .= '<p>No Data Found</p>';
        }

        echo $output;
    ?>
            </div>
        </section>
        <!-- #clients -->

        <!--==========================
      Testimonials Section
    ============================-->
        <section id="testimonials" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">Testimonials</span>
                    <h2>What Our Customers Say</h2>
                    <p>Don't just take our word for it &mdash; here's what businesses we've partnered with have to say about working with Sling Software Solutions.</p>
                </div>
                <div class="testimonials-widget">
                    <script src="https://static.elfsight.com/platform/platform.js" data-use-service-core defer></script>
                    <div class="elfsight-app-ee554d8c-446f-4e27-8035-64990735ffe5" data-elfsight-app-lazy></div>
                </div>
            </div>
        </section>
        <!-- #testimonials -->

        <!--==========================
      Contact Section
    ============================-->
        <section id="contact" class="wow fadeInUp">
            <div class="container">
                <div class="section-header">
                    <span class="eyebrow">Get In Touch</span>
                    <h2>Contact Us</h2>
                    <!-- <p>Fillup Your requirements we will call back to you</p> -->
                </div>

                <div class="row contact-info">

                    <div class="col-md-4">
                        <div class="contact-phone">
                            <i class="ion-ios-telephone-outline"></i>
                            <h3>Phone Number</h3>
                            <p><a href="tel:+919994090424">+91 9994090424</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-email">
                            <i class="ion-ios-email-outline"></i>
                            <h3>Email</h3>
                            <p><a href="mailto:slinggroups@gmail.com">slinggroups@gmail.com</a></p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="contact-social">
                            <i class="ion-ios-people-outline"></i>
                            <h3>Follow Us</h3>
                            <div class="social-icons-row">
                                <a href="https://twitter.com/SlingSoftware" target="_blank" rel="noopener noreferrer" aria-label="Twitter"><i class="fa fa-twitter"></i></a>
                                <a href="https://www.facebook.com/pg/Slingsoftwaresolutions" target="_blank" rel="noopener noreferrer" aria-label="Facebook"><i class="fa fa-facebook"></i></a>
                                <a href="#" target="_blank" rel="noopener noreferrer" aria-label="Instagram"><i class="fa fa-instagram"></i></a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- 
            <div class="container">
                <div class="form">
                    <div id="sendmessage">Your message has been sent. Thank you!</div>
                    <div id="errormessage"></div>
                    <form action="" method="post" role="form" class="contactForm">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
                            </div>
                            <div class="form-group col-md-6">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validation"></div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                        </div>
                        <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div>

            </div> -->
        </section>
        <!-- #contact -->

    </main>

    <!--==========================
    Footer
  ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; <span id="copyright-year"></span> Copyright <strong> Sling Groups</strong>. All Rights Reserved
            </div>

        </div>
    </footer>
    <!-- #footer -->

    <script>
        document.getElementById('copyright-year').textContent = new Date().getFullYear();
    </script>

    <!-- Enquiry Modal -->
    <div class="modal fade" id="enquiryModal" tabindex="-1" aria-labelledby="enquiryModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="enquiryModalLabel">Professional Enquiry</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p class="enquiry-subtitle">Get In Touch With Our Experts</p>

                    <form id="enquiryForm" class="enquiry-form">
                        <div class="form-group">
                            <input type="text" id="name" name="name" placeholder="Your Name *" required>
                        </div>

                        <div class="form-group">
                            <input type="email" id="email" name="email" placeholder="Work Email *" required>
                        </div>

                        <div class="form-group">
                            <input type="tel" id="phone" name="phone" placeholder="Phone Number *" required>
                        </div>

                        <div class="form-group">
                            <input type="text" id="company" name="company" placeholder="Company Name">
                        </div>

                        <div class="form-group">
                            <select id="service" name="service" required>
                                <option value="">Select Service *</option>
                                <option value="UI-UX Design">UI-UX Design</option>
                                <option value="Web Development">Web Development</option>
                                <option value="Digital Marketing">Digital Marketing</option>
                                <option value="Mobile Apps">Mobile Apps</option>
                                <option value="E-commerce">E-commerce</option>
                                <option value="Custom Software">Custom Software</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <textarea id="message" name="message" placeholder="Project Details *" rows="3" required></textarea>
                        </div>

                        <button type="submit" class="submit-btn">
                            <i class="fa fa-paper-plane"></i> Send Enquiry
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-migrate-3.4.0.min.js" crossorigin="anonymous"></script>
    
    <!-- Suppress jQuery Migrate warnings in production -->
    <script>
    // Suppress jQuery Migrate console messages
    jQuery.migrateMute = true;
    
    // Also suppress migration warnings globally
    if (window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1') {
        jQuery.migrateWarnings = false;
    }
    </script>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    
    <!-- Fallback to local files if CDN fails -->
    <script>
    if (typeof jQuery == 'undefined') {
        document.write('<script src="sling-assets/lib/jquery/jquery.min.js"><\/script>');
        document.write('<script src="sling-assets/lib/jquery/jquery-migrate.min.js"><\/script>');
        document.write('<script src="sling-assets/lib/bootstrap/js/bootstrap.bundle.min.js"><\/script>');
    }
    </script>
    
    <script src="sling-assets/lib/easing/easing.min.js"></script>
    <script src="sling-assets/lib/superfish/hoverIntent.js"></script>
    <script src="sling-assets/lib/superfish/superfish.min.js"></script>
    <script src="sling-assets/lib/wow/wow.min.js"></script>
    <script src="sling-assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="sling-assets/lib/magnific-popup/magnific-popup.min.js"></script>
    <script src="sling-assets/lib/sticky/sticky.js"></script>

    <!-- Contact Form JavaScript File -->
    <!-- <script src="contactform/contactform.js"></script> -->

    <!-- Template Main Javascript File -->
    <script src="sling-assets/js/main.js"></script>

    <!-- Start of Optimized Callbell Code -->
    <script>
        // Load Callbell with CORS error suppression
        var isProduction = window.location.hostname !== 'localhost' && window.location.hostname !== '127.0.0.1' && !window.location.hostname.includes('.local');
        
        if (isProduction) {
            // Suppress CORS font errors in console
            var originalError = console.error;
            console.error = function(message) {
                if (typeof message === 'string' && (
                    message.includes('callbell.eu') || 
                    message.includes('proximanova') || 
                    message.includes('CORS policy') ||
                    message.includes('Access-Control-Allow-Origin')
                )) {
                    return; // Suppress Callbell CORS errors
                }
                originalError.apply(console, arguments);
            };

            window.callbellSettings = {
                token: "sqUhtGE5tjjuaBWvDKXCWnnN"
            };

            (function() {
                var w = window;
                var ic = w.callbell;
                if (typeof ic === "function") {
                    ic('reattach_activator');
                    ic('update', callbellSettings);
                } else {
                    var d = document;
                    var i = function() {
                        i.c(arguments)
                    };
                    i.q = [];
                    i.c = function(args) {
                        i.q.push(args)
                    };
                    w.Callbell = i;
                    
                    // Delay loading and add error handling
                    setTimeout(function() {
                        var s = d.createElement('script');
                        s.type = 'text/javascript';
                        s.async = true;
                        s.src = 'https://dash.callbell.eu/include/' + window.callbellSettings.token + '.js';
                        s.onerror = function() {
                            console.warn('Callbell widget failed to load - chat functionality disabled');
                        };
                        s.onload = function() {
                            // Additional font CORS suppression after widget loads
                            setTimeout(function() {
                                var style = d.createElement('style');
                                style.textContent = `
                                    .callbell-widget, .callbell-widget * {
                                        font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", "Open Sans", "Helvetica Neue", Helvetica, Arial, sans-serif !important;
                                    }
                                `;
                                d.head.appendChild(style);
                            }, 1000);
                        };
                        var x = d.getElementsByTagName('script')[0];
                        x.parentNode.insertBefore(s, x);
                    }, 3000); // Delay by 3 seconds to avoid preload warnings
                }
            })();
        } else {
            console.log('Callbell widget disabled on localhost to prevent CORS errors');
            
            // Optional: Add a development notice (only visible on localhost)
            if (console && console.info) {
                console.info('💬 Live chat is disabled on localhost. Contact: slinggroups@gmail.com or +91 9994090424');
            }
        }
    </script>
    <!-- End of Optimized Callbell Code -->

    <!-- Enquiry Form JavaScript -->
    <script>
    $(document).ready(function() {
        // Close the mobile nav drawer whenever the enquiry modal is opened,
        // regardless of which trigger (hero button or nav pill) opened it.
        $('#enquiryModal').on('show.bs.modal', function() {
            if ($('body').hasClass('mobile-nav-active')) {
                $('body').removeClass('mobile-nav-active');
                $('#mobile-nav-toggle i').toggleClass('fa-times fa-bars');
                $('#mobile-body-overly').fadeOut();
            }
        });

        $('#enquiryForm').on('submit', function(e) {
            e.preventDefault();

            var submitBtn = $(this).find('button[type="submit"]');
            var originalBtnText = submitBtn.html();

            // Show loading state
            submitBtn.html('<i class="fa fa-spinner fa-spin"></i> Sending...').prop('disabled', true);

            $.ajax({
                url: 'sling-assets/admin-panel/enquiry_handler.php',
                type: 'POST',
                data: $(this).serialize(),
                dataType: 'json',
                success: function(response) {
                    if (response.success) {
                        // Show success message
                        alert('Thank you for your enquiry! We will get back to you soon.');
                        // Reset form and close the modal
                        $('#enquiryForm')[0].reset();
                        var modalInstance = bootstrap.Modal.getInstance(document.getElementById('enquiryModal'));
                        if (modalInstance) modalInstance.hide();
                    } else {
                        alert('Error: ' + response.message);
                    }
                },
                error: function() {
                    alert('Sorry, there was an error sending your enquiry. Please try again or contact us directly.');
                },
                complete: function() {
                    // Reset button
                    submitBtn.html(originalBtnText).prop('disabled', false);
                }
            });
        });
    });
    </script>


</body>

</html>