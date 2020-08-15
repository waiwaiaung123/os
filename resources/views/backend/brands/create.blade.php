@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Brand Create (Form)</h2>
	<form method="POST" action="{{route('brands.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="brand_name" class="form-control {{$errors->first('brand_name') ? 'border-danger': ''}}">
			@error('brand_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="brand_photo" class="form-control-file {{$errors->first('brand_photo') ? 'border-danger': ''}}">
			@error('brand_photo')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your photo is required!</div>
			@enderror
		</div>

		<input type="submit" name="btnsubmit" value="Create" class="btn btn-outline-primary">

	</form>
</div>
@endsection