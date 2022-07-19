@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Dự Án</h2>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>Mã Dự Án</th>
							<th>Tên Dự án</th>
							<th>Trạng thái</th>

							<th width="120px"></th>
							<th width="50px"></th>
							<th width="50px"></th>
						</tr>
					</thead>
					<tbody>
						@foreach ($userList as $item)
							<tr>
								<td>{{ $item->MaDA }}</td>
								<td>{{ $item->TenDA }}</td>
								<td>{{ $item->TrangT }}</td>		
								<td><a href="{{route('b1.index2',$item->MaDA)}}"><button class="btn btn-warning" style="display:
								<?php
									if ($item->TrangT == 'Hoàn thành') {echo 'none';}
									else{echo 'block';}
								?>">Hoàn Thành</button>
								<td><a href="{{route('b1.index33',$item->MaDA)}}"><button class="btn btn-danger">Chi tiết</button></a></td>	
								<td><a href="{{route('b1.del',$item->MaDA)}}"><button class="btn btn-danger" style="background-color: red">Xóa</button></a></td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $userList->links() !!}
			</div>
		</div>
	</div>
@endsection