@extends('layouts.admin')
@section('content')
	
	<div class="row">
		<div class="col-md-12">
			<form action="{{ route('admin.create')}}" method="post">
					<div class="form-group">
						<label for="title"> Title </label>		
						<input type="text" class="form-control" aria-label="title" aria-describedby="basic-addon2">
					</div>
					<div class="form-group">
						<label for="content"> Content </label>		
						<input type="text" class="form-control" aria-label="content" aria-describedby="basic-addon2">		
					</div>
					@csrf
					<button type="submit" class="btn btn-primary" >Submit</button>								
			</form>			
		</div>		
	</div>
@endsection