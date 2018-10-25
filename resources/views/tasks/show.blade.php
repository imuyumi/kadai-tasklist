@extends('layouts.app')
@section('content')
<style>
    .status{
        border-bottom:1px solid #ddd;
    }
</style>
<h1>Detail id:{{$task->id}}</h1>
    <div class='container'>
        <div class='col-xs-12 col-lg-8'>
         <table class="table table-condensed">
            <tr>
                <th>id</th>
                <td>{{$task->id}}</td>
            </tr>
            <tr>
                <th>content</th>
                <td>{{$task->content}}</td>
            </tr>
            <tr class='status'>
                <th>status</th>
                <td>{{$task->status}}</td>
            </tr>
        </table>

        <div class="form-group">
            {!! link_to_route('tasks.edit','update this task',['id'=>$task->id],['class'=>'btn btn-primary']) !!}
            {!! Form::model($task,['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        </div>
          
        <div class="form-group">
                {!! form::submit('delete',['class'=>'btn btn-danger']) !!}
        </div>
        {!! Form::close() !!}
    </div>
    </div>
@endsection
