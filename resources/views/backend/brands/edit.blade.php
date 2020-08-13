@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Edit (Form /Old Value)</h2>
	@if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form method="POST" action="{{route('brands.update',$brands->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
 				<div class="form-group">
 					<label>Name</label>
 					<input type="text" name="brand_name" class="form-control" value="{{$brands->name}}">
 				</div>
 				<div class="form-group">
 					<label>Photo</label>
 					<input type="file" name="brand_photo" class="py-2 form-control-file" ><img src="{{asset($brands->photo)}}" class="img-fluid w-25 h-25">
 					<input type="hidden" name="oldphoto" value="{{$brands->photo}}">
 				</div>

 				<input type="submit" name="btnsubmit" value="Update" class="btn btn-outline-primary">

 	</form>
</div>
@endsection