@extends('app')

@section('content')
 <b>Title:</b> {{ $post->title}}<br>
 <b>Body:</b> {{ $post->body }}

 <br>
@endsection