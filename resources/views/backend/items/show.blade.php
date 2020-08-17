@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail </h2>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset($item->photo)}}" class="img-fluid w-75 h-100">
			</div>
			<div class="col-md-6">
				<p>Product Name : {{$item->name}}</p>
				<p>Product Code : {{$item->codeno}}</p>
				<p>Product Price : {{$item->price}}</p>
				<p>Description : {{$item->description}}</p>
				<p>Brand Name : {{$item->brand->name}}</p>
				<p>Subcategory Name : {{$item->subcategory->name}}</p>
			</div>
		</div>
	</div>
@endsection