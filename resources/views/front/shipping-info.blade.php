@extends('layout.main')

@section('content')
<div class="container">
    <br>
    <h3>Shipping Info</h3>
    <br>

    <br>
    <div class="from-row">
        <div class="small-6 small-centered col-lg-6" >
            {!! Form::open(['route' => 'address.store', 'method' => 'post']) !!}

            <div class="form-group">
                {{ Form::label('addressline', 'Address Line') }}
                {{ Form::text('addressline', null, array('class' => 'form-control')) }}
            </div>

            <div class="form-group">
                {{ Form::label('city', 'City') }}
                {{ Form::text('city', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('state', 'State') }}
                {{ Form::text('state', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('zip', 'Zip') }}
                {{ Form::text('zip', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('country', 'Country') }}
                {{ Form::text('country', null, array('class' => 'form-control')) }}
            </div>
            <div class="form-group">
                {{ Form::label('phone', 'Phone') }}
                {{ Form::text('phone', null, array('class' => 'form-control')) }}
            </div>

            {{ Form::submit('Proceed to Payment', array('class' => 'button success')) }}
            {!! Form::close() !!}
        </div>
    </div>
</div>
    <br>
    <br>
@endsection