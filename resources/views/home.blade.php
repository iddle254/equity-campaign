<x-master-page>
    @section('content')

      <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({{ asset('img/slide/slide-1.jpg') }})">
          <div class="carousel-container">
            <div class="container col">
              <div class="row">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Member</span>
                  </span>
                </button>
              </div>
              <div class="row" style="display: flex  !important; justify-content: flex-end !important;">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Non-Member</span>
                  </span>
                </button>
              </div>
              
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-2.jpg') }})">
          <div class="carousel-container">
            <div class="container col">
              <div class="row">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Member</span>
                  </span>
                </button>
              </div>
              <div class="row" style="display: flex  !important; justify-content: flex-end !important;">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Non-Member</span>
                  </span>
                </button>
              </div>
              
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({{ asset('img/slide/slide-3.jpg') }})">
          <div class="carousel-container">
            <div class="container col">
              <div class="row">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Member</span>
                  </span>
                </button>
              </div>
              <div class="row" style="display: flex  !important; justify-content: flex-end !important;">
                <button class="member-btn btn-get-started animate__animated animate__fadeInUp scrollto">
                  <span class="text-container">
                    <span class="text">Non-Member</span>
                  </span>
                </button>
              </div>
              
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
      </a>

    </div>
  </section><!-- End Hero -->

  <!-- ======= Call to action Section ======= -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up" style="margin-bottom: 100px !important;">

      <div class="about-title">
          <p>Are you a member?</p>
        
          <h2>Among the customers in our region.</h2>
        
        
      </div>

      <div class="row content">
        <div class="col-lg-6">
          <a href="{{route('welcome')}}" class="btn-learn-more">I am a member <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
          
        </div>
        <div class="col-lg-6">
          <a href="{{route('welcome')}}" class="btn-learn-more">I am not a member <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
          
        </div>
      </div>

    </div>
  </section><!-- Call to action Section -->

  @endsection


</x-master-page>
