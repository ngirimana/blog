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
         {{Form::textarea('body','',['id'=>"summary-ckeditor", 'name'=>"summary-ckeditor",'class'=>'form-control','placeholder'=>'Body','required'])}}
         <script src="{{ asset('ckeditor/ckeditor.js') }}"></script>
         <script>
             CKEDITOR.replace('summary-ckeditor');

         </script>
     </div>
     {{Form::submit('submit',['class'=>'btn btn-primary'])}}
     {!! Form::close() !!}


 </div>
 @endsection

