@extends('app')

@section('content')
 <b>Title:</b> {{ $post->title}}<br>
 <b>Body:</b> {{ $post->body }}
<br>
<?php 
foreach ($replies as $r) {
	echo $r->reply;
}

?>
 <br>
@endsection