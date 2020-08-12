@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary"> Create Post</a>
                    <h3>Your Blog Posts</h3>
                    @if(count ($posts)>0)
                    <table class="table table-striped">

                        @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a> </td>
                            <td>{!!Form::open(['action'=>['PostsController@destroy',$post->id],'method'=>'POST', "class"=>"pull-right"])!!}
                                {{Form::hidden('_method','DELETE')}}
                                {{Form::submit('delete',['class'=>'btn btn-danger'])}}
                                {!!Form::close()!!} </td>
                        </tr>
                        @endforeach
                    </table>
                    @else
                    <p>You don't have posts</p>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
