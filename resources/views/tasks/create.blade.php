@extends('layouts.app')
@section('content')
<h1>Create New Task</h1>
<div class='container'>
    <div class='row'>
       {!! Form::model($task,['route'=>'tasks.store']) !!}
        <div class='col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-6'>
            <div class='form-group'>
             {!! Form::label('status','task status') !!}
             {!! Form::select('status',['DONE'=>'DONE','NOT'=>'NOT'],null,['class'=>'form-control']) !!}
            </div>
            <div class='form-group'>
            {!! Form::label('content','task title') !!}
            {!! Form::text('content',null ,['class'=>'form-control']) !!}
            </div>
            <div class='form-group'>
            {!! Form::submit('create!',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}    
            </div>
        </div>
    </div>
</div>
            
@endsection
