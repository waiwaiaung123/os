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

	<div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="carousel-item active">
				<img class="d-block img-fluid" src="{{asset('backend/itemimg/c1.jpeg')}}" alt="First slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="{{asset('backend/itemimg/c2.jpg')}}" alt="Second slide">
			</div>
			<div class="carousel-item">
				<img class="d-block img-fluid" src="{{asset('backend/itemimg/c3.jpeg')}}" alt="Third slide">
			</div>
		</div>
		<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>

	<div class="row">

		@foreach($items as $item)
		<div class="col-lg-4 col-md-6 mb-4">
			<div class="card h-100">
				<a href="#"><img class="card-img-top" src="{{asset($item->photo)}}" alt=""></a>
				<div class="card-body">
					<h4 class="card-title">
						<a href="#">{{$item->name}}</a>
					</h4>
					<del>${{$item->price}}.00</del>
					<p>${{$item->discount}}.00</p>
					<p class="card-text">{{$item->description}}</p>
				</div>
				<div class="card-footer">
					<a href="#" class="btn btn-info addtocart" data-id="{{$item->id}}" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-discount="{{$item->discount}}">Add to Cart</a>
					<a href="{{route('detail',$item->id)}}" class="btn btn-primary">Detail</a>
				</div>
			</div>
		</div>
		@endforeach
	</div>

</div>
@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection