@extends('backendtemplate')
@section('content')
<div id="checkout_body" style="margin-top: 100px;">
	<div class="container my-5 text-center">
		<div class="row">
			<div class="offset-md-2 col-md-8">
				<h3 class="py-3">Orders</h3>
				<div class="table-responsive">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th>VoucherNo.</th>
								<th>Order Date</th>
								<th>Status</th>
								<th>User</th>
								<th>Notes</th>
								<th>Total</th>
							</tr>
						</thead>
						<tbody>
							@foreach($orders as $order)
							<tr>
							<th>{{$order->voucherno}}</th>
							<th>{{$order->orderdate}}</th>
							<th>{{$order->status}}</th>
							<th>{{$order->user_id}}</th>
							<th>{{$order->note}}</th>
							<th>{{$order->total}}</th>
							</tr>
							@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection