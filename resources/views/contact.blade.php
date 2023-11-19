{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Softwebies Software & Web Technologies</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart
  * Updated: Jun 19 2023 with Bootstrap v5.3.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body> --}}

    @extends('header')

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <ol>
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li>Contact Details</li>
                </ol>
                <h2>Contact Details</h2>

            </div>
        </section><!-- End Breadcrumbs -->


        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">

            <div class="container">

                <header class="section-header">
                    <h2>Contact</h2>
                    <p>Contact Us</p>
                </header>

                <div class="row gy-4">

                    <div class="col-lg-6">

                        <div class="row gy-4">
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-geo-alt"></i>
                                    <h3>Address</h3>
                                    <p>ab E Neelam Pull, GC University Road, Layyah, Punjab,
                                        Pakistan</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-telephone"></i>
                                    <h3>Call Us</h3>
                                    <p>+923081312527<br>+923166356700</p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-envelope"></i>
                                    <h3>Email Us</h3>
                                    <p>softwebies@gmail.com<br>
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="info-box">
                                    <i class="bi bi-clock"></i>
                                    <h3>Open Hours</h3>
                                    <p>Monday - Saturday<br>09:00AM - 08:00PM</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="col-lg-6">
                        <form action="{{ url('/contact') }}" method="post" class="php-email">
                            @csrf
                            <div class="row gy-4">

                                <div class="col-md-6">
                                    <input type="text" name="name" class="form-control" placeholder="Your Name"
                                        required>
                                </div>

                                <div class="col-md-6 ">
                                    <input type="email" class="form-control" name="email" placeholder="Your Email"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject"
                                        required>
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                                </div>
                                {{-- <div class="col-md-12 text-center">
                                    <div class="loading">Loading</div>
                                    <div class="error-message"></div>
                                    <div class="sent-message">Your message has been sent. Thank you!</div>
                                    
                                    <button type="submit">Send Message</button>
                                </div> --}}
                                
                            </div>
                            <button type="submit" class="btn btn-primary text-center">Send Message</button>
                        </form>

                    </div>

                </div>

            </div>

        </section><!-- End Contact Section -->


        {{-- <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220730.150353564!2d71.467008!3d30.1826048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925a78b25f192ed%3A0xe8a7dd7de43e7105!2sSoftwebies!5e0!3m2!1sen!2s!4v1688731526708!5m2!1sen!2s"
            width="90%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" ></iframe> --}}
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d220730.150353564!2d71.467008!3d30.1826048!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3925a78b25f192ed%3A0xe8a7dd7de43e7105!2sSoftwebies!5e0!3m2!1sen!2s!4v1688731610822!5m2!1sen!2s"
            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="mb-5 pb-3"></iframe>
    </main><!-- End #main -->



    @extends('footer')

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>
