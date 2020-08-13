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
			<tr>
				<td>1</td>
				<td>Mg Mg</td>
				<td></td>
				<td>
					<a href="{{route('subcategories.edit',1)}}"><button class="btn btn-warning">Edit</button></a>
					<a href="#"><button class="btn btn-danger">Delete</button></a>
				</td>
			</tr>
		</tbody>
	</table>
</div>
@endsection