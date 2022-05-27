<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            {{-- Background image --}}
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member2.png') }}); background-size: cover;"></div>
            {{-- Welcome mat --}}
            <div class="col-lg-6 background" style="background-color: #a32a29;">

                <div class="content-container" style=" display: flex; justify-content: center;margin-top: 40%; flex-direction: column; line-height: 1.6;"> 
                        {{-- welcome message --}}
                <div style="display: flex; justify-content: center; margin-left: 10px;" data-aos="fade-up">
                <h1 style="color: whitesmoke; font-size: 2rem;">Dear Member. We celebrate you for choosing to be a member.  
                    Please share with us some of the most treasured experiences of our partnership with you since you joined Equity Bank </h1>
            </div>

            {{-- Buttons --}}
            <div class="row d-flex button-section justify-content-around" data-aos="fade-down">
              <div class="col-lg-6">
              <a href="{{route('get-achievement')}}" class="btn-learn-more">Start <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
            </div>
              <div class="col-lg-6">
              <a href="#coming-soon" class="btn-learn-more">Invite a friend <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
            </div>
            </div>                
            </div>                
            </div>
            
        </div>
    </div>
    

    @endsection

</x-master-page>