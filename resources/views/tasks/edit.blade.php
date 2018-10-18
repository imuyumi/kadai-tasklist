@extends('layouts.app')
@section('content')
    <h1>Edit id:{{$task->id}}</h1>
    {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
        {!! Form::label('content','task title') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('update!') !!}
    {!! Form::close() !!}
@endsection
