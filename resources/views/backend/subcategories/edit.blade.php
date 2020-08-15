@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>SubCategory Edit (Form /Old Value)</h2>
	<form method="POST" action="{{route('subcategories.update',$subcategories->id)}}" enctype="multipart/form-data">
		@csrf
		@method('PUT')
		<div class="form-group">
			<label>Name</label>
			<input type="text" name="subcategory_name" class="form-control {{$errors->first('subcategory_name') ? 'border-danger': ''}}" value="{{$subcategories->name}}">
			@error('subcategory_name')
			{{-- <div>{{$message}}</div> --}}
			<div class="text-danger">Your codeno is required!</div>
			@enderror
		</div>
		<div class="form-group">
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
		</div>

			<input type="submit" name="btnsubmit" value="Update" class="btn btn-outline-primary">

		</form>
	</div>
	@endsection