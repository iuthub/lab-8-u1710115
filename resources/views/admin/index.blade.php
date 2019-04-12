@extends('layouts.admin')
@section('content')

@if(Session::has('info'))	
<div class="row">
	<div col-md-12>
		<p class="alert alert-info">{{ Session::get('info') }}</p>
	</div>
</div>
@endif
<div class="row">
	<div class="col-md-12">
		<a type="button" class="btn btn-success" href="{{ route('admin.create')}}">New Post</a>		
				
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		<p><strong>{{ $post['title']}}</strong></p>
		<a type="button" class="btn btn-success" href="{{ route('admin.edit', [ 'id' => array_search($post, $posts) ])}}">
																												Edit</a>		
				
	</div>
</div>


@endsection