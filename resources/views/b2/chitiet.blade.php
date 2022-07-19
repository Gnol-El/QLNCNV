@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				@foreach ($ten as $key )      
					<h2 class="text-center">Thông tin lương nhân viên {{$key->TenNV}}</h2>
				@endforeach
				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="text-align: center;" colspan="2">Dự án đã làm</th>
							<th rowspan="2">Lương</th>
							<td width="50px" rowspan="2"><a href="{{route('b2.index')}}"><button class="btn btn-danger">Thoát</button></a>
						</tr>
						<tr>
							
							<th>Mã dự án</th>
							<th>Tên dự án</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($KAA as $key )      
							<tr>	
								<td>{{ $key->MaDA }}</td>
								<td>{{ $key->TenDA }}</td>
								<td>{{ $key->LuongNV }}</td>
								
								
							</tr>
						@endforeach
						
					</tbody>
				</table>
				
			</div>
			<<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Tông lương</th>
							
							@foreach ($KOO as $item)      
								
								<th>{{ $item->luong }}</th>
					
							
							@endforeach
							

						</tr>
					</thead>
				</table>
		</div>
	</div>
@endsection