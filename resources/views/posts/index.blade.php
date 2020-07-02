@extends('layouts.app')

@section('content')
    @if (count($posts) > 0)
    @foreach ($posts as $post)
        <div class="well">
            <div class="row">
                <div class="col-md-2 col-sm-2">
                    <img style="width: 100%" src="/storage/cover_image/{{$post->cover_image}}" alt="">
                </div>
                <div class="col-md-10 col-sm-10">
                    <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
                    <small>Written by {{$post->user->name}} at {{$post->created_at}}</small>
                </div>
            </div>
        </div>
    @endforeach
    {{$posts->links()}}
    @else
        <p>No Post is available!</p>
    @endif
@endsection