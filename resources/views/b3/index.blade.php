@extends('admin_layout')
@section('content')
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Thêm nhân viên</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="{{URL::to('/insert') }}">
					{{ csrf_field() }}
					<div class="form-group">
					  <label for="Tên nhiên">Tên nhân viên:</label>
					  <input required="true" type="text" class="form-control" id="tennv" name="tennv">
					</div>
					<div class="form-group">
					  <label for="pwd">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email">
					</div>
					<div class="form-group">
					  <label for="email">Mật khẩu:</label>
					  <input required="true" type="text" class="form-control" id="matkhau" name="matkhau">
					</div>
					
					<button class="btn btn-success">Thêm</button>
				</form>
			</div>
		</div>
	</div>
@endsection