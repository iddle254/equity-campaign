<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member4.png') }}); background-size: cover;"></div>
            <div class="col-lg-6" style="background-color: #a32a29;">
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

                {!!Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\PartnershipBenefitsController@store'])!!}
                <br>
                {!! Form::checkbox('partnership_benefits[]', 'improved_life', false, ['class'=>'checkbox']) !!}
                {!! Form::label('improved_life', 'My life has improved', ['class'=>'checkbox-label']) !!}                
                <br>
                {!! Form::checkbox('partnership_benefits[]', 'am_happy') !!}
                {!! Form::label('am_happy', 'Am a happy person', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('partnership_benefits[]', 'career_advancement') !!}
                {!! Form::label('career_advancement', 'I have advanced my career', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('partnership_benefits[]', 'expanded_business') !!}
                {!! Form::label('expanded_business', 'I have expanded my business to more regions', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('partnership_benefits[]', 'travelled_for_business') !!}
                {!! Form::label('travelled_for_business', 'I have travelled many times to other countries for business', ['class'=>'checkbox-label']) !!} 
                <br>
               
                <div class="form-group spaced">
                    {!!Form::submit('Next', ['class'=> 'btn-learn-more']) !!}
                 </div>

                {!!Form::close()!!} 
            </div>
            </div>
                
            </div>
            
        </div>
    </div>
    

    @endsection

</x-master-page>