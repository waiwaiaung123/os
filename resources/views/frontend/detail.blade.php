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
      <tr>
        <th>No</th>
        <th>Codeno</th>
        <th>Name</th>
        <th>Price</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @php $i=1; @endphp
      @foreach($items as $item)
      <tr>
        <td>{{$i++}}</td>
        <td>
          {{$item->codeno}}
          <a href="{{route('items.show',$item->id)}}"><span class="badge badge-primary badge-pill">Detail</span></a>
          <a href="#" class="box" data-name="{{$item->name}}" data-photo="{{asset($item->photo)}}" data-price="{{$item->price}}" data-desc="{{$item->description}}"><span class="badge badge-primary badge-pill">Modal</span></a>
        </td>
        <td>{{$item->name}}</td>
        <td>{{$item->price}}</td>
        <td>
          <a href="{{route('items.edit',$item->id)}}"><button class="btn btn-warning">Edit</button></a>
          <form method="POST" action="{{route('items.destroy',$item->id)}}" onsubmit="return confirm('Are you sure ?')" class="d-inline-block">
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
@endsection