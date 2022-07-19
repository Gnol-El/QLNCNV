@extends('user_layout')
@section('user_content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				
					<h2 class="text-center">Thông tin nhân viên</h2>
			
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							
							<th>Mã Nhân viên</th>
							<th>Tên Nhân viên</th>
							<th>Email</th>
							<th>Trạng thái</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach ($KAA as $key )
							<tr>	
								<td>{{ $key->MaNV }}</td>
								<td>{{ $key->TenNV }}</td>
								<td>{{ $key->Email }}</td>
								<td><?php 
										if($key->TrangTNV==1){
							                $key->TrangTNV='Bận';
							            }else{
							                $key->TrangTNV='Rảnh rỗi';
							            }
							            echo $key->TrangTNV;
									?></td>
								
							</tr>
						@endforeach
						
					</tbody>
				</table>				
			</div>
		</div>
	</div>
@endsection