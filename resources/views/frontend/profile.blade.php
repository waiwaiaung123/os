@extends('frontendtemplate')

@section('content')
{{-- {{Auth::user()}} --}}
<div class="col-lg-12 text-center py-3">
	<h2>Customer Profile</h2>
  <div class="container">
  	<img src="{{asset('backend/itemimg/aa.png')}}" class="img-fluid">
   <h3>Name: {{Auth::user()->name}}</h3>
   <h3>Email: {{Auth::user()->email}}</h3>
  </div>
</div>
@endsection