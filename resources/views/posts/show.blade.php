@extends('layouts.app')

@section( 'content')
        
        <h1>{{$post->title}}</h1>
        
        <a href="/posts" class="btn btn-primary"> Go Back</a>
        <div>
        <hr>
        {{$post->body}}
        </div>
        <small>Written on {{$post->created_at}}</small>

        

@endsection
