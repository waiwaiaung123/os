@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Edit (Form /Old Value)</h2>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form method="POST" action="{{route('categories.update',$categories->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="category_name" class="form-control" value="{{$categories->name}}">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="category_photo" class="py-2 form-control-file" ><img src="{{asset($categories->photo)}}" class="img-fluid w-25 h-25">
 					<input type="hidden" name="oldphoto" value="{{$categories->photo}}">
 				</div>

 				<input type="submit" name="btnsubmit" value="Update" class="btn btn-outline-primary">

 	</form>
</div>
@endsection