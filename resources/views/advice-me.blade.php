<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member6.png') }}); background-size: cover;"></div>
            <div class="col-lg-6" style="background-color: #a32a29;">
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

                {!!Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AdviceMesController@store'])!!}
                <br>
                {!! Form::checkbox('advice_me_on[]', 'get_mentor', false, ['class'=>'checkbox']) !!}
                {!! Form::label('get_mentor', 'How to get a mentor to help me grow in my chosen field', ['class'=>'checkbox-label']) !!}                
                <br>
                {!! Form::checkbox('advice_me_on[]', 'finding_a_partner') !!}
                {!! Form::label('finding_a_partner', 'How to find a partnerto help me grow my business.', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('advice_me_on[]', 'accessing_more_services') !!}
                {!! Form::label('accessing_more_services', 'How to access more services from Equity', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('advice_me_on[]', 'expand_business_abroad') !!}
                {!! Form::label('expand_business_abroad', 'How to expand my business to other countries', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('advice_me_on[]', 'network_with_businesses') !!}
                {!! Form::label('network_with_businesses', 'How to network with other businesses', ['class'=>'checkbox-label']) !!} 
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