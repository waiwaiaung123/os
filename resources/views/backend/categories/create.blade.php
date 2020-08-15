@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Category Create (Form)</h2>
	<form method="POST" action="{{route('categories.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="category_name" class="form-control {{$errors->first('category_name') ? 'border-danger': ''}}">
			@error('category_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		<div class="form-group">
			<label>Photo</label>
			<input type="file" name="category_photo" class="form-control-file {{$errors->first('category_photo') ? 'border-danger': ''}}">
			@error('category_photo')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your photo is required!</div>
			@enderror
		</div>

		<input type="submit" name="btnsubmit" value="Create" class="btn btn-outline-primary">

	</form>
</div>
@endsection