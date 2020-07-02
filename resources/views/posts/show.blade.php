@extends('layouts.app')

@section('content')
    <a style="margin-bottom: 10px;" href="/posts" class="btn btn-default">Go Back</a>
    @if (!empty($post))
    <div class="well">
        <img style="width: 20%; height:20%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
        <br><br>
        <h3>{{$post->title}}</h3>
        <div>
            {{$post->body}}
        </div>
        <small>Written by {{$post->user->name}} at {{$post->created_at}}</small>
    </div>
    <hr>

    @if (!Auth::guest() && Auth::user()->id == $post->user_id)
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>
        {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'DELETE', 'class' => 'pull-right']) !!}
            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
        {!! Form::close() !!}
    @endif
    @else
        <p>No Post is available!</p>
    @endif
@endsection