@extends('layouts.app')
@section('title', 'Home')
<div class="container">
@section('bodyContent')
<!-- Table -->
<table class="table width="100" border="1">
	<thead>
		<h4 class="relicsPlace text-center">RELICS PLACE</h4>
		<tr>
			<th>Relics name</th>
			<th>Address</th>
			<th>Cost</th>
			<th>Time</th>
			<th>Capacity</th>
			<th>Note</th>
			<th>Register</th>
			<th>Edit</th>
			<th>Delete</th>
			
		</tr>
	</thead>
	@foreach($relics as $a)
	<tr>
		<td><p>{{$a->relicsname}}</p></td>
		<td><p>{{$a->address}}</p></td>
		<td><p>{{$a->cost}}</p></td>
		<td><p>{{$a->time}}</p></td>
		<td><p>{{$a->capacity}}</p></td>
		<td><p>{{$a->note}}</p></td>
		<td ><a href="ddd"><span style= 'color: green' class="glyphicon glyphicon-pencil "></a></span></td>
		<td><a href="dd"><span style= 'color: orange' class="glyphicon glyphicon-edit"></a></span></td>
		<td><a href="cd"><span style= 'color: blue' class="glyphicon glyphicon-trash"></a></span></td>
		@endforeach
	</tr>
	</div>

</table>
@endsection
