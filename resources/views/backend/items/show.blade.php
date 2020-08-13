@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2>Item Detail (Your UI)</h2>
</div>
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<img src="{{asset($item->photo)}}" class="img-fluid">
			</div>
			<div class="col-md-6">
				<p>Product Name: {{$item->name}}</p>
				<p>Product Code: {{$item->codeno}}</p>
				<p>Product Price: {{$item->price}}</p>
				<p>Description: {{$item->description}}</p>
			</div>
		</div>
	</div>
@endsection