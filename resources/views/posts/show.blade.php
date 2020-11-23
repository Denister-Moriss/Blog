@extends('layouts.app')

@section('content')
  <a href="/posts" class="btn btn-default">Go back</a>
  <h1>{{$post->title}}</h1>
  <div>
     {{$post->body}}
  </div>
  <hr>
  <small>Written on {{$post->created_at}} by user</small>
  <hr>
  <a href="/posts/{{$post->id}}/edit" class="btn btn-danger">Edit</a>

  {!! Form::open(['route' => ['posts.destroy',$post->id], 'method' => 'DELETE', 'enctype' => 'multipart/form-data', 'class' => 'float-right']) !!}
                {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
  {!!Form::close()!!}

@endsection