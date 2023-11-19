@extends('header')

<!-- ======= Breadcrumbs ======= -->
<section class="breadcrumbs">
    <div class="container">

        <ol>
            <li><a href="{{ url('/') }}">Home</a></li>
            <li>Team Details</li>
        </ol>
        <h2>Team Details</h2>

    </div>
</section><!-- End Breadcrumbs -->
 <!-- ======= Team Section ======= -->
 <section id="team" class="team mt-5">

    <div class="container">

        <header class="section-header">
            {{-- <h2>Team</h2> --}}
            <p>Our hard working team</p>
        </header>

        <div class="row gy-4">

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" "
                data-aos-delay="100">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/umairgujjar.jpg " class="w-100 h-300 "
                            style="width:100%;height: 300px;" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Walter White</h4>
                        <span>Chief Executive Officer</span>
                        <p>Velit aut quia fugit et et. Dolorum ea voluptate vel tempore tenetur ipsa quae aut.
                            Ipsum exercitationem iure minima enim corporis et voluptate.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" "
                data-aos-delay="200">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Sarah Jhonson</h4>
                        <span>Product Manager</span>
                        <p>Quo esse repellendus quia id. Est eum et accusantium pariatur fugit nihil minima
                            suscipit corporis. Voluptate sed quas reiciendis animi neque sapiente.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" "
                data-aos-delay="300">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>William Anderson</h4>
                        <span>CTO</span>
                        <p>Vero omnis enim consequatur. Voluptas consectetur unde qui molestiae deserunt.
                            Voluptates enim aut architecto porro aspernatur molestiae modi.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6 d-flex align-items-stretch" "
                data-aos-delay="400">
                <div class="member">
                    <div class="member-img">
                        <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                        <div class="social">
                            <a href=""><i class="bi bi-twitter"></i></a>
                            <a href=""><i class="bi bi-facebook"></i></a>
                            <a href=""><i class="bi bi-instagram"></i></a>
                            <a href=""><i class="bi bi-linkedin"></i></a>
                        </div>
                    </div>
                    <div class="member-info">
                        <h4>Amanda Jepson</h4>
                        <span>Accountant</span>
                        <p>Rerum voluptate non adipisci animi distinctio et deserunt amet voluptas. Quia aut
                            aliquid doloremque ut possimus ipsum officia.</p>
                    </div>
                </div>
            </div>

        </div>

    </div>

</section><!-- End Team Section -->






@extends('footer')