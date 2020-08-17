@extends('backendtemplate')
@section('content')
<div class="container-fluid text-center">
	<h2>Order Detail </h2>
</div>
	
	<div class="container table-responsive py-2">
          <div class="row">
            <div class="offset-md-2 col-md-8">
              <table class="table table-bordered">
                <tr>
                  <td colspan="4">
                    <div class="row">
                      <div class="col-md-3">
                        <h6>Casher</h6>
                        <h6>Voucher</h6>
                      </div>
                      <div class="col-md-3">
                        <h6>: {{Auth::user()->name}}
                        </h6>
                        <h6>: {{$order->voucherno}}</h6>
                      </div>
                      <div class="col-md-3">
                        <h6>Order Date</h6>
                      </div>
                      <div class="col-md-3">
                        <h6>: {{$order->created_at}}
                        </h6>
                      </div>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td>Item Name</td>
                  <td>Price</td>
                  <td>Qty</td>
                  <td>Amount</td>
                </tr>
                
                @php
                $amount1=0;
                @endphp
                @foreach($order->items as $order1)
                <tr>
                  <td>{{$order1->name}} </td>
                  <td><span class="text-muted">$ {{$order1->price}}.00</span></td>

                  <td> {{$order1->pivot->qty}}</td>
                  <td>$ {{$order1->price*$order1->pivot->qty}}.00</td>
                </tr>
                @endforeach

                <tr>
                  <td colspan="3">Total amoumt</td>
                  <td>$ {{$order->total}}.00</td>
                </tr>
              </table>
            </div>
          </div>
        </div>
	
@endsection