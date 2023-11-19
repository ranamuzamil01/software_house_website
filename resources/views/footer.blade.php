
    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">

        <div class="footer-newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-12 text-center">
                        <h4>Our Newsletter</h4>
                        <p>Tamen quem nulla quae legam multos aute sint culpa legam noster magna</p>
                    </div>
                    <div class="col-lg-6">
                        <form action="{{url('/subscriber')}}" method="post">
                            @csrf
                            <input type="email" name="email"><input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer-top">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-5 col-md-12 footer-info">
                        <a href="{{url("/")}}" class="logo d-flex align-items-center">
                            <img src="{{asset('assets/img/mainlogo.png')}}" alt="">
                            {{-- <span>FlexStart</span> --}}
                        </a>
                        <p>lnnovative Solutions. Seamless Experiences. Transforming Businesses through Cutting-edge Technology. Welcome to Softwebies, Your Trusted Software House.</p>
                        <div class="social-links mt-3">
                            {{-- <a href="#" class="twitter"><i class="bi bi-twitter"></i></a> --}}
                            <a href="https://www.facebook.com/softwebies/" class="facebook"><i class="bi bi-facebook"></i></a>
                            <a href="https://github.com/ZahidAkbar2370" class="github"><i class="bi bi-github"></i></a>
                            <a href="https://www.linkedin.com/company/softwebies/mycompany/" class="linkedin"><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/')}}">Home</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/contact')}}">Contact</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/product') }}">Products</a></li>
                      
                <li><i class="bi bi-chevron-right"></i> <a href="{{ url('/team') }}">Our Team</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="{{url('/portfolio')}}">Portfolio</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-6 footer-links">
                        <a href="#services"><h4>Our Services</h4></a>
                        <ul>
                            <li><i class="bi bi-chevron-right"></i> <a href="#web-design">Web Design</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#web-development">Web Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#wordpress">Wordpress</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#android-development">Android App Development</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#email-marketing">E-mail Marketing</a></li>
                            <li><i class="bi bi-chevron-right"></i> <a href="#e-commerce">E-commerce</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
                        <a href="{{url('/contact')}}"><h4>Contact</h4></a>
                        <p>
                            Lab E Neelam Pull, GC University Road, Layyah, Punjab,
                            Pakistan <br><br>
                            <strong>Phone:</strong>+923081312527<br>
                            <strong>Email:</strong> softwebies@gmail.com<br>
                        </p>

                    </div>

                </div>
            </div>
        </div>

        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Softwebies</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/flexstart-bootstrap-startup-template/ -->
                Designed by <a href="{{url('/')}}">Softwebies</a>
            </div>
        </div>
    </footer><!-- End Footer -->


    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a> 
        
 
<!-- Vendor JS Files -->

<script src="{{asset('assets/vendor/purecounter/purecounter_vanilla.js')}}"></script>
<script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
<script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
<script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
<script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>
<script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>

<!-- Template Main JS File -->
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="{{('https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css')}}"></script>
</body>

</html>
