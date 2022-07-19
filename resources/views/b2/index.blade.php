@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Lương Nhân Viên</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã nhân viên</th>
							<th>Tên nhân viên</th>
							<th>Tổng lương</th>
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($KAA as $key )
							<tr>	
								<td>{{ $key->MaNV }}</td>
								<td>{{ $key->TenNV }}</td>	
								<td>{{ $key->luong }}</td>	
								<td><a href="{{route('b2.chitiet', $key->MaNV)}}"><button class="btn btn-danger">Chi tiết</button></a>
								<td><a href="{{route('b2.del', $key->MaNV)}}"><button class="btn btn-danger" style="background-color: red">Xóa nhân viên</button></a>
							</tr>
						@endforeach
					</tbody>
				</table>
				
			</div>
		</div>
	</div>
@endsection