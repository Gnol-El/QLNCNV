@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm dự án</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="{{URL::to('/insertDA')}}">
					{{ csrf_field() }}
					<div class="form-group">
					  <label for="mada">Mã Dự án:</label>
					  <input required="true" type="text" class="form-control" id="mada" name="mada">
					</div>
					<div class="form-group">
					  <label for="Tenda">Tên Dự án:</label>
					  <input required="true" type="text" class="form-control" id="tenda" name="tenda">
					</div>
					<div class="form-group">
					  <label for="pwd">Số ngày hoàn thành:</label>
					  <input required="true" type="number" class="form-control" id="songay" name="songay">
					</div>
					<div class="form-group">
					  <label for="sonv">Số nhân viên:</label>
					  <input required="true" type="number" class="form-control" id="sonv" name="sonv">
					</div>
					<div class="form-group">
					  <label for="luong">Lương cơ bản:</label>
					  <input required="true" type="number" class="form-control" id="luongcb" name="luongcb">
					</div>
					
					<button class="btn btn-success">Thêm</button>
				</form>
			</div>
		</div>
	</div>
@endsection