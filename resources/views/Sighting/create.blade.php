@extends('app')

@section('content')
    <h1>Create a New Sighting</h1>
    <hr/>

    @if ($errors->has())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                {{ $error }}<br>
            @endforeach
        </div>
    @endif

    {!! Form::open(array('id' => 'sighting')) !!}
        <div class="form-group">
            {!! Form::label('name', 'Name: ') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('email', 'Email: ') !!}
            {!! Form::text('email', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('phoneNumber', 'Phone Number: ') !!}
            {!! Form::text('phoneNumber', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('date', 'Date: ') !!}
            {!! Form::text('date', null, array('required' => 'required', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('time', 'Time: ') !!}
            {!! Form::text('time', null, array('required' => 'required', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('location', 'Location: ') !!}
            {!! Form::text('location', null, array('required' => 'required', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('species', 'Species: ') !!}
            {!! Form::text('species', null, array('required' => 'required', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::label('description', 'Description: ') !!}
            {!! Form::textarea('description', null, array('required' => 'required', 'class' => 'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Add Sighting', ['class' => 'btn btn-primary form-control']) !!}
        </div>
    {!! Form::close() !!}
    <script src="/bower_components/jquery/dist/jquery.js"></script>
    <script src="/bower_components/jquery-validation/dist/jquery.validate.js"></script>
    <script src="/bower_components/jquery-validation/dist/additional-methods.js"></script>
    <script>
        var dt = new Date()5

        $("#sighting").validate({
           rules:{
               email: {
                   email:true
               },
               phoneNumber: {
                   phoneUS:true
               },
               date: {
                   date:true,
                   max: dt
               }
           }
        });
    </script>

@stop