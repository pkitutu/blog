@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><u>Create Reply</u></div>

				<div class="panel-body">
					{!! Form::open(array('url' => 'replies/store')) !!}
					Reply:<br>
					{!! Form::text('reply','') !!}<br>
					Post ID: <br>
					{!! Form::text('post_id','') !!}<br>
					{!! Form::submit('Save') !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection