@extends('layouts.app')

@section( 'content')
<div class="container">
    
        <h1>Posts</h1>
        @if(count($posts)>=1)
        @foreach($posts as $post)
        <div class="card" style="width: 80%; margin:2rem auto; padding:1rem">
            <h3><a href="posts/{{$post->id}}">{{$post->title}}</a></h3>
            <small>Written on {{$post->created_at}}</small>
        </div>
        @endforeach
        {{$posts->links()}}
        @else
        <p>No post found</p>
        @endif
    

</div>
@endsection

