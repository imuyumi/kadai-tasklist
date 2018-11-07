@extends('layouts.app')
@section('content')
    @if(Auth::check())
        <?php $user=Auth::user(); ?>
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