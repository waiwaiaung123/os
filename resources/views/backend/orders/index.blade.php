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
								<th>No</th>
								<th>VoucherNo.</th>
								<th>Order Date</th>
								{{-- <th>Status</th> --}}
								{{-- <th>User</th> --}}
								<th>Notes</th>
								<th>Total</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@php $i=1; @endphp
							@foreach($orders as $order)
							<tr>
								<td>{{$i++}}</td>	
								<th>{{$order->voucherno}}</th>
								<th>{{$order->orderdate}}</th>
								{{-- <th>{{$order->status}}</th> --}}
								{{-- <th>{{$order->user_id}}</th> --}}
								<th>{{$order->note}}</th>
								<th>{{$order->total}}</th>
								<td>
									<a href="{{route('orders.edit',$order->id)}}"><button class="btn btn-warning">Edit</button></a>
									<form method="POST" action="{{route('orders.destroy',$order->id)}}" onsubmit="return confirm('Are you sure ?')" class="float-right">
										@csrf
										@method('DELETE')
										<input type="submit" name="btnsubmit" value="Delete" class="btn btn-danger">
									</form>
								</td>
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