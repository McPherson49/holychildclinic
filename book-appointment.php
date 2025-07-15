<?php session_start(); ?>

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
                        <h1 class="text-anime-style-2" data-cursor="-opaque">Book <span>appointment</span></h1>
                        <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        </nav>
                    </div>
                    <!-- Page Header Box End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header Section End -->
	
	<!-- Page Book Appointment Section Start -->
    <div class="page-book-appointment">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <!-- Appointment Form Start -->
                    <div class="appointment-form">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-2" data-cursor="-opaque">Book appointment <span>today!</span></h2>
                            <p>Scheduling your visit is quick and easy—connect with our team today and take the first step toward personalized care.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- Contact Us Form Start -->
                        <form id="appointmentForm" action="send-appointment.php" method="POST" data-toggle="validator" class="wow fadeInUp" data-wow-delay="0.2s">
                            <div class="row">
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-4">
                                    <input type="email" name ="email" class="form-control" id="email" placeholder="Email Address" required>
                                    <div class="help-block with-errors"></div>
                                </div>
                                
                                <div class="form-group col-md-6 mb-4">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <select name="services" class="form-control form-select" id="services" required>
                                        <option value="" disabled selected>Choose Services</option>
                                        <option value="In_Vitro_Fertilization">In Vitro Fertilization (IVF)</option>
                                        <option value="Egg_Freezing">Egg Freezing</option>
                                        <option value="Embryo_Freezing">Embryo Freezing</option>
                                        <option value="Fertility_Preservation">Fertility Preservation</option>
                                        <option value="Surrogacy_Support">Surrogacy Support</option>
                                        <option value="Male_Fertility_Care">Male Fertility Care</option>
                                        <option value="Ovulation_Induction">Ovulation Induction</option>
                                        <option value="Genetic_Testing">PGT (Genetic Testing)</option>
                                    </select>
                                    <div class="help-block with-errors"></div>
                                </div>      
                                
                                <div class="form-group col-md-12 mb-4">
                                    <input type="date" name="date" class="form-control" id="date" required>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-lg-12">
                                    <div class="contact-form-btn">
                                        <button type="submit" class="btn-default">book an appointment</button>
                                        <div id="msgSubmit" class="h3 hidden"></div>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <!-- Contact Us Form End -->
                    </div>
                    <!-- Appointment Form Start -->
                </div>
                
                <div class="col-lg-6">
                    <!-- Our Appointment Image Start -->
                    <div class="our-appointment-image">
                        <figure class="image-anime">
                            <img src="images/appointment-image.jpg" alt="">
                        </figure>

                        <div class="open-time-box">
                            <div class="icon-box">
                                <img src="images/icon-clock.svg" alt="">
                            </div>
                            <div class="open-time-box-content">
                                <p>Monday - Friday: 08:00 - 18:00</p>
                                <p>Saturday: 08:00 - 12:00</p>
                            </div>
                        </div>
                    </div>
                    <!-- Our Appointment Image End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Book Appointment Section End -->
    
    <!-- Footer Start -->
        <?php include 'assets/footer.php'; ?>
    <!-- Footer End -->

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        var messageText = "<?= $_SESSION['status']  ?? ''?>";

        if (messageText != "") {
            Swal.fire({
                title: "Thank you for your appointment, We will get back to you shortly!",
                text: messageText,
                icon: "success",
            });
            <?php unset($_SESSION['status']); ?>
        }   
    </script>

    <?php include 'assets/scripts.php'; ?>
</body>

</html>