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
		<h1>Product List  ({{ $data_cnt}})</h1>
		
	</div>
</div>
<div class="container">


		 <table class="table table-bordered table-hover table-striped">
		 	<thead>
		 		<tr>
		 			<th>Product_id</th>
		 			<th>PrdouctName</th>
		 			<th>ราคา</th>
		 		</tr>
		 	</thead>
		 	<tbody>
		 	<!-- $data_customer ตัวแปรหน้า controller -->
		 	@foreach($data_product as $data)
		 		<tr>
		 			<td>{{ $data->prd_id}}</td>
		 			<td>{{ $data->prdname}}</td>
		 			<td>{{ $data->price}}</td>
		 		</tr>
		 	@endforeach 
		 	</tbody>
		 </table>
	</div>

@stop