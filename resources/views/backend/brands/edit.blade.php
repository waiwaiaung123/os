@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Edit (Form /Old Value)</h2>
	<form method="POST" action="{{route('brands.update',$brands->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="brand_name" class="form-control {{$errors->first('brand_name') ? 'border-danger': ''}}" value="{{$brands->name}}">
			@error('brand_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="brand_photo" class="py-2 form-control-file {{$errors->first('brand_photo') ? 'border-danger': ''}}" ><img src="{{asset($brands->photo)}}" class="img-fluid w-25 h-25">
			@error('brand_photo')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your photo is required!</div>
			@enderror
			<input type="hidden" name="oldphoto" value="{{$brands->photo}}">
		</div>

		<input type="submit" name="btnsubmit" value="Update" class="btn btn-outline-primary">

	</form>
</div>
@endsection