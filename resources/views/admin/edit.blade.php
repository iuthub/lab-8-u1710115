@extends('layouts.admin')
@section('content')
@include('partials.errors')

<div class="row">
	<div class="col-md-12">
		<form action="{{ route('admin.update')}}" method="post">
			<div class="form-group">
				<label for="title">Title</label>
				<input type="hidden" name="id" value="{{ $postId}}">		
				<input type="text" class="form-control" name="title" id="title" value="{{ $post['title']}}">				
			</div>
			<div class="form-group">
				<label for="content">Content</label>	
				<input type="text" class="form-control" name="content" id="content" value="{{ $post['content']}}">				
			</div>
			@csrf
			<button type="submit" class="btn btn-primary" >Submit</button>								
		</form>		
	</div>
</div>
@endsection