<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-down"  class="d-flex" style="margin-top: 8px; justify-content: center;">
                    <div class="numberCircle">1</div>
                <div class="numberCircle">2</div>
                <div class="numberCircle active">3</div>
                <div class="numberCircle">4</div>
                </div>

                <div data-aos="fade-down"  style="display: flex; justify-content: center; margin-top: 3em; margin-left: 10px;">

                <h1 style="color: whitesmoke; font-size: 2rem;">As an Equity member, I have improved my lifestyle through</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: flex-start; margin-left: 20px">

                {!!Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\LifestyleImprovementsController@store'])!!}
                <br>
                {!! Form::checkbox('lifestyle_improvements[]', 'equity_medical_cover', false, ['class'=>'checkbox']) !!}
                {!! Form::label('equity_medical_cover', 'Taking medical cover from Equity', ['class'=>'checkbox-label']) !!}                
                <br>
                {!! Form::checkbox('lifestyle_improvements[]', 'equity_insurance_cover') !!}
                {!! Form::label('equity_insurance_cover', 'Taking an insurance cover for my business/car', ['class'=>'checkbox-label']) !!} 
                <br>
               
                <div class="form-group spaced">
                    {!!Form::submit('Next', ['class'=> 'btn-learn-more']) !!}
                 </div>

                {!!Form::close()!!}
            </div>
            </div>
                
            </div>
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member5.png') }}); background-size: cover;"></div>
        </div>
    </div>
    

    @endsection

</x-master-page>