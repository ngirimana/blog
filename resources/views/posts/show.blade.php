@extends('layouts.app')

@section( 'content')

<h1>{{$post->title}}</h1>

<a href="/posts" class="btn btn-primary"> Go Back</a>
<div>
    <hr>
    {!!$post->body!!}
</div>
<small>Written on {{$post->created_at}}</small>
<hr>
<a href="/posts/{{$post->id}}/edit" class="btn btn-secondary"> Edit</a>

{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST','class' => 'pull-right'])!!}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('delete',['class'=>'btn btn-danger'])}}
{!!Form::close()!!}
@endsection

