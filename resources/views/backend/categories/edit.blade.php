@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Edit (Form /Old Value)</h2>
	<form method="POST" action="{{route('categories.update',$categories->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="category_name" class="form-control {{$errors->first('category_name') ? 'border-danger': ''}}" value="{{$categories->name}}">
			@error('category_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="category_photo" class="py-2 form-control-file {{$errors->first('category_photo') ? 'border-danger': ''}}" ><img src="{{asset($categories->photo)}}" class="img-fluid w-25 h-25">
			@error('category_photo')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your photo is required!</div>
			@enderror
			<input type="hidden" name="oldphoto" value="{{$categories->photo}}">
		</div>

		<input type="submit" name="btnsubmit" value="Update" class="btn btn-outline-primary">

	</form>
</div>
@endsection