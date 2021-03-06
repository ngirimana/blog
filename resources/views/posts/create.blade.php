 @extends('layouts.app')

 @section( 'content')
 <div class="container">

     <h1>Create Post</h1>
     {!! Form::open(['action'=>'PostsController@store','method'=>'POST']) !!}
     <div class="form-group">
         {{Form::label('title','Title')}}
         {{Form::text('title','',['class'=>'form-control','placeholder'=>'Title','required'])}}
     </div>
     <div class="form-group">
         {{Form::label('body','Body')}}
         {!!Form::textarea('body','',['id'=>"summary-ckeditor",'class'=>'form-control','placeholder'=>'Body','required'])!!}
        
     </div>
     {{Form::submit('submit',['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}


 </div>
 @endsection

