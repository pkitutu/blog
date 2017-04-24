@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><u>Create Registration</u></div>

				<div class="panel-body">
					{!! Form::open(array('url' => 'registrations/store')) !!}
					Name:
					{!! Form::text('name','') !!}<br>
					Sex: {!! $mchkt !!}
					{!! Form::radio('sex','m').'M '.Form::radio('sex','f').'F ' !!}<br>
					Date of Birth:
					{!! Form::text('dob','') !!}<br>
					
					{!! Form::submit('Save') !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection