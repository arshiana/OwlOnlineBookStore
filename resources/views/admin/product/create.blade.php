@extends('admin.layout.admin')

@section('content')
<div class="container">
    <div class="col-md-5" style="background-color: white">
        <div class="form-area">
    <h3>Add Product</h3>
    <div class="row">
        <div class=".col-md-6.col-md-offset-3">
        {!! Form::open(['route'=>'product.store','method'=>'post','files'=>true]) !!}

        <div class="form-group">
            {!! Form::label('name','Name') !!}
            {!! Form::text('name',null,array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
            {!! Form::label('description','Description') !!}
            {!! Form::text('description',null,array('class'=>'form-control')) !!}
        </div>
        <div class="form-group">
                {!! Form::label('price','Price') !!}
                {!! Form::text('price',null,array('class'=>'form-control')) !!}
        </div>

        <div class="form-group">
                {!! Form::label('category_id','Category') !!}
                {!! Form::select('category_id',$categories,null,['class'=>'form-control','placeholder'=>'Select Category']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('image','Image') !!}
            {!! Form::file('image',array('class'=>'form-control')) !!}
        </div>
            {!! Form::submit('Create',array('class'=>'btn btn-primary')) !!}
        {!! Form::close() !!}
        </div>
    </div>
        </div>
    </div>
</div>
@endsection