@extends('backendtemplate')
@section('content')
<div class="container-fluid">
	<h2 class="d-inline-block">SubCategory List (Table)</h2>
	<a href="{{route('subcategories.create')}}" class="btn btn-success float-right">Add New</a>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th>No</th>
				<th>Name</th>
				<th>Category</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1; @endphp
			@foreach($subcategories as $subcategory)
			<tr>
				<td>{{$i++}}</td>
				<td>{{$subcategory->name}}</td>
				<td>{{$subcategory->category->id}}</td>
				<td>
					<a href="{{route('subcategories.edit',$subcategory->id)}}"><button class="btn btn-warning">Edit</button></a>
					<form method="POST" action="{{route('subcategories.destroy',$subcategory->id)}}" onsubmit="return confirm('Are you sure ?')" class="d-inline-block">
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