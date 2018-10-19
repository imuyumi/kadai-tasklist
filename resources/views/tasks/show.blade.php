@extends('layouts.app')
@section('content')
    <h1>Detail id:{{$task->id}}</h1>
    <p>{{$task->content}}</p>
    <p>{{$task->status}}</p>
    {!! link_to_route('tasks.edit','update this task',['id'=>$task->id]) !!}
    
    {!! Form::model($task,['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! form::submit('delete') !!}
    {!! Form::close() !!}
@endsection
