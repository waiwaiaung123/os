@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">Category List (Table)</h2>
	<a href="{{route('categories.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Photo</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($categories as $category)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$category->name}}</td>
				<td><img src="{{asset($category->photo)}}" class="img-fluid w-25 "> </td>
				<td>
					<a href="{{route('categories.edit',$category->id)}}"><button class="btn btn-warning">Edit</button></a>
					<form method="POST" action="{{route('categories.destroy',$category->id)}}" onsubmit="return confirm('Are you sure ?')" class="d-inline-block">
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