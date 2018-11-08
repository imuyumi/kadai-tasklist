@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <?php $user=Auth::user(); ?>
        <h1>Task List</h1>
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
           <?php $user = $tasks->user; ?>
      </tbody>
        <tr>
            <td>{!!link_to_route('tasks.show',$task->id,['id'=>$task->id])!!}</td>
            <td>{{$task->content}}</td>
            <td>{{$task->status}}</td>
        </tr>
            @endforeach
        </table>
        {{ $user->name}}
        
    @else
    <div class="center jumbtron">
            <div class="text-center">
                <h1>Welcome Task List!</h1>
                {!! link_to_route('signup.get','sign up now!',null,['class'=>'btn btn-lg btn-primary']) !!}
            </div>
    </div>
    @endif
@endsection