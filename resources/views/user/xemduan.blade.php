@extends('user_layout')
@section('user_content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">	
					<h2 class="text-center">Xem dự án và lương </h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th style="text-align: center;" colspan="2">Dự án đã làm</th>
							<th rowspan="2">Lương</th>
							
						</tr>
						<tr>
							
							<th>Mã dự án</th>
							<th>Tên dự án</th>
							<th>Số ngày hoàn thành</th>
							<th>Lương cơ bản</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($duan as $key )
							<tr>	
								<td>{{ $key->MaDA }}</td>
								<td>{{ $key->TenDA }}</td>
								<td>{{ $key->LuongNV }}</td>
								<td>{{ $key->SoNHT }}</td>
								<td>{{ $key->LuongCB }}</td>
								
							</tr>
						@endforeach
						
					</tbody>
				</table>
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Tông lương</th>
							
							@foreach ($sum as $item)      
								
								<th>{{ $item->luong }}</th>
					
							
							@endforeach
							

						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
@endsection