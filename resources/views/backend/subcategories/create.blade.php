@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>SubCategory Create (Form)</h2>
	<form method="POST" action="{{route('subcategories.store')}}" enctype="multipart/form-data">
		@csrf
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="subcategory_name" class="form-control {{$errors->first('subcategory_name') ? 'border-danger': ''}}">
			@error('subcategory_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		{{-- <div class="form-group">
			<label> Category</label>
			<select name="category" class="form-control">
				<optgroup label="Choose Category">
					@foreach($categories as $category)
					<option value="{{$category->id}}"
						@if($category->id == $subcategories->category_id)
						{{'selected'}}
						@endif
						>{{$category->name}}
					</option>
						@endforeach
				</optgroup>
			</select>
		</div> --}}
		<div class="form-group">
				<label>Category:</label>
				<select name="category" class="form-control">
					<optgroup label="Choose Category">
						@foreach($categories as $category)
						<option value="{{$category->id}}">{{$category->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>

		<input type="submit" name="btnsubmit" value="Create" class="btn btn-outline-primary">

	</form>
</div>
@endsection