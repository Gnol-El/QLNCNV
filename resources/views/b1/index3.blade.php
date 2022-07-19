@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				@foreach ($KAA as $key )      
					<h2 class="text-center">Thông tin dự án {{$key->TenDA}}</h2>
				@endforeach
				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							
							
							<th>Số Ngày hoàn thành</th>
							<th>Số Nhân viên</th>
							<th>Lương CB </th>
							<th>Trạng Thái</th>
							
							<td><a href="{{route('b1.index')}}"><button class="btn btn-danger">Thoát</button></a>
						</tr>
					</thead>
					<tbody>
						@foreach ($KAA as $key )      
							<tr>	
								<td>{{ $key->SoNHT }}</td>
								<td>{{ $key->SoNV }}</td>
								<td>{{ $key->LuongCB }}</td>
								<td>{{ $key->TrangT }}</td>
								
							</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã nhân viên</th>
							<th>Tên nhân viên</th>

						</tr>
					</thead>
					<tbody>
					@foreach ($KOO as $item)      
					<tr>	
						<td>{{ $item->MaNV }}</td>
						<td>{{ $item->TenNV }}</td>
					</tr>
					@endforeach
					</tbody>
				</table>
		</div>
	</div>
@endsection