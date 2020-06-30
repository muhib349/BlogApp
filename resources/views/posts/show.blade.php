@extends('layouts.app')

@section('content')
    <a style="margin-bottom: 10px;" href="/posts" class="btn btn-default">Go Back</a>
    @if (!empty($post))
    <div class="well">
        <h3>{{$post->title}}</h3>
        <div>
            {{$post->body}}
        </div>
        <small>Written on {{$post->created_at}}</small>
    </div>
    <hr>
    <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit</a>

    {!! Form::open(['action' => ['PostsController@destroy', $post->id], 'method'=> 'DELETE', 'class' => 'pull-right']) !!}
        {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
    {!! Form::close() !!}
    @else
        <p>No Post is available!</p>
    @endif
@endsection