<x-master-page>

    @section('content')
    <div class="col">
        <div class="row" style="height: 100vh;">
            <div class="col-lg-6" style="background-color: #a32a29;">
                <div style=" display: flex; justify-content: center; flex-direction: column; line-height: 1.6;"> 
                <div data-aos="fade-down"  style="display: flex; justify-content: center; margin-top: 3em; margin-left: 10px;">

                <h1 style="color: whitesmoke; font-size: 2rem;">The first 500 people to participate in this journey will win rewards. Please fill in your details below:</h1>

            </div>

                <div data-aos="fade-up"  class="d-flex" style="justify-content: center; margin-left: 20px">

                {!!Form::open(['method'=>'POST', 'action'=>'App\Http\Controllers\MembersController@store'])!!}
                @if ($errors->any())
                    <div class="alert alert-danger">
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                    </div>
                @endif
                <br>
                <div class="form-group col">
                    {!!Form::label('name', 'Name*' , ['class'=>'checkbox-label'])!!}
                    {!!Form::text('name', null, ['class'=>'form-control', 'placeholder' => 'Please enter your name'])!!}
                </div> 
                <br>
                <div class="form-group col">
                    {!!Form::label('phone_number', 'Phone Number*', ['class'=>'checkbox-label'])!!}
                    {!!Form::number('phone_number', null, ['class'=>'form-control', 'placeholder' => 'Please enter your phone number'])!!}
                </div>       
                <br>
                <div class="form-group col">
                    {!!Form::label('email', 'Email*', ['class'=>'checkbox-label'])!!}
                    {!!Form::email('email', null, ['class'=>'form-control', 'placeholder' => 'Please enter your email'])!!}
                 </div>
                <br>
               
                <div class="form-group spaced">
                    {!!Form::submit('Submit', ['class'=> 'btn-learn-more']) !!}
                 </div>

                {!!Form::close()!!}
            </div>
            </div>
                
            </div>
            <div class="col-lg-6 achievements-image" style="background-image: url({{ asset('img/equity/member7.png') }}); background-size: cover;"></div>
        </div>
    </div>
    

    @endsection

</x-master-page>