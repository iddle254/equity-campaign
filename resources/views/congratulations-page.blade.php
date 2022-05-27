<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            {{-- Background image --}}
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member8.png') }}); background-size: cover;"></div>
            {{-- Welcome mat --}}
            <div class="col-lg-6 background" style="background-color: #a32a29;">

                <div class="content-container" style=" display: flex; justify-content: center;margin-top: 40%; flex-direction: column; line-height: 1.6;"> 
                <h1 data-aos="fade-up" style="color: #F4AB7A; font-size: 2rem;">Congratulations!</h1>

            {{-- Buttons --}}
            <div class="row d-flex justify-content-around" data-aos="fade-down">
                <h2 style="color: whitesmoke">
                You’ve won a gift Hamper courtesy of EQUITY. We shall contact you through the phone number shared. Thank you for being part of the Equity Movement!
            </h2>

                <h1 data-aos="fade-up" style="color: #F4AB7A; font-size: 2rem;">Karibu Member!</h1>
            </div>                
            </div>                
            </div>
            
        </div>
    </div>
    

    @endsection

</x-master-page>