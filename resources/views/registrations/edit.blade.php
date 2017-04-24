@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading"><u>Edit Registration</u></div>

				<div class="panel-body">
					{!! Form::open(array('url' => 'registrations/update')) !!}
					Name:
					{!! Form::text('name',$registration->name) !!}<br>
					Sex: 
					{!! Form::radio('sex','m',$registration->mchkt).'M '.Form::radio('sex','f',$registration->fchkt).'F ' !!}<br>
					Date of Birth:
					{!! Form::text('dob',$registration->dob) !!}<br>
					{!! Form::hidden('id',$registration->id) !!}
					{!! Form::submit('Save') !!}
					{!! Form::close() !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection