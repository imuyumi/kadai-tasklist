@extends('layouts.app')
@section('content')
    <h1>新規タスクの登録</h1>
        {!! Form::model($task,['route'=>'tasks.store']) !!}
            {!! Form::label('content','task title') !!}
            {!! Form::text('content') !!}
            {!! Form::submit('create!') !!}
        {!! Form::close() !!}    
            
@endsection
