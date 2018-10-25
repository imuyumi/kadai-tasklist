@extends('layouts.app')
@section('content')
    <h1>Edit id:{{$task->id}}</h1>
<div class='container'>
    <div class='row'>
        {!! Form::model($task,['route'=>['tasks.update',$task->id],'method'=>'put']) !!}
        <div class='form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-6'>
            {!! Form::label('status','task status') !!}
            {!! Form::select('status',['DONE'=>'done','NOT'=>'not']) !!}
        </div>
        <div class='form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-6'>
            {!! Form::label('content','task title') !!}
            {!! Form::text('content',null,['class'=>'form-control']) !!}
        </div>
         <div class='form-group col-xs-12 col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8 col-lg-6'>
        {!! Form::submit('update!',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection
