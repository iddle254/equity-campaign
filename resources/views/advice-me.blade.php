<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member6.png') }}); background-size: cover;"></div>
            <div class="col-lg-6 advice-content" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-down"  class="d-flex" style="margin-top: 8px; justify-content: center;">
                    <div class="numberCircle">1</div>
                <div class="numberCircle">2</div>
                <div class="numberCircle">3</div>
                <div class="numberCircle active">4</div>
                </div>

                <div data-aos="fade-down"  style="display: flex; justify-content: center; margin-top: 3em; margin-left: 10px;">

                <h1 style="color: whitesmoke; font-size: 2rem;">I would request Equity to advice me on the following</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: flex-start; margin-left: 20px">

                    <form action="#">
                        <input type="checkbox" id="get_mentor" name="get_mentor" value="get_mentor">
                        <label class="checkbox-label" for="get_mentor"> How to get a mentor to help me grow in my chosen field</label><br>
                        <input type="checkbox" id="finding_a_partner" name="finding_a_partner" value="finding_a_partner">
                        <label class="checkbox-label" for="finding_a_partner"> How to find a partnerto help me grow my business.</label><br>
                        <input type="checkbox" id="accessing_more_services" name="accessing_more_services" value="accessing_more_services">
                        <label class="checkbox-label" for="accessing_more_services"> How to access more services from Equity</label><br>
                        <input type="checkbox" id="expand_business_abroad" name="expand_business_abroad" value="expand_business_abroad">
                        <label class="checkbox-label" for="expand_business_abroad"> How to expand my business to other countries</label><br> 
                        <input type="checkbox" id="network_with_businesses" name="network_with_businesses" value="network_with_businesses">
                        <label class="checkbox-label" for="network_with_businesses">How to network with other businesses</label><br>
                        <br> 
                        <div class="form-group spaced">
                            <a type="submit" class="btn-learn-more">Next <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
                    </div>
                      </form> 
               
            </div>
            </div>
                
            </div>
            
        </div>
    </div>
    

    @endsection

</x-master-page> 