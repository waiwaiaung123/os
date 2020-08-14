@extends('frontendtemplate')
@section('category')
 <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Shop Name</h1>
        <div class="list-group">
          <a href="{{route('filteritem')}}" class="list-group-item">Category 1</a>
          <a href="#" class="list-group-item">Category 2</a>
          <a href="#" class="list-group-item">Category 3</a>
        </div>

      </div>
@endsection
@section('content')
<div class="col-lg-9">
	<h1 class="py-4 text-center">Item Filter By Brand and Subcategory</h1>
	
	<div class="row">

		@foreach($items as $item)
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">{{$item->name}}</a>
					</h4>
					<h5>{{$item->price}}</h5>
					<p class="card-text">{{$item->description}}</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info">Add to Cart</a>
					<a href="{{route('detail',$item->id)}}" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

</div>
@endsection