@extends('frontendtemplate')
@section('content')

<div id="checkout_body" style="margin-top: 100px;">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Check Out</h3>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>No.</th>
								<th>Photo</th>
								<th>Item Name</th>
								<th>Price</th>
								<th>Qty</th>
								<th>Sub Total</th>
							</tr>
						</thead>
						<tbody>
							<th>1.</th>
							<th>Item One</th>
							<th>500MMK</th>
							<th>2</th>
							<th>1000</th>
						</tbody>
					</table>
				</div>
			</div>

			<div class="offset-md-2 col-md-8">
				<div class="form-group">
					<textarea class="form-control notes" placeholder="Your Note Here!"></textarea>
					<input type="hidden" name="" class="total">
				</div>
			</div>

			<div class="col-md-6">
				<a href="{{route('homepage')}}" class="btn btn-dark">Continue Shopping</a>
			</div>
			@role('customer')
			<div class="col-md-6">
				<a href='#' class='btn btn-dark buy_now'>Checkout</a>
			</div>
			@else
			<div class="col-md-6">
				<a href='{{route('login')}}' class='btn btn-dark'>Login to checkout</a>
			</div>
			@endrole
		</div>
	</div>
</div>

@endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection