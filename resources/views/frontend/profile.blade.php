@extends('frontendtemplate')

@section('content')
{{-- {{Auth::user()}} --}}
<div class="col-lg-9">
	<h2>Customer Profile</h2>
  <div class="container">
    <div class="row-md-12 mt-2">
      <table class="table table-bordered">
        <thead>
          <tr>
            <td>Name:</td>
            <td>{{Auth::user()->name}}</td>
          </tr>
          <tr>
            <td>Email:</td>
            <td>{{Auth::user()->email}}</td>
          </tr>
        </thead>
      </table>
    </div>
  </div>
</div>
@endsection