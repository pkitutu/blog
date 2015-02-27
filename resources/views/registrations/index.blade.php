@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Below are the registrations</div>

				<div class="panel-body">
					<table>
						<tr><th /> <th /></tr>
					@foreach ($registrations as $registration)
					<tr>
						<td>{!! link_to('registrations/show/'.$registration->id,$registration->name) !!}</td>
						<td>{!! link_to('registrations/edit/'.$registration->id,'Edit') !!}</td>
						<td>{!! link_to('registrations/delete/'.$registration->id,'Delete') !!}</td>
					</tr>
					
					@endforeach
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection