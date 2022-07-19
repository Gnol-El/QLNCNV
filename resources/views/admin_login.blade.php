<!DOCTYPE html>
<head>
	<title>Trang quản lý Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Visitors Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

	<script src="js/jquery2.0.3.min.js"></script>
	<link href="{{asset('public/frontend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/font-awesome.min.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/prettyPhoto.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/price-range.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/animate.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/main.css')}}" rel="stylesheet">
    <link href="{{asset('public/frontend/css/responsive.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/backend/css/bootstrap.min.css')}}" >
	<!-- //bootstrap-css -->
	<!-- Custom CSS -->
	<link href="{{asset('public/backend/css/style.css')}}" rel='stylesheet' type='text/css' />
	<link href="{{asset('public/backend/css/style-responsive.css')}}" rel="stylesheet"/>
	<!-- font CSS -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
	<!-- font-awesome icons -->
	<link rel="stylesheet" href="{{asset('public/backend/css/font.css')}}" type="text/css"/>
	<link href="{{asset('public/backend/css/font-awesome.css')}}" rel="stylesheet"> 
	<link rel="stylesheet" href="{{asset('public/backend/css/morris.css')}}" type="text/css"/>
	<!-- calendar -->
	<link rel="stylesheet" href="{{asset('public/backend/css/monthly.css')}}">
	<!-- //calendar -->
	<!-- //font-awesome icons -->
	<script src="{{asset('public/backend/js/jquery2.0.3.min.js')}}"></script>
	<script src="{{asset('public/backend/js/raphael-min.js')}}"></script>
	<script src="{{asset('public/backend/js/morris.js')}}"></script>
</head>
<body>
	<section>
		@yield('top_content')
	</section>
	<div class="log-w3">
		<div class="w3layouts-main">
			<h2>Đăng nhập</h2>
			<?php
				Session::put('prev','login');
				$message = Session::get('message');
				if($message){
					echo '<span class="text-alert">'.$message.'</span>';
					Session::put('message', null);
				}
			?>
			<form action="{{URL::to('/admin-dashboard')}}" method="post">
				{{ csrf_field() }}
				<input type="email" class="ggg" name="email" placeholder="E-MAIL" value="<?php
					if(isset($_COOKIE['email_cookie'])){echo $_COOKIE['email_cookie'];}
				?>" required="">
				<input type="password" class="ggg" name="password" placeholder="MẬT KHẨU" value="<?php
					if(isset($_COOKIE['password_cookie'])){echo $_COOKIE['password_cookie'];}
				?>" required="">
				<span><input type="checkbox" name="remember" <?php
					if (isset($_COOKIE['email_cookie'])) {
						?>checked
					<?php } ?>/>Nhớ thông tin đăng nhập</span>
				<h6><a href="javascript:void(0)">Quên mật khẩu?</a></h6>
					<div class="clearfix"></div>
					<input type="submit" value="ĐĂNG NHẬP" name="login">
			</form>
		</div>
	</div>
</body>
</html>