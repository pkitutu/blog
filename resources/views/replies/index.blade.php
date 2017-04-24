@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Below are all the replies</div>

				<div class="panel-body">
					<table class='table'>
						<tr><th /> <th /><th /> <th /></tr>
					@foreach ($replies as $r)
					<?php  $pst=$r->post() ?>
					<tr>
						<td>{!! $r->reply !!}</td>
						<td> <?php var_dump($pst) //echo $pst->body ?> </td>
						<td>{!! link_to('replies/edit/'.$r->id,'Edit') !!}</td>
						<td>{!! link_to('replies/delete/'.$r->id,'Delete') !!}</td>
					</tr>
					
					@endforeach
					</table>
					{!! link_to ('replies/create','New Reply') !!}
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection