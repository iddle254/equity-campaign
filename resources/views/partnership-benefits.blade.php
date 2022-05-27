<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member4.png') }}); background-size: cover;"></div>
            <div class="col-lg-6 partnerships-content" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-down"  class="d-flex" style="margin-top: 8px; justify-content: center;">
                    <div class="numberCircle">1</div>
                <div class="numberCircle active">2</div>
                <div class="numberCircle">3</div>
                <div class="numberCircle">4</div>
                </div>

                <div data-aos="fade-down"  style="display: flex; justify-content: center; margin-top: 3em; margin-left: 10px;">

                <h1 style="color: whitesmoke; font-size: 2rem;">Because of my partnership with Equity</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: flex-start; margin-left: 20px">
                    <form action="#">
                        <input type="checkbox" id="improved_life" name="improved_life" value="improved_life">
                        <label class="checkbox-label" for="improved_life"> My life has improved</label><br>
                        <input type="checkbox" id="am_happy" name="am_happy" value="am_happy">
                        <label class="checkbox-label" for="am_happy"> I am a happy person</label><br>
                        <input type="checkbox" id="career_advancement" name="career_advancement" value="career_advancement">
                        <label class="checkbox-label" for="career_advancement"> I have advanced my career</label><br>
                        <input type="checkbox" id="expanded_business" name="expanded_business" value="expanded_business">
                        <label class="checkbox-label" for="expanded_business"> I have expanded my business to more regions</label><br> 
                        <input type="checkbox" id="travelled_for_business" name="travelled_for_business" value="travelled_for_business">
                        <label class="checkbox-label" for="travelled_for_business">I have travelled many times to other countries for business</label><br>
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