<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6" style="background-color: #a32a29;">
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

                {!!Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\AchievementController@store'])!!}
                <br>
                {!! Form::checkbox('achievement[]', 'start_business', false, ['class'=>'checkbox']) !!}
                {!! Form::label('start_business', 'I have managed to start a business', ['class'=>'checkbox-label']) !!}                
                <br>
                {!! Form::checkbox('achievement[]', 'manage_business') !!}
                {!! Form::label('manage_business', 'I have been trained on how to manage a business', ['class'=>'checkbox-label']) !!} 
                <br>
                {!! Form::checkbox('achievement[]', 'grow_business') !!}
                {!! Form::label('manage_business', 'I have grown my business' , ['class'=>'checkbox-label']) !!} 
                <br>
                <h4 style="font-size: 1.2rem; color: whitesmoke;">I have borrowed a loan(s) which have enabled me to:</h4>
                <ul>
                    <div>
                    {!! Form::checkbox('achievement[]', 'pay_for_further_education') !!}
                    {!! Form::label('pay_for_further_education', 'Pay for my further education' , ['class'=>'checkbox-label']) !!} 
                    </div>
                    <div>
                    {!! Form::checkbox('achievement[]', 'pay_for_children_education') !!}
                    {!! Form::label('pay_for_children_education', 'Pay for my children\'s education' , ['class'=>'checkbox-label']) !!} 
                    </div>
                    <div>
                        {!! Form::checkbox('achievement[]', 'build_buy_home') !!}
                        {!! Form::label('build_buy_home', 'Build/buy a home' , ['class'=>'checkbox-label']) !!} 
                        </div>
                        <div>
                            {!! Form::checkbox('achievement[]', 'build_commercial_buildings') !!}
                            {!! Form::label('build_commercial_buildings', 'Build commercial buildings' , ['class'=>'checkbox-label']) !!} 
                            </div>
                            <div>
                                {!! Form::checkbox('achievement[]', 'buy_assets') !!}
                                {!! Form::label('buy_assets', 'Buy assets (e.g., a car, machinery etc)' , ['class'=>'checkbox-label']) !!} 
                                </div>
                                <div>
                                    {!! Form::checkbox('achievement[]', 'improve_farming_to_commercial_business') !!}
                                    {!! Form::label('improve_farming_to_commercial_business', 'Improve my farming into a commercial business' , ['class'=>'checkbox-label']) !!} 
                                    </div>
                                    <div>
                                        {!! Form::checkbox('achievement[]', 'pay_for_holiday') !!}
                                        {!! Form::label('pay_for_holiday', 'Pay for a holiday' , ['class'=>'checkbox-label']) !!} 
                                        </div>
                                        <div class="form-group col-md-6">
                                            {!!Form::label('other', 'Other (Please specify)' , ['class'=>'checkbox-label'])!!}
                                            {!!Form::textarea('other', null, ['class'=>'form-control', 'rows'=>3, 'cols'=>100])!!}
                                        </div>
                </ul>              

                <div class="form-group spaced">
                    {!!Form::submit('Next', ['class'=> 'btn-learn-more']) !!}
                 </div>

                {!!Form::close()!!}
            </div>
            </div>
                
            </div>
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member3.png') }}); background-size: cover;"></div>
        </div>
    </div>
    

    @endsection

</x-master-page>