@extends('app')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Below are the posts</div>

				<div class="panel-body">
					<table>
						<tr><th /> <th /></tr>
					@foreach ($posts as $post)
					<tr>
						<td>{!! link_to('posts/show/'.$post->id,$post->title) !!}</td>
						<td>{!! link_to('posts/edit/'.$post->id,'Edit') !!}</td>
						<td>{!! link_to('posts/delete/'.$post->id,'Delete') !!}</td>
					</tr>
					
					@endforeach
					</table>
					
				</div>
			</div>
		</div>
	</div>
</div>
@endsection