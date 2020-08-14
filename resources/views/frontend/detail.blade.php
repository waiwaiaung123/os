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
     <h1 class="py-4 text-center">Item Detail</h1>
     <table class="table table-bordered">
      <thead>
        {{-- @foreach($items as $item) --}}

        <tr>
          <td>Name</td>
          <td>
            {{$items->name}}
          </td>
        </tr> 

        <tr> 
          <td>Photo</td>
          <td><img src="{{asset($items->photo)}}" class="img-fluid  h-50"></td>
        </tr> 

        <tr> 
          <td>Price</td> 
          <td>{{$items->price}}</td>
        </tr>
        
        <tr>
          <td>Cart</td>
          <td>
           <a href="#" class="btn btn-info addtocart" data-id="{{$items->id}}" data-name="{{$items->name}}" data-photo="{{asset($items->photo)}}" data-price="{{$items->price}}" data-discount="{{$items->discount}}">Add to Cart</a>
          </td>
        </tr>
        {{-- @endforeach --}}
      </thead>
    </table>
  </div>
  @endsection
@section('script')
<script type="text/javascript" src="{{asset('frontend/js/script.js')}}"></script>
@endsection