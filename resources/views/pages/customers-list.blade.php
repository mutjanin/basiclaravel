@extends('layouts.default')   

@section('title_page')
รายการข้อมูล Customer @parent
@stop

@section('active_home')
class="active"
@stop

@section('content')
<div class="jumbotron">
	<div class="container">
		<h1>Customer List ({{$data_count}})</h1>
		
	</div>
</div>
<div class="container">
{!! $data_customer->render() !!}

		 <table class="table table-bordered table-hover table-striped">
		 	<thead>
		 		<tr>
		 			<th>Number</th>
		 			<th>FirstName</th>
		 			<th>LastName</th>
		 			<th>Phone</th>
		 			<th>City</th>
		 			<th>PostalCode</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 	<!-- $data_customer ตัวแปรหน้า controller -->
		 	@foreach($data_customer as $data)
		 		<tr>
		 			<td>{{ $data->customerNumber}}</td>
		 			<td>{{ $data->contactFirstName}}</td>
		 			<td>{{ $data->contactLastName}}</td>
		 			<td>{{ $data->phone}}</td>
		 			<td>{{ $data->city}}</td>
		 			<td>{{ $data->postalCode}}</td>
		 		</tr>
		 	@endforeach 
		 	</tbody>
		 </table>
	</div>

@stop