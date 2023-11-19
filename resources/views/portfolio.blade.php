

<body>

 @extends('header')

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="{{url('/')}}">Home</a></li>
          {{-- <li><a href="#portfolio">Portfolio</a></li> --}}
        </ol>
        <h2>Portfolio  </h2>

      </div>
    </section><!-- End Breadcrumbs -->



<!-- ======= Portfolio Section ======= -->
<section id="portfolio" class="portfolio">

  <div class="container">

      <header class="section-header">
          {{-- <h2>Portfolio</h2> --}}
          <p>Check our latest work</p>
      </header>

      <div class="row"  data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
              <ul id="portfolio-flters">
                  <li data-filter="*" class="filter-active">All</li>
                  <li data-filter=".filter-app">App</li>
                  <li data-filter=".filter-card">Card</li>
                  <li data-filter=".filter-web">Web</li>
              </ul>
          </div>
      </div>

      <div class="row gy-4 portfolio-container"  data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>App 1</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="App 1"><i class="bi bi-plus"></i></a>
                          <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                  class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>App 2</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="App 2"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Card 2</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Card 2"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Web 2</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Web 2"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>App 3</h4>
                      <p>App</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="App 3"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Card 1</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Card 1"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Card 3</h4>
                      <p>Card</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Card 3"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
              <div class="portfolio-wrap">
                  <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
                  <div class="portfolio-info">
                      <h4>Web 3</h4>
                      <p>Web</p>
                      <div class="portfolio-links">
                          <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery"
                              class="portfokio-lightbox" title="Web 3"><i class="bi bi-plus"></i></a>
                              <a href="{{url('/portfolio-details')}}" class="more-details-btn" title="More Details"><i
                                class="bi bi-link"></i></a>
                      </div>
                  </div>
              </div>
          </div>

      </div>

  </div>

</section><!-- End Portfolio Section -->



  







  

  </main><!-- End #main -->

  @extends('footer')

  
  
  
  <script src="https://code.jquery.com/jquery-3.7.0.min.js" integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
  {{-- <script>
   document.addEventListener("DOMContentLoaded", function() {
  var moreDetailsBtn = document.querySelector(".more-details-btn");
  var portfolioDetails = document.getElementById("portfolio-details");

  moreDetailsBtn.addEventListener("click", function(event) {
    event.preventDefault();
    portfolioDetails.style.display = "block";
    portfolioDetails.scrollIntoView({ behavior: 'smooth' });
  });
});

  </script> --}}

<script>
  $(document).ready(function() {
  var $portfolioFilters = $('#portfolio-flters li');

  $portfolioFilters.on('click', function() {
    $portfolioFilters.removeClass('filter-active');
    $(this).addClass('filter-active');

    var filterValue = $(this).attr('data-filter');
    $('.portfolio-item').hide();
    $(filterValue).show();
  });
});

</script>

</body>