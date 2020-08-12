@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Create (Form)</h2>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
		@csrf
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="category_name" class="form-control">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="category_photo" class="form-control-file">
 				</div>

 				<input type="submit" name="btnsubmit" value="Create" class="btn btn-outline-primary">

 			</form>
</div>
@endsection