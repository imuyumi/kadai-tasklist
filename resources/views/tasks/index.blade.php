@extends('layouts.app')
@section('content')

    <h1>Task List</h1>
    @if(count($tasks)>0)
     <table class="table table-stpiped">
      <thead>
        <tr>
          <th>id</th>
          <th>CONTENT</th>
          <th>STATUS</th>
        </tr>
      </thead>
      <tbody>
        @foreach($tasks as $task)  
      </tbody>
        <tr>
            <td>{!!link_to_route('tasks.show',$task->id,['id'=>$task->id])!!}</td>
            <td>{{$task->content}}</td>
            <td>{{$task->status}}</td>
        </tr>
            @endforeach
        </table>
    @endif
    {!! link_to_route('users.show','create new task',['id'=>$user->id],['class'=>'btn btn-success']) !!}

@endsection
