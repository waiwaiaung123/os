@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Create (Form)</h2>
	{{-- @if ($errors->any())
		<div class="alert alert-danger">
			<ul>
				@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
		@endif --}}
		<form method="POST" action="{{route('items.store')}}" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label>Code No</label>
				<input type="text" name="item_codeno" class="form-control {{$errors->first('item_codeno') ? 'border-danger': ''}}">
				@error('item_codeno')
				{{-- <div>{{$message}}</div> --}}
				<div class="text-danger">Your codeno is required!</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="item_name" class="form-control {{$errors->first('item_name') ? 'border-danger': ''}}">
				@error('item_name')
				{{-- <div>{{$message}}</div> --}}
				<div class="text-danger">Your name is required!</div>
				@enderror
			</div>
			<div class="form-group">
				<label>Photo</label>
				<input type="file" name="item_photo" class="form-control-file {{$errors->first('item_photo') ? 'border-danger': ''}}">
				@error('item_photo')
				{{-- <div>{{$message}}</div> --}}
				<div class="text-danger">Your photo is required!</div>
				@enderror
			</div>

			<ul class="nav nav-tabs" id="myTab" role="tablist">
				<li class="nav-item" role="presentation">
					<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Unit Price</a>
				</li>
				<li class="nav-item" role="presentation">
					<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Discount Price</a>
				</li>
			</ul>
			<div class="tab-content" id="myTabContent">
				<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
					<div class="form-group my-3">
						<input type="number" name="unit_price" class="form-control {{$errors->first('unit_price') ? 'border-danger': ''}}" placeholder="Unit Price">
						@error('unit_price')
						{{-- <div>{{$message}}</div> --}}
						<div class="text-danger">Your price is required!</div>
						@enderror
					</div>
				</div>
				<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
					<div class="form-group my-3">
						<input type="number" name="discount_price" class="form-control {{$errors->first('discount_price') ? 'border-danger': ''}}" placeholder="Discount Price">
						@error('discount_price')
						{{-- <div>{{$message}}</div> --}}
						<div class="text-danger">Your discount price is required!</div>
						@enderror
					</div>
				</div>
			</div>

			<div class="form-group">
				<label>Brand:</label>
				<select name="brand" class="form-control">
					<optgroup label="Choose Brand">
						@foreach($brands as $brand)
						<option value="{{$brand->id}}">{{$brand->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>

			<div class="form-group">
				<label>Sub Category</label>
				<select name="subcategory" class="form-control">
					<optgroup label="Choose SubCategory">
						@foreach($subcategories as $subcategory)
						<option value="{{$subcategory->id}}">{{$subcategory->name}}</option>
						@endforeach
					</optgroup>
				</select>
			</div>

			<div class="form-group">
				<label>Description</label>
				<textarea class="form-control {{$errors->first('item_des') ? 'border-danger': ''}}" name="item_des"></textarea>
				@error('discount_price')
				{{-- <div>{{$message}}</div> --}}
				<div class="text-danger">Your discount price is required!</div>
				@enderror
			</div>

			<input type="submit" name="btnsubmit" value="Create" class="btn btn-outline-primary">

		</form>
	</div>
	@endsection