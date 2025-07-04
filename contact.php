<!DOCTYPE html>
<html lang="zxx">

<head> 
    <?php include 'assets/header_link.php'; ?>
</head>
<body>

    <!-- Preloader Start -->
	<div class="preloader">
		<div class="loading-container">
			<div class="loading"></div>
			<div id="loading-icon"><img src="images/loader.svg" alt=""></div>
		</div>
	</div>
	<!-- Preloader End -->

    <!-- Topbar Section Start -->
        <?php  include 'assets/topbar.php'; ?>
    <!-- Topbar Section End -->

    <!-- Header Start -->
        <?php include 'assets/header.php'; ?>
	<!-- Header End -->

    <!-- Page Header Section Start -->
    <div class="page-header bg-section parallaxie">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Page Header Box Start -->
                    <div class="page-header-box">
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Contact <span> us</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->

    <!-- Hero Info Section Start -->
    <div class="page-contact-us">
        <div class="container">
            <div class="col-lg-12">
                <!-- Hero Info List Start -->
                <div class="contact-info-list">
                    <!-- Hero Info Item Start -->
                    <div class="hero-info-item">
                        <div class="hero-info-header">
                            <h3>Schedule hours</h3>
                            <img src="images/icon-clock.svg" alt="">
                        </div>
                        <div class="hero-info-body">
                            <ul>
                                <li><span>Monday - thursday</span>08:00 - 18:00</li>
                                <li><span>Friday</span>08:00 - 18:00</li>
                                <li><span>Saturday</span>08:00 - 18:00</li>
                            </ul>
                        </div>
                    </div>
                    <!-- Hero Info Item End -->
                    
                    <!-- Hero Info Item Start -->
                    <div class="hero-info-item">
                        <div class="hero-info-header">
                            <h3>Our locations</h3>
                            <img src="images/icon-location.svg" alt="">
                        </div>
                        <div class="hero-info-body">
                            <p>Providing expert IVF care locally technology.</p>
                            <h3>32, Oduduwa Way, GRA lkeja, Lagos State, Nigeria</h3>
                        </div>
                    </div>
                    <!-- Hero Info Item End -->
                    
                    <!-- Hero Info Item Start -->
                    <div class="hero-info-item">
                        <div class="hero-info-header">
                            <h3>contact us</h3>
                            <img src="images/icon-phone.svg" alt="">
                        </div>
                        <div class="hero-info-body">
                            <p>Reach out for personalized IVF support.</p>
                            <h3><a href="tel:+912588520">+2347056260569</a></h3>
                            <h3><a href="mailto:info@holychildclinic.com">info@holychildclinic.com</a></h3>
                        </div>
                    </div>
                    <!-- Hero Info Item End -->
                </div>
                <!-- Hero Info List End -->
            </div>

            <div class="col-lg-12">
                <!-- Contact Form Section Start -->
                <div class="contact-form-section">
                    <!-- Google Map Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5965576275066!2d3.352965975680149!3d6.5724933225906375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b920c75795fe9%3A0xf5f9ac428e24631c!2sOduduwa%20Way%2C%20Ikeja%20GRA%2C%20Ikeja%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1751644662635!5m2!1sen!2sng"  allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map End -->

                    <!-- Contact Us Form Start -->
                    <div class="contact-us-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Send us a <span>message</span></h2>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Form Start -->
                        <div class="contact-form">
                            <!-- Contact Form Start -->
                            <form id="contactForm" action="send-mail.php" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                                <div class="row">                                
                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last name" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="email" name ="email" class="form-control" id="email" placeholder="E-mail" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-6 mb-4">
                                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="form-group col-md-12 mb-5">
                                        <textarea name="message" class="form-control" id="message" rows="3" placeholder="Write Message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="col-md-12">
                                        <button type="submit" class="btn-default">submit message</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </form>
                            <!-- Contact Form End -->
                        </div>
                        <!-- Contact Form End -->
                    </div>
                    <!-- Contact Us Form End -->
                </div>
                <!-- Contact Form Section End -->
            </div>
        </div>
    </div>
    <!-- Hero Info Section End -->

    <!-- Footer Start -->
        <?php include 'assets/footer.php'; ?>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var messageText = "<?= $_SESSION['status']  ?? ''?>";

        if (messageText != "") {
            Swal.fire({
                title: "Thank you",
                text: messageText,
                icon: "success",
            });
            <?php unset($_SESSION['status']); ?>
        }   
    </script>

    <?php include 'assets/scripts.php'; ?>
</body>

</html>