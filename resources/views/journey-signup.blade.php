<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 signup-content" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-down"  style="display: flex; justify-content: center; margin-top: 3em; margin-left: 10px;">

                <h1 style="color: whitesmoke; font-size: 2rem;">The first 500 people to participate in this journey will win rewards. Please fill in your details below:</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: center; margin-left: 20px">
                    <form action="#">
                        <div class="form-group col">
                        <label class="checkbox-label" for="name">Name*</label>
                        <input placeholder="Please enter your name" class="form-control" type="text" id="name" name="name" >
                    </div> 
                        <br>
                        <div class="form-group col">
                        <label class="checkbox-label" for="phone_number"> Phone Number*</label>
                        <input placeholder="Please enter your phone number" class="form-control" type="text" id="phone_number" name="phone_number">
                    </div>
                        <br>
                        <div class="form-group col">
                            <label class="checkbox-label" for="email">Email*</label>
                        <input placeholder="Please enter your email" class="form-control" type="text" id="email" name="email">
                    </div>
                        <br>
                         
                        <div class="form-group spaced">
                            <a type="submit" class="btn-learn-more">Submit<span class="button-icon bi bi-chevron-right" aria-hidden="true"></span></a>
                    </div>
                      </form>
            </div>
            </div>
                
            </div>
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member7.png') }}); background-size: cover;"></div>
        </div>
    </div>
    

    @endsection

</x-master-page>