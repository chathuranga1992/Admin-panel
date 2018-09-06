@extends('layouts.app')

@section('content')
    <h1>Posts</h1>

    @if(count($posts) > 0)
        @foreach($posts as $post)
            <div class="list-group-item-dark ">

            <h3><a href="/posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Post created on {{$post->created_at}} by {{$post->user->name}}</small>

            </div><br>
        @endforeach
        {{ $posts ->links() }}
    @else
        <p>No Posts</p>
    @endif
        
@endsection