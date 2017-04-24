@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><u>Create Post</u></div>

				<div class="panel-body">
					{!! Form::open(array('url' => 'posts/update')) !!}
					Title:<br>
					{!! Form::text('title',$post->title) !!}<br>
					Body:<br>
					{!! Form::textarea('body',$post->body) !!}<br>
					{!! Form::hidden('id',$post->id) !!}
					{!! Form::submit('Save') !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection