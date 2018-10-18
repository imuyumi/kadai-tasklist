@extends('layouts.app')
@section('content')
    <h1>Create New Task</h1>
        {!! Form::model($task,['route'=>'tasks.store']) !!}
            {!! Form::label('content','task title') !!}
            {!! Form::text('content') !!}
            {!! Form::submit('create!') !!}
        {!! Form::close() !!}    
            
@endsection
