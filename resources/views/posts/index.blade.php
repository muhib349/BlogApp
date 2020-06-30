@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="well">
            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
    @endforeach
    {{$posts->links()}}
    @else
        <p>No Post is available!</p>
    @endif
@endsection