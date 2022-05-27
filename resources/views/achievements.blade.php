<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 achievements-content" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-up" class="d-flex" style="margin-top: 8px; justify-content: center;">
                    <div class="numberCircle active">1</div>
                <div class="numberCircle">2</div>
                <div class="numberCircle">3</div>
                <div class="numberCircle">4</div>
                </div>

                <div data-aos="fade-up"  style="width: 90%; display: flex; justify-content: center; margin-top: 3em;">

                <h1 style="color: whitesmoke; font-size: 2rem;">Through my partnership with Equity:</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: flex-start; margin-left: 20px">

                    <form action="#">
                        <input type="checkbox" id="start_business" name="start_business" value="start_business">
                        <label class="checkbox-label" for="start_business"> I have managed to start a business</label><br>
                        <input type="checkbox" id="manage_business" name="manage_business" value="manage_business">
                        <label class="checkbox-label" for="manage_business"> I have been trained on how to manage a business</label><br>
                        <input type="checkbox" id="grow_business" name="grow_business" value="grow_business">
                        <label class="checkbox-label" for="grow_business"> I have grown my business</label><br>
                        <h4 style="font-size: 1.2rem; color: whitesmoke;">I have borrowed a loan(s) which have enabled me to:</h4>
                <ul>
                    <div>
                        <input type="checkbox" id="pay_for_further_education" name="pay_for_further_education" value="pay_for_further_education">
                        <label class="checkbox-label" for="pay_for_further_education">Pay for my further education</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="pay_for_children_education" name="pay_for_children_education" value="pay_for_children_education">
                        <label class="checkbox-label" for="pay_for_children_education">Pay for my children's education</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="build_buy_home" name="build_buy_home" value="build_buy_home">
                        <label class="checkbox-label" for="build_buy_home">Build/buy a home</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="build_commercial_buildings" name="build_commercial_buildings" value="build_commercial_buildings">
                        <label class="checkbox-label" for="build_commercial_buildings">Build commercial buildings</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="buy_assets" name="buy_assets" value="buy_assets">
                        <label class="checkbox-label" for="buy_assets">Buy assets (e.g., a car, machinery etc)</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="improve_farming_to_commercial_business" name="improve_farming_to_commercial_business" value="improve_farming_to_commercial_business">
                        <label class="checkbox-label"for="improve_farming_to_commercial_business">Improve my farming into a commercial business</label><br>
                    </div>
                    <div>
                        <input type="checkbox" id="pay_for_holiday" name="pay_for_holiday" value="pay_for_holiday">
                        <label class="checkbox-label" for="pay_for_holiday">Pay for a holiday</label><br>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="other" class="checkbox-label">Other (Please specify)</label>
                        <textarea class="form-control" id="other" value="other" name="other" rows="4" cols="100"></textarea>
                        <br>
                    </div>
                    
                    </ul> 
                        <br> 
                        <div class="form-group spaced">
                            <a type="submit" class="btn-learn-more">Next <span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
                    </div>
                      </form>              
            </div>
            </div>
                
            </div>
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member3.png') }}); background-size: cover;"></div>
        </div>
    </div>
    

    @endsection

</x-master-page>