@extends('layouts.app')
@section('content')
   <div class="row">
       <aside class="col-xs-4">
           <div class="panel panel-default">
               <div class="panel-heading">
                   <h3 class="panel-title">{{ $user->name }}</h3>
              </div>
              <div class="panel-body">
                  <img class="media-object img-rounded img-responsive" src="{{ Gravatar::src($user->email,500) }}" alt="">
              </div>
           </div>
       </aside>
       <div class="col-xs-8">
           <ul class="nav nav-tabs nav-justified">
               <li>{!! link_to_route('tasks.index', 'My Task List',['id' => $user->id]) !!}</li>
               <!--<li><a href="#">Followings</a></li>-->
               <!--<li><a href="#">Followers</a></li>-->
           </ul>
           @if (Auth::id() == $user->id)
               {!! Form::open(['route'=>'tasks.store']) !!}
                <div class='form-group'>
             {!! Form::label('status','task status') !!}
             {!! Form::select('status',['DONE'=>'DONE','NOT'=>'NOT'],null,['class'=>'form-control']) !!}
            </div>
            <div class='form-group'>
            {!! Form::label('content','task title') !!}
            {!! Form::text('content',null ,['class'=>'form-control']) !!}
            </div>
            <div class='form-group'>
            {!! Form::submit('create task!',['class'=>'btn btn-primary']) !!}
            {!! Form::close() !!}    
            </div>
             <div class="form-group">
                {!! Form::model($user,['route' => ['users.destroy', $user->id], 'method' => 'delete']) !!}
                {!! form::submit('delete account',['class'=>'btn btn-danger']) !!}
                {!! Form::close() !!}
        </div>
          @endif
       </div>
   </div>
@endsection