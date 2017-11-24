@extends('layouts.app')

@section('content')
    <h1>Request training </h1>
    {!! Form::open(['action' => 'TrainingsController@store', 'method' => 'TRAINING', 'enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('name','Training Name ')}}
            {{Form::text('name', '', ['class' => 'form-control'])}}
        </div>
        <div class="form-group">
            {{Form::label('goal','Goal description')}}
            {{Form::textarea('goal', '', [ 'class' => 'form-control'])}}
        </div>
        
        {{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
    {!! Form::close() !!}
    
    
@endsection